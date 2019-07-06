<?php

namespace Modules\Sponsors\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Sponsors\Entities\Models\Main\SponsorPackages;

class SponsorsPackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

		// Sponsor Packages

		$sponsor_packages = [
			[
				'name' 					=> 'Full 250',
				'slug' 					=> str_slug('Full 250', '-'),
				'description' 			=> 'All option on with a max of 250 characters',

				'title_field'			=> 1,
				'text_field'			=> 1,
				'image_field'			=> 1,
				'footer_field'			=> 1,
				'linked_title'			=> 1,
				'linked_footer'			=> 1,
				'linked_image'			=> 1,
				'own_logo'				=> 1,
				'max_text_char'			=> 250,

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],
			[
				'name' 					=> 'Full 500',
				'slug' 					=> str_slug('Full 500', '-'),
				'description' 			=> 'All option on with a max of 500 characters',

				'title_field'			=> 1,
				'text_field'			=> 1,
				'image_field'			=> 1,
				'footer_field'			=> 1,
				'linked_title'			=> 1,
				'linked_footer'			=> 1,
				'linked_image'			=> 1,
				'own_logo'				=> 1,
				'max_text_char'			=> 500,

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],
			[
				'name' 					=> 'Full 750',
				'slug' 					=> str_slug('Full 750', '-'),
				'description' 			=> 'All option on with a max of 750 characters',

				'title_field'			=> 1,
				'text_field'			=> 1,
				'image_field'			=> 1,
				'footer_field'			=> 1,
				'linked_title'			=> 1,
				'linked_footer'			=> 1,
				'linked_image'			=> 1,
				'own_logo'				=> 1,
				'max_text_char'			=> 750,

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],
			[
				'name' 					=> 'Full 1000',
				'slug' 					=> str_slug('Full 1000', '-'),
				'description' 			=> 'All option on with a max of 1000 characters',

				'title_field'			=> 1,
				'text_field'			=> 1,
				'image_field'			=> 1,
				'footer_field'			=> 1,
				'linked_title'			=> 1,
				'linked_footer'			=> 1,
				'linked_image'			=> 1,
				'own_logo'				=> 1,
				'max_text_char'			=> 1000,

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],
			[
				'name' 					=> 'Mini text',
				'slug' 					=> str_slug('Mini text', '-'),
				'description' 			=> 'Only title with text of max 250 characters',

				'title_field'			=> 1,
				'text_field'			=> 1,
				'image_field'			=> 0,
				'footer_field'			=> 0,
				'linked_title'			=> 0,
				'linked_footer'			=> 0,
				'linked_image'			=> 0,
				'own_logo'				=> 0,
				'max_text_char'			=> 250,

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],
			[
				'name' 					=> 'Image footer linked',
				'slug' 					=> str_slug('Image footer linked', '-'),
				'description' 			=> 'Image with link in footer',

				'title_field'			=> 0,
				'text_field'			=> 0,
				'image_field'			=> 1,
				'footer_field'			=> 1,
				'linked_title'			=> 0,
				'linked_footer'			=> 1,
				'linked_image'			=> 1,
				'own_logo'				=> 1,
				'max_text_char'			=> 250,

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],
			[
				'name' 					=> 'Full non text',
				'slug' 					=> str_slug('Full non text', '-'),
				'description' 			=> 'All options but without text',

				'title_field'			=> 1,
				'text_field'			=> 0,
				'image_field'			=> 1,
				'footer_field'			=> 1,
				'linked_title'			=> 1,
				'linked_footer'			=> 1,
				'linked_image'			=> 1,
				'own_logo'				=> 1,
				'max_text_char'			=> 0,

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],

		];
		foreach ($sponsor_packages as $key => $value) {
			SponsorPackages::create($value);
		}
    }
}
