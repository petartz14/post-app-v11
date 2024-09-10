<?php

namespace App\Http\Controllers;

use App\Http\Services\PostService;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(Post $post)
    {
        $post->load('user');

        return inertia('PostShow', [
            'post' => $post
        ]);
    }

    public function destroy(Post $post, PostService $postService)
    {
        $postService->delete($post);

        return redirect()->back()->withSuccess('Your record deleted successfuly');
    }
}
