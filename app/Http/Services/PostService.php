<?php

namespace App\Http\Services;

use App\Models\Post;
use Throwable;

class PostService
{

    public function delete(Post $post)
    {
        $post->delete();
        return true;
    }
}
