<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class HqmNhaCCTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach(range(1,100) as $index){
            DB::table('hqmnhacc')->insert([
                'hqmMaNCC'=>$faker->uuid(),
                // 'MaNCC'=>$faker->word(15),
                'hqmTenNCC'=>$faker->sentence(5),
                'hqmDiachi'=>$faker->address(),
                'hqmDienthoai'=>$faker->phoneNumber(10),
                'hqmemail'=>$faker->email(),
                'hqmstatus'=>$faker->boolean()
            ]);
        }
    }
}
