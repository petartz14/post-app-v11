<?php

namespace App\Http\Services;

use App\Models\User;
use Throwable;

class UserService
{
    public function delete(User $user)
    {
        try {
            $user->posts()->delete();
            $user->delete();
            return true;
        } catch (Throwable $th) {
            return $th;
        }
    }
}
