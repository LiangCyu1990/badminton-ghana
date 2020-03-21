<?php

use App\Venue;
use Illuminate\Database\Seeder;

class VenuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $venue = Venue::create([
            'name'          => 'Downtown Conference Center, New York',
            'address'       => '157 William St, New York, NY 10038',
            'latitude'      => '5.6304311',
            'longitude'     => '-0.0187063',
            'description'   =>  'Iste nobis eum sapiente sunt enim dolores labore accusantium autem. Cumque beatae ipsam. Est quae sit qui voluptatem corporis velit. Qui maxime accusamus possimus. Consequatur sequi et ea suscipit enim nesciunt quia velit.'
        ]);

        foreach(range(1,8) as $id)
        {
            $venue->addMediaFromUrl(storage_path()."/seeders/venue-gallery/$id.jpg")->toMediaCollection('photos');
        }
    }
}
