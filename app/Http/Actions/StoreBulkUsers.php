<?php

namespace App\Http\Actions;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Throwable;

class StoreBulkUsers
{
    public function handle()
    {
        try {
            $data = Http::jsonplaceholder()->get('/users');

            $users = [];
            foreach ($data->object() as $item) {
                $users[] = [
                    'name' => $item->name,
                    'username' => $item->username,
                    'email' => $item->email,
                    'address' => json_encode($item->address),
                    'phone' => $item->phone,
                    'website' => $item->website,
                    'company' => json_encode($item->company),
                    'created_at' => now(),
                    'updated_at' => now()
                ];
            }

            DB::table('users')->insert($users);

            return true;
        } catch (Throwable $th) {
            return $th;
        }
    }
}
