<?php

namespace Modules\Faq\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Faq\Entities\Models\Main\FaqCategorie;

class FaqCategorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $faq_categorie = [
        				[
//        					id = 1
        					'name' 					=> 'Inschrijven',
        					'slug' 					=> str_slug('Inschrijven', '-'),
        					'web_order' 			=> 1,
        					'publisher_approve' 	=> 1
						],
        				[
//        					id = 2
        					'name' 					=> 'Organisatie',
        					'slug' 					=> str_slug('Organisatie', '-'),
        					'web_order' 			=> 2,
        					'publisher_approve' 	=> 1
						],
        				[
//        					id = 3
        					'name' 					=> 'Deelname',
        					'slug' 					=> str_slug('Deelname', '-'),
        					'web_order' 			=> 3,
        					'publisher_approve' 	=> 1
						],
        				[
//        					id = 4
        					'name' 					=> 'AVG (privacy)',
        					'slug' 					=> str_slug('AVG (privacy)', '-'),
        					'web_order' 			=> 4,
        					'publisher_approve' 	=> 1
						],

					];

		foreach ($faq_categorie as $key => $value) {
			FaqCategorie::create($value);
		}

    }
}
