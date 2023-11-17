<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;

class RoleHelper
{
    public static function getUserRoles()
    {
        $user = Auth::user();
        if ($user) {
            return $user->getRoleNames()->toArray();
        }

        return [];
    }
}
