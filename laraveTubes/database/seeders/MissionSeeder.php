<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MissionSeeder extends Seeder
{
    public function run()
    {
        DB::table('missions')->insert([
            [
                'title' => 'Membersihkan Halaman Rumah',
                'description' => 'Membersihkan halaman rumah.',
                'points' => 50,
                'image_url' => 'asset/clean_garden.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Membersihkan Kamar',
                'description' => 'Membersihkan Kamar',
                'points' => 30,
                'image_url' => 'asset/clean_room.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

