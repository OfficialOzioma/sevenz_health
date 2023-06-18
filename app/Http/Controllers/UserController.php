<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\LabTests;
use App\Models\UserTests;
use App\Helpers\SendEmail;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $results = [];

    public function index()
    {
        // $userTest = UserTest::whereUserId(Auth::user()->id)->with('xray', 'ultrasound')->get();

        $labTests = LabTests::all();

        return [
            "Lab_Test" =>   $labTests,
        ];
    }

    public function signin(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::whereEmail($validated['email'])->first();

        if (!$user || !Hash::check($validated['password'], $user->password)) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid username or password',
            ], 401);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'success' => true,
            'message' => 'User logged in successfully',
            'data' => [
                'user' => $user,
                'token' => $token,
            ]
        ], 200);
    }

    public function store(UserRequest $request)
    {
        $validated = $request->validated();

        // return $validated;
        foreach ($validated['user_tests'] as $user_test) {
            // return $user_test['lab_tests_id'];

            $usertests = UserTests::create([
                'user_id' => Auth::user()->id,
                'labTests_id' => $user_test['labTests_id'],
            ]);

            if (!$usertests) {

                $this->results = response()->json([
                    'success' => false,
                    'message' => 'User tests could not be created',
                ], 500);

                break;
            }
        }

        if (!empty($this->results) || $this->results !== []) {
            return $this->results;
        }

        // send email
        $mailData = [
            'name' => Auth::user()->name,
            'email' => 'peopleoperations@kompletecare.com',
            'username' => Auth::user()->username,
            'user_tests' => UserTests::whereUserId(Auth::user()->id)->with('labTests')->get(),
        ];

        $sentEmail = SendEmail::send($mailData);


        if (!$sentEmail) {
            return response()->json([
                'success' => false,
                'message' => 'Email could not be sent',
            ], 500);
        }


        return response()->json([
            'success' => true,
            'message' => 'User tests created successfully',
        ], 201);
    }
}
