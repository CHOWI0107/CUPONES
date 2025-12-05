<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CuponesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cupones')->insert([
           ['product'=>'1','store'=>3,'monto'=>'549','ticket'=>'1-52443','cupon'=>'20250103443','type_cupon'=>1,'user'=>1,'store_from'=>5,'created_at' => now(),'updated_at' => now()]
        ]);
    }
}
