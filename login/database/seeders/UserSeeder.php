<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [];

        for ($i = 1; $i <= 20; $i++) {
            $users[] = [
                'name' => "usuario$i",
                'password' => "senha$i",
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('users')->insert($users);
    }
}
