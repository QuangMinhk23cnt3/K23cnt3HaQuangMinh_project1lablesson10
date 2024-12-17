<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class HqmVattuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // DB::table('hqmvattu')->insert([
            // 'hqmMaVTu'=>'DD01',
            // 'hqmTenVtu'=>'Dau DVD 1 cua',
            // 'hqmDvTinh'=>'Bo',
            // 'hqmPhanTram'=>40,
        // ]);
        // DB::table('hqmvattu')->insert([
            // 'hqmMaVTu'=>'DD02',
            // 'hqmTenVtu'=>'Dau DVD 2 cua',
            // 'hqmDvTinh'=>'Bo',
            // 'hqmPhanTram'=>50,
        // ]);

        //
        $faker = Faker::create();
        foreach(range(1,100) as $index){
            DB::table('hqmvattu')->insert([
                'hqmMaVtu'=>$faker->word(4),
                // 'MaNCC'=>$faker->word(15),
                'hqmTenVTu'=>$faker->sentence(5),
                'hqmDvTinh'=>$faker->word(3),
                'hqmPhanTram'=>$faker->randomFloat('2',0,100)
            ]);
        }
    }
}
