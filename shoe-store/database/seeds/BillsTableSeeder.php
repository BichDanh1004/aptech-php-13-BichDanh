<?php

use Illuminate\Database\Seeder;
use App\Bill;
use Faker\Factory as Faker;

class BillsTableSeeder extends Seeder
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
                Bill::create([
                    'id_status_bill' => $faker->name,
                   
                ]);
            }
        }
    }
    $table->double('total');
            $table->integer('id_payment')->unsigned();
            $table->integer('id_status_bill')->unsigned();
            $table->integer('id_customer')->unsigned();
            $table->integer('id_employee')->unsigned();
            $table->foreign('id_customer')->references('id_user')->on('users');
            $table->foreign('id_employee')->references('id_user')->on('users');
            $table->timestamps();
}
