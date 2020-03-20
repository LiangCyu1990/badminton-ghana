<?php

use App\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    public function run()
    {
        $settings = [
            [
                'key'   => 'title',
                'value' => 'GHANA<br><span>BADMINTON</span>TODAY'
            ],
            [
                'key'   => 'subtitle',
                'value' => 'DISCOVER BADMINTON'
            ],
            [
                'key'   => 'youtube_link',
                'value' => 'https://www.youtube.com/watch?v=VoM3v6YZySo&feature=youtube_gdata'
            ],
            [
                'key'   => 'about_description',
                'value' => 'In partnership with our partners and stakeholders we work to provide traditional and innovative opportunities for all to be involved.'
            ],
            [
                'key'   => 'about_where',
                'value' => 'The unique qualities of badminton make it accessible and enjoyable for anyone and everyone.'
            ],
            [
                'key'   => 'about_when',
                'value' => 'Anytime can contact for badminton.'
            ],
            [
                'key'   => 'contact_address',
                'value' => 'Suite 39, Accra Sports Stadium, P.O. Box 1272, Accra-Ghana'
            ],
            [
                'key'   => 'contact_phone',
                'value' => '+233 (0) 302 277806379'
            ],
            [
                'key'   => 'contact_email',
                'value' => 'bag@ghanabadminton.org'
            ],
            [
                'key'   => 'footer_description',
                'value' => 'We are Badminton Ghana, the Governing Body of Badminton in Ghana formed in 1974 and affiliated to the Badminton Confederation of Africa and Badminton World Federation and headquartered at the Accra Sports Stadium, Suite Number 39, Accra.
                The unique qualities of badminton make it accessible and enjoyable for anyone and everyone. And we work collaboratively with our partners and stakeholders to provide traditional and innovative opportunities for all to be involved.'
            ],
            [
                'key'   => 'footer_address',
                'value' => 'Suite 39, Accra Sports Stadium, P.O. Box 1272, Accra-Ghana'
            ],
            [
                'key'   => 'footer_twitter',
                'value' => 'https://twitter.com/badmintonghana'
            ],
            [
                'key'   => 'footer_facebook',
                'value' => 'https://www.facebook.com/badmintonghana'
            ],
            [
                'key'   => 'footer_instagram',
                'value' => '#'
            ],
            [
                'key'   => 'footer_googleplus',
                'value' => '#'
            ],
            [
                'key'   => 'footer_linkedin',
                'value' => '#'
            ],
        ];

        foreach($settings as $setting)
        {
            Setting::create($setting);
        }
    }
}
