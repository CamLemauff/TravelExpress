<?php

use App\Client;
use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clients = [
            [
                'name'=> "Lemauff",
                'firstname'=> 'Cam',
                'username'=> 'camlem',
                'email'=> 'camille@lemauff.com',
                'password'=> bcrypt('camille'),
            ],
            [
                'name'=> 'Haouch',
                'firstname'=> 'Ilias',
                'username'=> 'ilias',
                'email'=> 'ilias@haouch.com',
                'password'=> bcrypt('ilias'),
            ]
        ];

        DB::table('clients')->insert($clients);
    }
}
