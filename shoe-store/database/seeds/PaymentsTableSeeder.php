<?php

use Illuminate\Database\Seeder;
use App\Payment;
use Faker\Factory as Faker;

class PaymentsTableSeeder extends Seeder
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
                Payment::create([
                    'payment_name' => $faker->name,
                   
                ]);
            }
        }
    }
   
}
