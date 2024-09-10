<?php

namespace App\Http\Controllers;

use App\Http\Services\UserService;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Summary of destroy
     * @param \App\Models\User $user
     * @param \App\Http\Services\UserService $userService
     * @return mixed|\Illuminate\Http\RedirectResponse
     */
    public function destroy(User $user, UserService $userService)
    {
        $userService->delete($user);

        return redirect()->back()->withSuccess('Your record deleted successfuly');
    }
}
