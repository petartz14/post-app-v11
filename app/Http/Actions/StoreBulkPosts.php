<?php

namespace App\Http\Actions;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Throwable;

class StoreBulkPosts
{

    public function handle()
    {
        try {
            $data = Http::jsonplaceholder()->get('/posts');

            $posts = [];
            foreach ($data->object() as $item) {
                $posts[] = [
                    'user_id' => $item->userId,
                    'title' => $item->title,
                    'body' => $item->body,
                    'created_at' => now(),
                    'updated_at' => now()
                ];
            }

            DB::table('posts')->insert($posts);

            return true;
        } catch (Throwable $th) {
            return $th;
        }
    }
}
