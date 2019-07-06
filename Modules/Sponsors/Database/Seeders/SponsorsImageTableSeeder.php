<?php

namespace Modules\Sponsors\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Sponsors\Entities\Models\Main\SponsorImage;

class SponsorsImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

		// Image Seeder

		$sponsor_image = [
			// Cigo
			[
				'name' 				=> 'httpbrabantpleincigonlwinkelbcontact1539476395.jpg',
				'slug' 				=> str_slug('httpbrabantpleincigonlwinkelbcontact1539476395.jpg', '-'),
				'description' 		=> 'Screenshot website Cigo Brabantplein Breda',
				'content' 			=> '',
				'photographer' 		=> 'Webmaster A4DBreda-oost',
				'sponsor_id' 		=> 1,

				'created_at' 		=> Carbon::now(),
				'updated_at' 		=> Carbon::now(),
			],
			// Weilust
			[
				'name' 				=> 'httpwwwweilustnl1539476413.jpg',
				'slug' 				=> str_slug('httpwwwweilustnl1539476413.jpg', '-'),
				'description' 		=> 'Screenshot website KBS Weilust Breda',
				'content' 			=> '',
				'photographer' 		=> 'Webmaster A4DBreda-oost',
				'sponsor_id' 		=> 3,

				'created_at' 		=> Carbon::now(),
				'updated_at' 		=> Carbon::now(),
			],
			// Winkelcentrum Heusdenhout Breda
			[
				'name' 				=> 'httpheusdenhoutwinkelcentrumnl1539476422.jpg',
				'slug' 				=> str_slug('httpheusdenhoutwinkelcentrumnl1539476422.jpg', '-'),
				'description' 		=> 'Screenshot website Winkelcentrum Heusdenhout Breda',
				'content' 			=> '',
				'photographer' 		=> 'Webmaster A4DBreda-oost',
				'sponsor_id' 		=> 4,

				'created_at' 		=> Carbon::now(),
				'updated_at' 		=> Carbon::now(),
			],
			// Willemsen Tuin en Bloemen Breda
			[
				'name' 				=> 'httpswwweurobloemennl1539476381.jpg',
				'slug' 				=> str_slug('httpswwweurobloemennl1539476381.jpg', '-'),
				'description' 		=> 'Screenshot website Willemsen Tuin en Bloemen Breda',
				'content' 			=> '',
				'photographer' 		=> 'Webmaster A4DBreda-oost',
				'sponsor_id' 		=> 6,

				'created_at' 		=> Carbon::now(),
				'updated_at' 		=> Carbon::now(),
			],
			// P.C.P. Voetbalvereniging Breda
			[
				'name' 				=> 'httpswwwpcpbredanl1539476444.jpg',
				'slug' 				=> str_slug('httpswwwpcpbredanl1539476444.jpg', '-'),
				'description' 		=> 'Screenshot website P.C.P. Voetbalvereniging Breda',
				'content' 			=> '',
				'photographer' 		=> 'Webmaster A4DBreda-oost',
				'sponsor_id' 		=> 7,

				'created_at' 		=> Carbon::now(),
				'updated_at' 		=> Carbon::now(),
			],
			// Drukkerij Frijters Breda
			[
				'name' 				=> 'httpswwwdrukkerijfrijtersnl1539476430.jpg',
				'slug' 				=> str_slug('httpswwwdrukkerijfrijtersnl1539476430.jpg', '-'),
				'description' 		=> 'Screenshot website Drukkerij Frijters Breda',
				'content' 			=> '',
				'photographer' 		=> 'Webmaster A4DBreda-oost',
				'sponsor_id' 		=> 8,

				'created_at' 		=> Carbon::now(),
				'updated_at' 		=> Carbon::now(),
			],
			// O.B.S. De tweesprong Breda
			[
				'name' 				=> 'httpswwwobsdetweesprongnl1539476408.jpg',
				'slug' 				=> str_slug('httpswwwobsdetweesprongnl1539476408.jpg', '-'),
				'description' 		=> 'Screenshot website O.B.S. De tweesprong Breda',
				'content' 			=> '',
				'photographer' 		=> 'Webmaster A4DBreda-oost',
				'sponsor_id' 		=> 9,

				'created_at' 		=> Carbon::now(),
				'updated_at' 		=> Carbon::now(),
			],
			// Paramedisch Centrum Heusdenhout Breda
			[
				'name' 				=> 'httpspmcheusdenhoutnlnlHome1539476472.jpg',
				'slug' 				=> str_slug('httpspmcheusdenhoutnlnlHome1539476472.jpg', '-'),
				'description' 		=> 'Screenshot website Paramedisch Centrum Heusdenhout Breda',
				'content' 			=> '',
				'photographer' 		=> 'Webmaster A4DBreda-oost',
				'sponsor_id' 		=> 10,

				'created_at' 		=> Carbon::now(),
				'updated_at' 		=> Carbon::now(),
			],
			// ROHA Shop Breda
			[
				'name' 				=> 'httpwwwrohashopnl1539476459.jpg',
				'slug' 				=> str_slug('httpwwwrohashopnl1539476459.jpg', '-'),
				'description' 		=> 'Screenshot website ROHA Shop Breda',
				'content' 			=> '',
				'photographer' 		=> 'Webmaster A4DBreda-oost',
				'sponsor_id' 		=> 11,

				'created_at' 		=> Carbon::now(),
				'updated_at' 		=> Carbon::now(),
			],
			// Albert Heijn Bisschopshoeve Breda
			[
				'name' 				=> 'httpswwwahnlwinkelalbertheijnBredaBisschopshoeve11741539476370.jpg',
				'slug' 				=> str_slug('httpswwwahnlwinkelalbertheijnBredaBisschopshoeve11741539476370.jpg', '-'),
				'description' 		=> 'Screenshot website Albert Heijn Bisschopshoeve Breda',
				'content' 			=> '',
				'photographer' 		=> 'Webmaster A4DBreda-oost',
				'sponsor_id' 		=> 12,

				'created_at' 		=> Carbon::now(),
				'updated_at' 		=> Carbon::now(),
			],
			// Chinees restaurant Palace
			[
				'name' 				=> 'httpspalacebredanlnl1539476377.jpg',
				'slug' 				=> str_slug('httpspalacebredanlnl1539476377.jpg', '-'),
				'description' 		=> 'Screenshot website Chinees restaurant Palace',
				'content' 			=> '',
				'photographer' 		=> 'Webmaster A4DBreda-oost',
				'sponsor_id' 		=> 13,

				'created_at' 		=> Carbon::now(),
				'updated_at' 		=> Carbon::now(),
			],
			// Fietsen Breda
			[
				'name' 				=> 'httpwwwfietsenbredanl1539476402.jpg',
				'slug' 				=> str_slug('httpwwwfietsenbredanl1539476402.jpg', '-'),
				'description' 		=> 'Screenshot website Fietsen Breda',
				'content' 			=> '',
				'photographer' 		=> 'Webmaster A4DBreda-oost',
				'sponsor_id' 		=> 14,

				'created_at' 		=> Carbon::now(),
				'updated_at' 		=> Carbon::now(),
			],
			// Zusje cadeautjes
			[
				'name' 				=> 'httpwwwzusjecadeautjesnl1539476476.jpg',
				'slug' 				=> str_slug('httpwwwzusjecadeautjesnl1539476476.jpg', '-'),
				'description' 		=> 'Screenshot website Zusje cadeautjes',
				'content' 			=> '',
				'photographer' 		=> 'Webmaster A4DBreda-oost',
				'sponsor_id' 		=> 15,

				'created_at' 		=> Carbon::now(),
				'updated_at' 		=> Carbon::now(),
			],
			// Kober Kinder Centra Breda
			[
				'name' 				=> 'httpswwwkobernl1539476454.jpg',
				'slug' 				=> str_slug('httpswwwkobernl1539476454.jpg', '-'),
				'description' 		=> 'Screenshot website Kober Kinder Centra Breda',
				'content' 			=> '',
				'photographer' 		=> 'Webmaster A4DBreda-oost',
				'sponsor_id' 		=> 16,

				'created_at' 		=> Carbon::now(),
				'updated_at' 		=> Carbon::now(),
			],
			// Albert Heijn Brabantplein Breda
			[
				'name' 				=> 'httpswwwahnlwinkelalbertheijnBredaBrabantplein13821539476363.jpg',
				'slug' 				=> str_slug('httpswwwahnlwinkelalbertheijnBredaBrabantplein13821539476363.jpg', '-'),
				'description' 		=> 'Screenshot website Albert Heijn Brabantplein Breda',
				'content' 			=> '',
				'photographer' 		=> 'Webmaster A4DBreda-oost',
				'sponsor_id' 		=> 17,

				'created_at' 		=> Carbon::now(),
				'updated_at' 		=> Carbon::now(),
			],

		];
		foreach ($sponsor_image as $key => $value) {
			SponsorImage::create($value);
		}
    }
}
