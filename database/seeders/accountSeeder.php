<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class accountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('accounts')->insert([
            'id_users1' => '1',
            'number_account' => '99',
        ]);
        DB::table('accounts')->insert([
            'id_users1' => '2',
            'number_account' => '88',
        ]);
        DB::table('accounts')->insert([
            'id_users1' => '3',
            'number_account' => '77',
        ]);
        DB::table('accounts')->insert([
            'id_users1' => '4',
            'number_account' => '66',
        ]);
    }
}
