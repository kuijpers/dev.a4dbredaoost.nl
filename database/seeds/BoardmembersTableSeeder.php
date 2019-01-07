<?php

use Illuminate\Database\Seeder;

use App\Models\Boardmember ;

class BoardmembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$boardmember = [
			[
				'name' => 'President Organisation',
				'slug' => str_slug('President Organisation'.time(), '-'),
				'email' => 'president@a4dbredaoost.ddns.net',
				'password' => bcrypt('welkom'),
				'boardmember_title' => 'president',
			],
			[
				'name' => 'Vice-President Organisation',
				'slug' => str_slug('Vice-President Organisation'.time(), '-'),
				'email' => 'vice-president@a4dbredaoost.ddns.net',
				'password' => bcrypt('welkom'),
				'boardmember_title' => 'vice-president',
			],
			[
				'name' => 'Secretary Organisation',
				'slug' => str_slug('Secretary Organisation'.time(), '-'),
				'email' => 'secretary@a4dbredaoost.ddns.net',
				'password' => bcrypt('welkom'),
				'boardmember_title' => 'secretary',
			],
			[
				'name' => 'Treasurer Organisation',
				'slug' => str_slug('Treasurer Organisation'.time(), '-'),
				'email' => 'treasurer@a4dbredaoost.ddns.net',
				'secondary_email' => '',
				'password' => bcrypt('welkom'),
				'address' => 'Zomaar een adres 1234',
				'postcode' => '4817 XX',
				'city' => 'Breda',
				'phone' => '06-12345678',
				'boardmember_title' => 'treasurer',
			],
			[
				'name' => 'Member1 Organisation',
				'slug' => str_slug('Member1 Organisation'.time(), '-'),
				'email' => 'member1@a4dbredaoost.ddns.net',
				'secondary_email' => '',
				'password' => bcrypt('welkom'),
				'address' => 'Weilustlaan 134',
				'postcode' => '4817 ZZ',
				'city' => 'Breda',
				'country' => 'NEderland',
				'boardmember_title' => 'member',
				'dob' => '1978-10-31',
			],
			[
				'name' => 'Dennis Kuijpers',
				'slug' => str_slug('Dennis Kuijpers'.time(), '-'),
				'email' => 'member2@a4dbredaoost.ddns.net',
				'secondary_email' => 'dennis@test.nl',
				'password' => bcrypt('welkom'),
				'address' => 'Heusdenhoutesestraat 222',
				'postcode' => '4817 WG',
				'city' => 'Breda',
				'country' => 'Nederland',
				'phone' => '06-81537576',
				'boardmember_title' => 'member',
				'dob' => '1976-02-10',
			],
		];
		foreach ($boardmember as $key => $value) {
			Boardmember::create($value);
		}

    }
}
