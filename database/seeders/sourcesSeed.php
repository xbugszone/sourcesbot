<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class sourcesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sources')->insert([
            'abbr' => 'ChCo / CC',
            'vendor' => 'Chemical Collective',
            'country_id' => 1,
            'url' => 'http://chemical-collective.com',
            'notes' => 'Does not ship to the US.',
            'rating' => 5,
        ]);

        DB::table('sources')->insert([
            'abbr' => 'RaC / RC',
            'vendor' => 'RareChems',
            'country_id' => 1,
            'url' => 'http://rarechems.com',
            'notes' => '',
            'rating' => 4,
        ]);

        DB::table('sources')->insert([
            'abbr' => 'TRRC',
            'vendor' => 'TheRealRC',
            'country_id' => 2,
            'url' => 'http://therealrc.com',
            'notes' => 'Does not ship to the US.',
            'rating' => 5,
        ]);

        DB::table('sources')->insert([
            'abbr' => 'CG',
            'vendor' => 'Chemagora',
            'country_id' => 3,
            'url' => 'http://chemagora.ca',
            'notes' => '',
            'rating' => 4,
        ]);

        DB::table('sources')->insert([
            'abbr' => 'ALB',
            'vendor' => 'Albion',
            'country_id' => 4,
            'url' => 'http://albionalkimiya.store',
            'notes' => 'Private.',
            'rating' => 3,
        ]);

        DB::table('sources')->insert([
            'abbr' => 'CEU',
            'vendor' => 'Chems EU',
            'country_id' => 1,
            'url' => 'http://chems.eu',
            'notes' => '',
            'rating' => 3,
        ]);

        DB::table('sources')->insert([
            'abbr' => 'ChP',
            'vendor' => 'Chemical Planet',
            'country_id' => 1,
            'url' => 'http://chemicalplanet.net',
            'notes' => 'Does not ship to US.',
            'rating' => 5,
        ]);

        DB::table('sources')->insert([
            'abbr' => 'CL',
            'vendor' => 'Chemlogix',
            'country_id' => 3,
            'url' => 'http://chemlogix.ca',
            'notes' => 'Must verify ID and research.',
            'rating' => 3,
        ]);

        DB::table('sources')->insert([
            'abbr' => 'CoCh',
            'vendor' => 'CoolChems',
            'country_id' => 2,
            'url' => 'http://coolchems.com',
            'notes' => '',
            'rating' => 3,
        ]);

        DB::table('sources')->insert([
            'abbr' => 'GCC',
            'vendor' => 'Gulf Coast Chems',
            'country_id' => 4,
            'url' => 'http://gulfcoastchems.com',
            'notes' => '',
            'rating' => 3,
        ]);

        DB::table('sources')->insert([
            'abbr' => 'HC',
            'vendor' => 'Homechemistry',
            'country_id' => 1,
            'url' => 'http://homechemistry.nl',
            'notes' => 'Does not ship to US.',
            'rating' => 3,
        ]);
        DB::table('sources')->insert([
            'abbr' => 'OC',
            'vendor' => 'Orange Chems',
            'country_id' => 1,
            'url' => 'http://orangechems.com',
            'notes' => 'Does not ship to US.',
            'rating' => 3,
        ]);
        DB::table('sources')->insert([
            'abbr' => 'PL',
            'vendor' => 'Paracelsus',
            'country_id' => 4,
            'url' => 'http://paracelsuslabs.net',
            'notes' => '',
            'rating' => 2,
        ]);
        DB::table('sources')->insert([
            'abbr' => 'ReC',
            'vendor' => 'reChem',
            'country_id' => 3,
            'url' => 'http://rechem.ca',
            'notes' => 'Must verify ID and research.',
            'rating' => 3,
        ]);
        DB::table('sources')->insert([
            'abbr' => 'SmCS / SCS',
            'vendor' => 'Smokeys Chem Site',
            'country_id' => 1,
            'url' => 'http://smokeyschemsite.com',
            'notes' => '',
            'rating' => 3,
        ]);
        DB::table('sources')->insert([
            'abbr' => 'SYN',
            'vendor' => 'Syntharise',
            'country_id' => 3,
            'url' => 'http://syntharise.com',
            'notes' => 'Must verify ID and research.',
            'rating' => 3,
        ]);
        DB::table('sources')->insert([
            'abbr' => 'TIS',
            'vendor' => 'The Indole Shop',
            'country_id' => 3,
            'url' => 'http://theindoleshop.com',
            'notes' => 'Does not ship to US.',
            'rating' => 3,
        ]);
        DB::table('sources')->insert([
            'abbr' => 'FC',
            'vendor' => 'Funcaps',
            'country_id' => 1,
            'url' => 'https://funcaps.nl/',
            'notes' => '',
            'rating' => 3,
        ]);
        DB::table('sources')->insert([
            'abbr' => 'RCB',
            'vendor' => 'RCB Online',
            'country_id' => 5,
            'url' => 'https://rcbonline.biz/',
            'notes' => '',
            'rating' => 3,
        ]);
        DB::table('sources')->insert([
            'abbr' => 'ChCl',
            'vendor' => 'ChemCloud',
            'country_id' => 1,
            'url' => 'https://www.chemcloud.nl',
            'notes' => 'Requires a signup',
            'rating' => 3,
        ]);
    }
}
