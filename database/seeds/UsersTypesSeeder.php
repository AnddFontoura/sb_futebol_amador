<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_types')->delete();

        DB::table('user_types')->insert([
            [ 
                'id' => 1, 
                'name' => 'Jogador',
                'created_at' => Carbon::now()->format('Y-m-d h:i:s'),
            ],

            [ 
                'id' => 2, 
                'name' => 'Quadra',
                'created_at' => Carbon::now()->format('Y-m-d h:i:s'),
            ],
        ]);
    }
}
