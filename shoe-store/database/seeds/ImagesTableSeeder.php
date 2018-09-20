<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory as Faker;

class ImagesTableSeeder extends Seeder
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
    $table->integer('id_product')->unsigned();
    $table->string('img_path')->unique();
    $table->foreign('id_product')->references('id_product')->on('products');
    $table->timestamps();
}
