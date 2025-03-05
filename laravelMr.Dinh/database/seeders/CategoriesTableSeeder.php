<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('categories1')->insert([
        //     [
        //         'name' => 'Sách',
        //         'description' => 'Sách lập trình',
        //         'created_at'=>now(),
        //         'updated_at'=>now(),
        //     ]
        // ]);

        //tao facker cho 1000 dòng data
        $faker = Faker::create();

        for($i=0; $i<100; $i++){
            DB::table('categories1')->insert([
                'name' => $faker->unique()->word,
                'description' => $faker->sentence,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
