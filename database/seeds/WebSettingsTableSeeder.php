<?php

	use App\Models\Main\WebSettings;
	use Illuminate\Database\Seeder;

class WebSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$web_settings = [
			[
				'name' 				=> 'Maintenance mode',
				'slug' 				=> str_slug('Maintenance mode', '-'),
				'description' 		=> 'Is de website in onderhoud',
				'value_bool' 		=> 0,
			],
			[
				'name' 				=> 'Organisatie naam',
				'slug' 				=> str_slug('Organisatie naam', '-'),
				'description' 		=> 'Naam van de organisatie',
				'value_text' 		=> 'A4D Breda-oost ',
			],
			[
				'name' 				=> 'Oprichting',
				'slug' 				=> str_slug('Oprichting', '-'),
				'description' 		=> 'Oprichting van de organisatie',
				'value_text' 		=> '1980',
			],


		];
		foreach ($web_settings as $key => $value) {
			WebSettings::create($value);
		}
    }
}
