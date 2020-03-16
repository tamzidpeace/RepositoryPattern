<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CustomerSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        
        
        $faker = Faker::create('App\Customer');
        DB::table('customers')->insert([
        	'user_id' => rand(1,5),
        	'name' => $faker->sentence(),
            'contacted_ at' => \Carbon\Carbon::now(),
            'active' => $faker->numberBetween($min = 0, $max = 1),
        	'created_at' => \Carbon\Carbon::now(),
        	'Updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
