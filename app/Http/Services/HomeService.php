<?php

namespace App\Http\Services;

use App\Http\Actions\StoreBulkPosts;
use App\Http\Actions\StoreBulkUsers;

class HomeService
{
    public function storeUsers()
    {
        $users = new StoreBulkUsers();

        $users->handle();

        return redirect()->back();
    }

    public function storePosts()
    {
        $posts = new StoreBulkPosts();

        $posts->handle();

        return redirect()->back();
    }
}
