<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
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
            foreach (range(0, 10) as $index) {
                User::create([
                    'name' =>'Hoàng Thị Ngọc Hà',
                    'phone_number' =>'01642213242',
                    'email' =>'ngocha@gmail.com',
                    'password' =>bcrypt('123'),
                    'address' =>'Lien Chieu- Da Nang',
                    'img_path' => $faker->image
                ]);
            }
        }
    }
    
}
