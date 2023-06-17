<?php

namespace App\GraphQL\Mutations;

use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

class AuthMutation
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function login($_, array $args)
    {
        $credentials = Arr::only($args, ['email', 'password']);


        $user = User::whereEmail($credentials['email'])->first();

        if (!$user || !Hash::check($credentials['password'], $user->password)) {
            return response()->json(['error' => 'login error, try again'], 401);
        }


        return $user->createToken('auth_token')->plainTextToken;
    }
}
