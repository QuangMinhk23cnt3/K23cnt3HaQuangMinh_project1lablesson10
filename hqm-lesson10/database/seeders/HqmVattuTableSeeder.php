<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HqmVattuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('hqmvattu')->insert([
            'hqmMaVTu'=>'DD01',
            'hqmTenVtu'=>'Dau DVD 1 cua',
            'hqmDvTinh'=>'Bo',
            'hqmPhanTram'=>40,
        ]);
        DB::table('hqmvattu')->insert([
            'hqmMaVTu'=>'DD02',
            'hqmTenVtu'=>'Dau DVD 2 cua',
            'hqmDvTinh'=>'Bo',
            'hqmPhanTram'=>50,
        ]);
    }
}
