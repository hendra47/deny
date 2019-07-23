<?php

use Illuminate\Database\Seeder;

class DataSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
       	$faker = Faker\Factory::create();
        App\User::truncate();

        App\User::create([
                'nik' => '10102',
                'username' => 'admin',
                'password' => bcrypt('admin'),
                'name'     =>'Administrator',
                'group' => 'admin',
            ]);
    }
    
}
