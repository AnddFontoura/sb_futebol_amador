<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert([

            [
                'name' => 'Andre Fontoura',
                'email' => 'andd.fontoura@hotmail.com',
                'password' => Hash::make('drake210591'),
                'user_type_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d h:i:s'),
            ],

            
            [
                'name' => 'Cia da Bola',
                'email' => 'contato@ciadabola.com.br',
                'password' => Hash::make('ciadabola'),
                'user_type_id' => 2,
                'created_at' => Carbon::now()->format('Y-m-d h:i:s'),
            ],

        ]);
    }
}
