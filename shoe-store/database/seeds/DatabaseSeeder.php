<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(BrandsTableSeeder::class);
        // $this->call(BillsTableSeeder::class);
       //  $this->call(CartsTableSeeder::class);
        // $this->call(ImagesTableSeeder::class);
        // $this->call(PaymentsTableSeeder::class);
        // $this->call(ProductsTableSeeder::class);
         //$this->call(RolesTableSeeder::class);
         $this->call(SizesTableSeeder::class);

    }
}
