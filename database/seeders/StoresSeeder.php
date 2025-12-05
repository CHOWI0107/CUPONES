<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stores')->insert([
           ['name'=>'CEDIS','alias'=>'CED','dominio'=>'192.168.10.53:1619','store_type'=> 2],
           ['name'=>'SAN PABLO 1','alias'=>'SP1','dominio'=>'192.168.100.250:1619','store_type'=> 1],
           ['name'=>'SAN PABLO 2','alias'=>'SP2','dominio'=>'192.168.60.253:1619','store_type'=> 1],
           ['name'=>'SAN PABLO C','alias'=>'SPC','dominio'=>'192.168.60.249:1619','store_type'=> 2],
           ['name'=>'SOTANO','alias'=>'SOT','dominio'=>'192.168.150.253:1619','store_type'=> 3]
        ]);
    }
}
