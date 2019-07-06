<?php

namespace Modules\Sponsors\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Sponsors\Entities\Models\Main\SponsorLink;

class SponsorsLinkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

		// Link Seeder


		$sponsor_link = [
			[
				'slug'					=> str_slug('http://brabantplein.cigo.nl/winkel-b/contact', '-'),
				'sponsor_id' 			=> 1,
				'link' 					=> 'http://brabantplein.cigo.nl/winkel-b/contact',

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],
			[
				'slug'					=> str_slug('https://www.weilust.nl/', '-'),
				'sponsor_id' 			=> 3,
				'link' 					=> 'https://www.weilust.nl/',

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],
			[
				'slug'					=> str_slug('http://heusdenhoutwinkelcentrum.nl/', '-'),
				'sponsor_id' 			=> 4,
				'link' 					=> 'http://heusdenhoutwinkelcentrum.nl/',

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],
			[
				'slug'					=> str_slug('https://meeus.com/', '-'),
				'sponsor_id' 			=> 5,
				'link' 					=> 'https://meeus.com/',

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],
			[
				'slug'					=> str_slug('https://www.eurobloemen.nl/', '-'),
				'sponsor_id' 			=> 6,
				'link' 					=> 'https://www.eurobloemen.nl/',

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],
			[
				'slug'					=> str_slug('https://www.pcpbreda.nl/', '-'),
				'sponsor_id' 			=> 7,
				'link' 					=> 'https://www.pcpbreda.nl/',

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],
			[
				'slug'					=> str_slug('https://www.drukkerijfrijters.nl', '-'),
				'sponsor_id' 			=> 8,
				'link' 					=> 'https://www.drukkerijfrijters.nl',

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],
			[
				'slug'					=> str_slug('https://www.obsdetweesprong.nl/', '-'),
				'sponsor_id' 			=> 9,
				'link' 					=> 'https://www.obsdetweesprong.nl/',

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],
			[
				'slug'					=> str_slug('https://pmc-heusdenhout.nl/nl/Home', '-'),
				'sponsor_id' 			=> 10,
				'link' 					=> 'https://pmc-heusdenhout.nl/nl/Home',

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],
			[
				'slug'					=> str_slug('http://www.rohashop.nl/', '-'),
				'sponsor_id' 			=> 11,
				'link' 					=> 'http://www.rohashop.nl/',

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],
			[
				'slug'					=> str_slug('https://www.ah.nl/winkel/albert-heijn/Breda/Bisschopshoeve/1174', '-'),
				'sponsor_id' 			=> 12,
				'link' 					=> 'https://www.ah.nl/winkel/albert-heijn/Breda/Bisschopshoeve/1174',

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],
			[
				'slug'					=> str_slug('https://palacebreda.nl/nl/', '-'),
				'sponsor_id' 			=> 13,
				'link' 					=> 'https://palacebreda.nl/nl/',

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],
			[
				'slug'					=> str_slug('http://www.fietsenbreda.nl/', '-'),
				'sponsor_id' 			=> 14,
				'link' 					=> 'http://www.fietsenbreda.nl/',

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],
			[
				'slug'					=> str_slug('http://www.zusje-cadeautjes.nl/', '-'),
				'sponsor_id' 			=> 15,
				'link' 					=> 'http://www.zusje-cadeautjes.nl/',

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],
			[
				'slug'					=> str_slug('https://www.kober.nl/', '-'),
				'sponsor_id' 			=> 16,
				'link' 					=> 'https://www.kober.nl/',

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],
			[
				'slug'					=> str_slug('https://www.ah.nl/winkel/albert-heijn/Breda/Brabantplein/1382', '-'),
				'sponsor_id' 			=> 17,
				'link' 					=> 'https://www.ah.nl/winkel/albert-heijn/Breda/Brabantplein/1382',

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],

		];
		foreach ($sponsor_link as $key => $value) {
			SponsorLink::create($value);
		}

	}
}
