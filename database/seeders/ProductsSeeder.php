<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('products')->insert([
       ['code' => 'SM23ESP201','barcode'=> '2023033712201','name' => '89548','description' => 'PAPELERIA ESCOLAR SURIMAX PLUMAS DE TINTA','type_cupon' => 1,'created_at' => now(),'updated_at' => now()],
       ['code' => 'SM23ESP219','barcode'=> '2023033712219','name' => '95486','description' => 'PAPELERIA ESCOLAR SURIMAX LAPIZ INFINITO FIGURAS C','type_cupon' => 1,'created_at' => now(),'updated_at' => now()],
       ['code' => 'SM24ESL414','barcode'=> '2024033708414','name' => '15486','description' => 'LIBRETAS KAWAII','type_cupon' => 1,'created_at' => now(),'updated_at' => now()]
    ]);
    }

}
