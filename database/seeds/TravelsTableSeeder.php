<?php

use Illuminate\Database\Seeder;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $travels = [
            [
                'start_hour'=> '9h',
                'start_city'=> 'Paris',
                'start_address'=> 'Opéra Garnier',
                'finish_hour'=> '13h',
                'finish_city'=> 'Nantes',
                'finish_address'=> 'Gare SNCF',
                'price'=> '25 euros',
                'available_seats'=> '4',
                'preferences'=> 'Non fumeur',
                'driver'=> 'cam',
                'id_driver'=> '1'
            ],
            [
                'start_hour'=> '19h',
                'start_city'=> 'Québec',
                'start_address'=> 'Hotel de ville',
                'finish_hour'=> '21h',
                'finish_city'=> 'Chicoutimi',
                'finish_address'=> 'Gare',
                'price'=> '20 euros',
                'available_seats'=> '3',
                'preferences'=> 'Non fumeur',
                'driver'=> 'ilias',
                'id_driver'=> '2'
            ],
            [
                'start_hour'=> '10h',
                'start_city'=> 'Toronto',
                'start_address'=> 'Rogers Center',
                'finish_hour'=> '16h',
                'finish_city'=> 'Montréal',
                'finish_address'=> 'Parc Olympique',
                'price'=> '30 euros',
                'available_seats'=> '2',
                'preferences'=> 'Non fumeur',
                'driver'=> 'cam',
                'id_driver'=> '1'
            ]
        ];

        DB::table('travels')->insert($travels);
    }
}
