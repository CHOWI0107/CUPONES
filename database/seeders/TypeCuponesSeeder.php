<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeCuponesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('type_cupons')->insert([
            ['type'=>'500 a 1000','min'=>'500','max'=>'1000'],
            ['type'=>'1001 a 2000','min'=>'1001','max'=>'2000'],
            ['type'=>'2001 a 3000','min'=>'2001','max'=>'3000']

        ]);
    }
}
