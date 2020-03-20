<?php

use App\School;
use Illuminate\Database\Seeder;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $school = School::create([
            'group'        => 'PLAYER',
            'number'       => '157',
            'payment'      => '40.7101282',
            'audience'      => '13 ~ 16',
            'duration'      =>'2 hours',
            'description'   =>  'Practically based course which aims to introduce fun games and basic fundamental skills for badminton covering health and safety to allow maximum participation to suit the needs of the group'
        ]);


    }
}
