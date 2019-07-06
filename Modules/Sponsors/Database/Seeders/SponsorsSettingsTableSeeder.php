<?php

namespace Modules\Sponsors\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Sponsors\Entities\Models\Main\SponsorSettings;

class SponsorsSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

		// Settings Seeder

		$sponsor_settings = [
			[
				'slug' 			=> str_slug('Set title', '-'),
				'name' 			=> 'set title',
				'description' 	=> 'Title visible on website yes or no',
				'value_bool' 	=> 1,
				'value_text' 	=> '',

				'created_at' 	=> Carbon::now(),
				'updated_at' 	=> Carbon::now(),
			],

			[
				'slug' 			=> str_slug('Set body', '-'),
				'name' 			=> 'set body',
				'description' 	=> 'Body visible on website yes or no',
				'value_bool' 	=> 1,
				'value_text' 	=> '',

				'created_at' 	=> Carbon::now(),
				'updated_at' 	=> Carbon::now(),
			],

			[
				'slug' 			=> str_slug('Set theme', '-'),
				'name' 			=> 'set theme',
				'description' 	=> 'Set the theme for the layout',
				'value_bool' 	=> 1,
				'value_text' 	=> '',

				'created_at' 	=> Carbon::now(),
				'updated_at' 	=> Carbon::now(),
			],

			[
				'slug' 			=> str_slug('number of columns', '-'),
				'name' 			=> 'number of columns',
				'description' 	=> 'Set the number of columns',
				'value_bool' 	=> 3,
				'value_text' 	=> '',

				'created_at' 	=> Carbon::now(),
				'updated_at' 	=> Carbon::now(),
			],
		];
		foreach ($sponsor_settings as $key => $value) {
			SponsorSettings::create($value);
		}

	}
}
