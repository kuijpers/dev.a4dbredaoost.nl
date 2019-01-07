<?php

use Illuminate\Database\Seeder;

class VolunteersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('volunteers')->insert([
            'name'        	=> 'firstname lastname',
			'slug' 			=> str_slug('firstname lastname'.time(), '-'),
            'email'         => 'volunteer@test.nl',
            'password'      => bcrypt('welkom'),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
    }
}
