<?php

namespace Modules\Sponsors\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Sponsors\Entities\Models\Main\SponsorSpotlight;

class SponsorsSpotlightTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

		// Spotlight Seeder

		$sponsor_spotlight = [
			[
				'sponsor_id' 			=> 11,

				'author' 				=> 4,
				'author_group' 			=> 'Boardmember',
				'author_approve' 		=> 1,
				'publisher' 			=> 4,
				'publisher_group' 		=> 'Boardmember',
				'publisher_approve' 	=> 1,

				'publish_date_start'	=> '2019-01-01 00:00:01',
				'publish_date_end' 		=> '2019-12-31 23:59:59',

				'payment_received' 		=> 1,

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],

		];
		foreach ($sponsor_spotlight as $key => $value) {
			SponsorSpotlight::create($value);
		}
    }
}
