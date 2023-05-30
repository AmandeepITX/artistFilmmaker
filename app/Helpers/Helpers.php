<?php



 function rolePermission($permissions)
 {

    $user = auth()->user();
    if ($permissions == $user->user_type) {
        return true;
    }
    return false;
 }
