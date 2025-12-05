<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeStoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('type_stores')->insert([
            ['name'=>'PARTICIPA','description'=>'SUCURSAL QUE ENTREGA CUPONES'],
            ['name'=>'NO PARTICIPA','description'=>'SUCURSAL QUE NO ENTREGA CUPONES'],
            ['name'=>'CANJEA','description'=>'SUCURSAL QUE CAJEA CUPONES']
        ]);
    }
}
