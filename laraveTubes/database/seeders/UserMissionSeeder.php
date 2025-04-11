<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserMissionSeeder extends Seeder
{
    public function run()
    {
        DB::table('user_missions')->insert([
            [
                'user_id' => 5,
                'mission_id' => 1,
                'is_completed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 5,
                'mission_id' => 2,
                'is_completed' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 6,
                'mission_id' => 2,
                'is_completed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 6,
                'mission_id' => 2,
                'is_completed' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
