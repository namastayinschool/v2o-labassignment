<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class VolunteersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        
        enum $available_interests = ['Animal Care', 'Senior Citizens Care', 'Child Care', 'Sports', 'Beach Cleanup', 'Teaching'];
         
        
        $faker = Faker::create();
        
        //insert 40 dummy records into the volunteers table
        foreach (range(1,40) as $index)
        {
            
            
            DB::table('volunteers')->insert([
               'firstName' => $faker->firstName,
                'lastName' => $faker->lastName,
                'homeAddress'=> $faker->address,
                'cellNumber' => $faker->phoneNumber,
                'homeNumber' => $faker->phoneNumber,
                'idNumber' => mt_rand(1000000000,1999999999),
                'examNumber' => mt_rand(10000000,19999999), 
                'emailAddress' => $faker->email,
                'password' => bcrypt('123456'),
                'interest1' => array_random($available_interests),
                'interest2' => array_random($available_interests),
                'interest3' => array_random($available_interests),
                'interest4' => array_random($available_interests),
                'interest5' => array_random($available_interests),
                
                
            ]);
        }
    }
}
