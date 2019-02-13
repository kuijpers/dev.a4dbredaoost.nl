<?php

namespace Modules\Board\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Board\Entities\Models\Main\TheBoardInformation;
use Modules\Board\Entities\Models\Main\TheBoardSettings;

class BoardDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

		$the_board_information = [
			[
				'slug' 					=> str_slug('Het huidige bestuur', '-'),
				'title' 				=> 'Het huidige bestuur',
				'description' 			=> 'Uitleg over het huidige bestuur',
				'body' 					=> '<p>
							Een evenement als de avondvierdaagse kan natuurlijk nooit van de grond komen zonder dat er een organisatie achter staat. Deze organisatie heeft natuurlijk ook aansturing nodig. Ook de stichting avondvierdaagse breda oost heeft een bestuur welke voor de aansturing zorgt. Door de jaren heen zijn er wel wat wijzigingen binnen het bestuur geweest maar de laatste 15 jaar is de samenstelling gelijk gebleven. 

Hieronder ziet u wie de huidige bestuursleden zijn.
							</p>',
				'web_order' 			=> 1,
				'draft' 				=> 1,
				'author' 				=> 4,
				'author_group' 			=> 'Boardmember',
				'author_approve' 		=> 1,
				'editor' 				=> 5,
				'editor_group' 			=> 'Boardmember',
				'editor_approve' 		=> 1,
				'publisher' 			=> 4,
				'publisher_group' 		=> 'Boardmember',
				'publisher_approve' 	=> 1,
				'publish_date_start' 	=> '2018-11-03 20:05:47',
				'publish_date_end' 		=> '2018-11-02 00:00:00',
				'deleted_at' 			=> null,
				'created_at' 			=> '2018-11-03 20:05:47',
				'updated_at' 			=> '2018-11-03 20:05:47',
			],

		];
		foreach ($the_board_information as $key => $value)
			{
				TheBoardInformation::create($value);
			}

		$theboardsettings = [
			[
				'slug' => str_slug('Set title', '-'),
				'name' => 'set title',
				'description' => 'Title visible on website yes or no',
				'value_bool' => 1,
				'value_text' => '',
			],

			[
				'slug' => str_slug('Set body', '-'),
				'name' => 'set body',
				'description' => 'Body visible on website yes or no',
				'value_bool' => 1,
				'value_text' => '',
			],
		];
		foreach ($theboardsettings as $key => $value) {
			TheBoardSettings::create($value);
		}


    }
}
