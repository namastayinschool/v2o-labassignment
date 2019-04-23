<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class VosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /*$req_skills = ['animal care', 'senior citizen care', 'child care', 'sports', 'beach cleanup', 'teaching'];
        $vo_desc = ['Animal shelter', 'Senior citizen home', 'Day care center', 'Sports', 'Beach cleanup activities', 'Teaching'];
        */
        $req_skills = array(
            "animal care" => "Animal shelter",
            "senior citizen care" => "Senior citizen home",
            "child care" => "Day care center",
            "sports" => "Sports",
            "beach cleanup" => "Beach cleanup",
            "teaching" => "Teaching"
        );
        
        $random = array_keys($req_skills);
        
        
        $vo_loc = ['Oistins, Christ Church', 'Greenland, Saint Andrew', 'Bulkeley, Saint George', 'Holetown, Saint James', 'Four Roads, Saint John', 'Bathsheba, Saint Joseph', 'Crab Hill, Saint Lucy', 'Bridgetown, Saint Michael', 'Speightstown, Saint Peter', 'Crane, Saint Phillip', 'Hillaby, Saint Thomas'];
        $vo_hours = ['8:00 am - 4:00 pm', '9:00 am - 5:00 pm'];
        $vo_stipend = ['$300', '$350', '$400', '$450', '$500']; 
        
        $faker = Faker::create();
        
        //insert 20 dummy records into the vos table
        foreach (range(1,20) as $index)
        {
            $skills = $random[rand(0,sizeof($req_skills)-1)];
            $desc = $req_skills[$skills];
            
            DB::table('vos')->insert([
               'name' => $faker->company,
                'email' => $faker->email,
                'password' => $faker->randomNumber($nbDigits = 5),
                'confirm_password' => DB::raw("`password`"),
                'phone_number' => $faker->tollFreePhoneNumber,
                'vo_description' => $desc,
                'required_skills' => $skills,
                'work_location' => array_random($vo_loc),
                'work_hours' => array_random($vo_hours), 
                'time_period' => '2 Months',
                'stipend' => array_random($vo_stipend)
            ]);
        }
    }
}
