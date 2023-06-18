<?php

namespace App\GraphQL\Mutations;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

final class UserTestMutation
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        // find the user model
        $user = User::find(Auth::user()->id);

        // create a new user test for logged in user

        $createUserTest = $user->userTests()->create(['labTests_id' => $args['labTests_id']]);

        if (!$createUserTest) {
            return "User tests could not be created";
        } else {
            return $createUserTest;
        }
    }
}
