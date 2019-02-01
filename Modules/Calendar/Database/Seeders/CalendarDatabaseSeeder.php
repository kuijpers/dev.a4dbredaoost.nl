<?php

namespace Modules\Calendar\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Modules\Calendar\Entities\Models\Main\Calendar;
use Modules\Calendar\Entities\Models\Main\CalendarGroup;

class CalendarDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");

		$calendar = [
			[
				'title' 			=> 'Avondvierdaagse 2019',
				'slug' 				=> str_slug('2019/07/18/avondvierdaagse 2019 ', '-'),
				'description' 		=> 'De eerste dag van de avondvierdaagse 2019.',
				'content' 			=> 'De eerste dag van de avondvierdaagse 2019.
										Veel succes gewenst aan de deelnemers.',

				'all_day' 			=> 0,
				'start' 			=> '2019-07-18 19:00:00',
				'end' 				=> '2019-07-18 21:00:00',

				'color' 			=> '',

				'author' 			=> '1',
				'author_group' 		=> 'board',
				'author_approve' 	=> '1',

				'publisher' 		=> '1',
				'publisher_group' 	=> 'board',
				'publisher_approve'	=> '1',
			],
			[
				'title' 			=> 'Avondvierdaagse 2019',
				'slug' 				=> str_slug('2019/07/19/avondvierdaagse 2019 ', '-'),
				'description' 		=> 'De tweede dag van de avondvierdaagse 2019.',
				'content' 			=> 'De tweede dag van de avondvierdaagse 2019.
											Veel succes gewenst aan de deelnemers.',

				'all_day' 			=> 0,
				'start' 			=> '2019-07-19 19:00:00',
				'end' 				=> '2019-07-19 21:00:00',

				'color' 			=> '',

				'author' 			=> '1',
				'author_group' 		=> 'board',
				'author_approve' 	=> '1',

				'publisher' 		=> '1',
				'publisher_group' 	=> 'board',
				'publisher_approve'	=> '1',
			],
			[
				'title' 			=> 'Avondvierdaagse 2019',
				'slug' 				=> str_slug('2019/07/20/avondvierdaagse 2019 ', '-'),
				'description' 		=> 'De derde dag van de avondvierdaagse 2019.',
				'content' 			=> 'De derde dag van de avondvierdaagse 2019.
											Veel succes gewenst aan de deelnemers.',

				'all_day' 			=> 0,
				'start' 			=> '2019-07-20 19:00:00',
				'end' 				=> '2019-07-20 21:00:00',

				'color' 			=> '',

				'author' 			=> '1',
				'author_group' 		=> 'board',
				'author_approve' 	=> '1',

				'publisher' 		=> '1',
				'publisher_group' 	=> 'board',
				'publisher_approve'	=> '1',
			],
			[
				'title' 			=> 'Avondvierdaagse 2019',
				'slug' 				=> str_slug('2019/07/21/avondvierdaagse 2019 ', '-'),
				'description' 		=> 'De laatste dag van de avondvierdaagse 2019.',
				'content' 			=> 'De laatste dag van de avondvierdaagse 2019.
											Veel succes gewenst aan de deelnemers.',

				'all_day' 			=> 0,
				'start' 			=> '2019-07-21 19:00:00',
				'end' 				=> '2019-07-21 21:00:00',

				'color' 			=> '',

				'author' 			=> '1',
				'author_group' 		=> 'board',
				'author_approve' 	=> '1',

				'publisher' 		=> '1',
				'publisher_group' 	=> 'board',
				'publisher_approve'	=> '1',
			],

		];
		foreach ($calendar as $key => $value) {
			Calendar::create($value);
		}



		$calendar_group = [
			[
				'name' 				=> 'public',
				'slug' 					=> str_slug('public', '-'),
			],
			[
				'name' 				=> 'user',
				'slug' 					=> str_slug('user', '-'),
			],
			[
				'name' 				=> 'volunteer',
				'slug' 					=> str_slug('volunteer', '-'),
			],
			[
				'name' 				=> 'board',
				'slug' 					=> str_slug('board', '-'),
			],


		];
		foreach ($calendar_group as $key => $value) {
			CalendarGroup::create($value);
		}



    }
}
