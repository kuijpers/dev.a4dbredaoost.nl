<?php

	use App\Models\User;
	use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('users')->insert([
//            'name'        	=> 'firstname lastname',
//			'slug' 			=> str_slug('firstname lastname'.time(), '-'),
//			'email'         => 'user@test.nl',
//			'password'      => bcrypt('welkom'),
//			'created_at'	=> date('Y-m-d H:i:s'),
//			'updated_at'    => date('Y-m-d H:i:s'),
//		]);


		$users = [
			[
				'name'        	=> 'firstname1 lastname1',
				'slug' 			=> str_slug('firstname1 lastname1-'.time(), '-'),
				'email'         => 'user1@test.nl',
				'password'      => bcrypt('welkom'),
				'created_at'	=> date('Y-m-d H:i:s'),
				'updated_at'    => date('Y-m-d H:i:s'),
			],
			[
				'name'        	=> 'firstname2 lastname2',
				'slug' 			=> str_slug('firstname2 lastname2-'.time(), '-'),
				'email'         => 'user2@test.nl',
				'password'      => bcrypt('welkom'),
				'created_at'	=> date('Y-m-d H:i:s'),
				'updated_at'    => date('Y-m-d H:i:s'),
			],
			[
				'name'        	=> 'firstname3 lastname3',
				'slug' 			=> str_slug('firstname3 lastname3-'.time(), '-'),
				'email'         => 'user3@test.nl',
				'password'      => bcrypt('welkom'),
				'created_at'	=> date('Y-m-d H:i:s'),
				'updated_at'    => date('Y-m-d H:i:s'),
			],
			[
				'name'        	=> 'firstname4 lastname4',
				'slug' 			=> str_slug('firstname4 lastname4-'.time(), '-'),
				'email'         => 'user4@test.nl',
				'password'      => bcrypt('welkom'),
				'created_at'	=> date('Y-m-d H:i:s'),
				'updated_at'    => date('Y-m-d H:i:s'),
			],


		];
		foreach ($users as $key => $value) {
			User::create($value);
		}

    }
}
