<?php

use Illuminate\Database\Seeder;
use App\Size;
use Faker\Factory as Faker;

class SizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        for($i=1;$i<=10;$i++)
    	{
	        DB::table('sizes')->insert(
	        	[
                    'size   ' =>'36' ,
                    
	        	]
	    	);
    	}
    }
  
}
