<?php

use Illuminate\Database\Seeder;

use App\Models\BoardmembersDashboardSettings;

class BoardmembersDashboardSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$settings = [
			[
				'boardmembers_id' => 1,
				'boardmembers_theme' => 'light',
				'boardmembers_language' => 'nl',
			],
			[
				'boardmembers_id' => 2,
				'boardmembers_theme' => 'dark',
				'boardmembers_language' => 'en',
			],
			[
				'boardmembers_id' => 3,
				'boardmembers_theme' => 'light',
				'boardmembers_language' => 'nl',
			],
			[
				'boardmembers_id' => 4,
				'boardmembers_theme' => 'light',
				'boardmembers_language' => 'nl',
			],
			[
				'boardmembers_id' => 5,
				'boardmembers_theme' => 'lilac',
				'boardmembers_language' => 'nl',
			],
			[
				'boardmembers_id' => 6,
				'boardmembers_theme' => 'light',
				'boardmembers_language' => 'nl',
			],
			[
				'boardmembers_id' => 7,
				'boardmembers_theme' => 'light',
				'boardmembers_language' => 'nl',
			],
			[
				'boardmembers_id' => 8,
				'boardmembers_theme' => 'light',
				'boardmembers_language' => 'nl',
			],

		];
		foreach ($settings as $key => $value) {
			BoardmembersDashboardSettings::create($value);
		}
    }
}
