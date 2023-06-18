<?php

namespace App\GraphQL\Mutations;

use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

final class LoginMutation
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {

        $credentials = Arr::only($args, ['email', 'password']);
        $user = User::whereEmail($credentials['email'])->first();

        if (!$user || !Hash::check($credentials['password'], $user->password)) {

            return "login error, try again";
        }


        return $user->createToken('auth_token')->plainTextToken;
    }
}
