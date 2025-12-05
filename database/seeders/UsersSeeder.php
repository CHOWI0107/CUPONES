<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
           ['name'=>'LAYLA ZOE GARCIA VARGAS','password'=>Hash::make('12345'),'role'=> 1,'store'=>1,'created_at' => now(),'updated_at' => now()],
           ['name'=>'JAHLEEL JOSAFAT GARCIA SERRANO','password'=>Hash::make('DES4020**'),'role'=> 1,'store'=>1,'created_at' => now(),'updated_at' => now()],
           ['name'=>'LEXI YARALI VARGAS LUNAR','password'=>Hash::make('12345'),'role'=> 2,'store'=>1,'created_at' => now(),'updated_at' => now()],
           ['name'=>'DAN PAOLA GARCIA SERRANO','password'=>Hash::make('12345'),'role'=> 3,'store'=>2,'created_at' => now(),'updated_at' => now()],
           ['name'=>'PAMELA GARCIA SERRANO','password'=>Hash::make('12345'),'role'=> 3,'store'=>3,'created_at' => now(),'updated_at' => now()]
        ]);
    }
}
