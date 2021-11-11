<?php

use Illuminate\Database\Seeder;

class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->delete();

        DB::table('teams')->insert([
            
            [
                'name' => 'Defesa Espetacular FC',
                'user_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d h:i:s'),
            ],

        ]);
    }
}
