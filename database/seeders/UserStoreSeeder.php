<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserStoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_stores')->insert([
           ['_user'=>1,'_store'=>1],
           ['_user'=>1,'_store'=>2],
           ['_user'=>1,'_store'=>3],
           ['_user'=>2,'_store'=>1],
           ['_user'=>2,'_store'=>2],
           ['_user'=>2,'_store'=>3]
        ]);
    }
}
