<?php

namespace Modules\Didyouknow\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

use Modules\Didyouknow\Entities\Models\Board\Didyouknow;
use Modules\Didyouknow\Entities\Models\Main\Didyouknow_information;

class DidyouknowDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

		$didyouknows = [
			// In draft with user group
			[
				'question' => 'Wist u dat 1',
				'answer' => 'Dit is dan het antwoord 1',
				'draft' => 1,
				'author' => 1,
				'author_group' => 'users',
			],
			// Author approved with volunteer group
			[
				'question' => 'Wist u dat 2',
				'answer' => 'Dit is dan het antwoord 2',
				'draft' => 1,
				'author' => 1,
				'author_group' => 'volunteer',
				'author_approve' => 1,
			],
			// Author approved in hands of editor from board
			[
				'question' => 'Wist u dat 3',
				'answer' => 'Dit is dan het antwoord 3',
				'draft' => 1,
				'author' => 1,
				'author_group' => 'board',
				'author_approve' => 1,
				'editor' => 5,
				'editor_group' => 'board',
			],
			// editor approved
			[
				'question' => 'Wist u dat 4',
				'answer' => 'Dit is dan het antwoord 4',
				'draft' => 1,
				'author' => 1,
				'author_group' => 'board',
				'author_approve' => 1,
				'editor' => 5,
				'editor_group' => 'board',
				'editor_approve' => 1,
			],
			// In hands of publisher
			[
				'question' => 'Wist u dat 5',
				'answer' => 'Dit is dan het antwoord 5',
				'draft' => 1,
				'author' => 1,
				'author_group' => 'board',
				'author_approve' => 1,
				'editor' => 5,
				'editor_group' => 'board',
				'editor_approve' => 1,
				'publisher' => 6,
				'publisher_group' => 'board',
			],
			// Fully approved and published now and forever
			[
				'question' => 'Wist u dat 6',
				'answer' => 'Dit is dan het antwoord 6',
				'draft' => 1,
				'author' => 1,
				'author_group' => 'board',
				'author_approve' => 1,
				'editor' => 5,
				'editor_group' => 'board',
				'editor_approve' => 1,
				'publisher' => 6,
				'publisher_group' => 'board',
				'publisher_approve' => 1,
				'publish_date_start' => Carbon::now(),
				'publish_date_end' => Carbon::yesterday(),
			],
			// Fully approved and published in 2 weeks and forever
			[
				'question' => 'Wist u dat 7',
				'answer' => 'Dit is dan het antwoord 7',
				'draft' => 1,
				'author' => 1,
				'author_group' => 'board',
				'author_approve' => 1,
				'editor' => 5,
				'editor_group' => 'board',
				'editor_approve' => 1,
				'publisher' => 6,
				'publisher_group' => 'board',
				'publisher_approve' => 1,
				'publish_date_start' => Carbon::now()->addWeeks(2),
				'publish_date_end' => Carbon::yesterday(),
			],
			// Fully approved and published now and for 14 days
			[
				'question' => 'Wist u dat 8',
				'answer' => 'Dit is dan het antwoord 8',
				'draft' => 1,
				'author' => 1,
				'author_group' => 'board',
				'author_approve' => 1,
				'editor' => 5,
				'editor_group' => 'board',
				'editor_approve' => 1,
				'publisher' => 6,
				'publisher_group' => 'board',
				'publisher_approve' => 1,
				'publish_date_start' => Carbon::now(),
				'publish_date_end' => Carbon::now()->addDays(14),
			],
			// Fully approved and published 3 weeks ago and ended 1 week ago
			[
				'question' => 'Wist u dat 9',
				'answer' => 'Dit is dan het antwoord 9',
				'draft' => 1,
				'author' => 1,
				'author_group' => 'board',
				'author_approve' => 1,
				'editor' => 5,
				'editor_group' => 'board',
				'editor_approve' => 1,
				'publisher' => 6,
				'publisher_group' => 'board',
				'publisher_approve' => 1,
				'publish_date_start' => Carbon::now()->subWeeks(3),
				'publish_date_end' => Carbon::now()->subWeeks(1),
			],
			// Fully approved and published now and for 2 days but archived (deleted)
			[
				'question' => 'Wist u dat 9',
				'answer' => 'Dit is dan het antwoord 9',
				'draft' => 1,
				'author' => 1,
				'author_group' => 'board',
				'author_approve' => 1,
				'editor' => 5,
				'editor_group' => 'board',
				'editor_approve' => 1,
				'publisher' => 6,
				'publisher_group' => 'board',
				'publisher_approve' => 1,
				'publish_date_start' => Carbon::now(),
				'publish_date_end' => Carbon::now()->addDays(14),
				'archived' => 1,
			],

		];
		foreach ($didyouknows as $key => $value) {
			Didyouknow::create($value);
		}

		$didyouknows_information = [

			// In hands of publisher
			[
				'title' => 'En dit dan?',
				'body' => 'Er komen na iedere avondvierdaagse weer wist u datjes bij.',
				'draft' => 1,
				'author' => 1,
				'author_group' => 'board',
				'author_approve' => 1,
				'editor' => 5,
				'editor_group' => 'board',
				'editor_approve' => 1,
				'publisher' => 6,
				'publisher_group' => 'board',
			],
			// Fully approved and published now and forever
			[
				'title' => 'Wist u dit al?',
				'body' => 'Met het organiseren van een evenement als de avondvierdaagse zijn er veel dingen waar mensen niet bij stil staan. 
Op deze pagina willen we jullie bekend maken met leuke, grappige, rare maar misschien ook minder leuke weetjes. 
Mocht je nog bekend zijn met een wist u datje dan horen wij dit graag. Hieronder vindt u een aantal van deze stellingen.',
				'draft' => 1,
				'author' => 1,
				'author_group' => 'board',
				'author_approve' => 1,
				'editor' => 5,
				'editor_group' => 'board',
				'editor_approve' => 1,
				'publisher' => 6,
				'publisher_group' => 'board',
				'publisher_approve' => 1,
				'publish_date_start' => Carbon::now(),
				'publish_date_end' => Carbon::yesterday(),
			],

		];
		foreach ($didyouknows_information as $key => $value) {
			Didyouknow_information::create($value);
		}
    }
}
