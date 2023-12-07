<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        // 'name' => Str::random(10),
        // 'email' => Str::random(10), '@gmail.com',
        'name' => 'test',
        'email' => 'test@test.com',
        'password' => Hash::make('password123'),
        ]);
    }
}
