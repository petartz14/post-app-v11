<?php

namespace App\Http\Controllers;

use App\Http\Services\HomeService;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return inertia('Home', [
            'users' => User::all(),
            'posts' => Post::with('user:username,id')->get()
        ]);
    }

    public function storeUsers(HomeService $homeService)
    {
        return $homeService->storeUsers();
    }

    public function storePosts(HomeService $homeService)
    {
        return $homeService->storePosts();
    }
}
