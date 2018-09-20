<?php

use Illuminate\Database\Seeder;
use App\Brand;
use Faker\Factory as Faker;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<5;$i++){
            //
        
            $faker = Faker::create();
            foreach (range(0,5) as $index) {
                Brand::create([
                    'brand_name' => $faker->name,
                   
                ]);
            }
        }
    }
}
