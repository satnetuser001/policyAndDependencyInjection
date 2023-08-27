<?php

namespace App\Policies;

use App\Models\User;

/**
 * Caution! Because the policy on default gets the current authenticated user,
 * variable names are used in the following senses:
 * $user - current authenticated user;
 * $profile - some user profile from the database.
 */
class UserPolicy
{
    public function isRoot($user, User $profile){
        if ($profile->name == 'root') {
            return true;
        }
        else{
            return false;
        }
    }
}
