<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//         $this->call(UsersTableSeeder::class);
//         $this->call(VolunteersTableSeeder::class);
         $this->call(BoardmembersTableSeeder::class);
         $this->call(BoardmembersDashboardSettingsTableSeeder::class);
		 $this->call(RolesTableSeeder::class);
		 $this->call(BoardmembersRolesTableSeeder::class);
    }
}
