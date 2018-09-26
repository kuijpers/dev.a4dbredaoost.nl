<?php

use Illuminate\Database\Seeder;

class BoardmembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('boardmembers')->insert([
            'name'        	=> 'firstname lastname',
            'email'         => 'boardmember@test.nl',
            'password'      => bcrypt('welkom'),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
    }
}
