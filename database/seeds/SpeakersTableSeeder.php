<?php

use App\Speaker;
use Illuminate\Database\Seeder;

class SpeakersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $speakers = [
            [
                'name'              => 'Brenden Legros',
                'description'       => 'Quas alias incidunt',
                'twitter'           => '#',
                'facebook'          => '#',
                'linkedin'          => '#',
                'full_description'  => $faker->paragraph
            ],
            [
                'name'              => 'Hubert Hirthe',
                'description'       => 'Consequuntur odio aut',
                'twitter'           => '#',
                'facebook'          => '#',
                'linkedin'          => '#',
                'full_description'  => $faker->paragraph
            ],
            [
                'name'              => 'Cole Emmerich',
                'description'       => 'Fugiat laborum et',
                'twitter'           => '#',
                'facebook'          => '#',
                'linkedin'          => '#',
                'full_description'  => $faker->paragraph
            ]
        ];
        foreach($speakers as $key => $speaker)
        {
            $photo_id = $key+1;
            $speaker = Speaker::create($speaker);
            $speaker->addMediaFromUrl(storage_path()."/seeders/speakers/$photo_id.jpg")->toMediaCollection('photo');
        }
    }
}
