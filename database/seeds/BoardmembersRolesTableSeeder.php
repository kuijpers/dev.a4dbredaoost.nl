<?php

use Illuminate\Database\Seeder;
	use Illuminate\Support\Facades\DB;

	class BoardmembersRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $boardmember_role =[
        						[
        							'boardmembers_id' 	=> 1,
        							'role_id' 			=> 2,
								],
        						[
        							'boardmembers_id' 	=> 1,
        							'role_id' 			=> 6,
								],
        						[
        							'boardmembers_id' 	=> 2,
        							'role_id' 			=> 7,
								],
        						[
        							'boardmembers_id' 	=> 3,
        							'role_id' 			=> 8,
								],
        						[
        							'boardmembers_id' 	=> 4,
        							'role_id' 			=> 9,
								],
        						[
        							'boardmembers_id' 	=> 5,
        							'role_id' 			=> 2,
								],
        						[
        							'boardmembers_id' 	=> 5,
        							'role_id' 			=> 10,
								],
        						[
        							'boardmembers_id' 	=> 6,
        							'role_id' 			=> 10,
								],
        						[
        							'boardmembers_id' 	=> 7,
        							'role_id' 			=> 1,
								],
        						[
        							'boardmembers_id' 	=> 7,
        							'role_id' 			=> 10,
								],
        						[
        							'boardmembers_id' 	=> 8,
        							'role_id' 			=> 10,
								],

		];

		foreach ($boardmember_role as $key => $value) {
			DB::table('boardmembers_roles')->insert([$value]);
		}



    }
}
