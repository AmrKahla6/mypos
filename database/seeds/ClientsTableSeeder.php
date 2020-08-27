<?php

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
        $clients = ['amr', 'mostafa'];

        foreach ($clients as $client) {

            \App\Client::create([
               'name' => $client,
               'phone' => '01154400681',
               'address' => 'mansoura',
            ]);

        }//end of foreach
    }// end of run
}
