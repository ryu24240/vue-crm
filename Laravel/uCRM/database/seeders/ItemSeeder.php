<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'name' => 'CUT',
                'memo' => 'カットの詳細',
                'price' => 6000,
            ],
            [
                'name' => 'COLOR',
                'memo' => 'カラーの詳細',
                'price' => 8000,
            ],
            [
                'name' => 'PARM(+CUT)',
                'memo' => 'パーマの詳細',
                'price' => 13000,
            ]
            ]);
    }
}
