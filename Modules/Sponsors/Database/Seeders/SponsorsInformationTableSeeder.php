<?php

namespace Modules\Sponsors\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Sponsors\Entities\Models\Main\SponsorInformation;

class SponsorsInformationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

// Information Seeder

		$sponsors_information = [
			[
				'slug' 					=> str_slug('Sponsors', '-'),
				'title' 				=> 'Sponsors',
				'description' 			=> 'Uitleg over het sponsor systeem',
				'body' 					=> '<p>
												Een organisatie als de Avondvierdaagse Breda Oost
												draait naast zijn vrijwilligers ook op de gulle giften van onze sponsors.
												Wij hebben deze sponsors ook hard nodig om te blijven bestaan. 
												Wij zetten onze sponsors graag in het zonnetje door een pagina
												te maken die speciaal op hen gericht is. 
											 </p>
											 <p>
												Als organisatie bieden wij verschillende soorten tegenprestaties aan, aan onze sponsors. 
												Mocht u nu graag in gesprek komen, met de organisatie, over een spronsoring neemt u dan a.u.b. contact op. 
												Wij kunnen u dan precies vertellen wat wij u kunnen bieden.
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

				'publish_date_start'	=> Carbon::now(),
				'publish_date_end' 		=> Carbon::yesterday(),

				'deleted_at' 			=> null,

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],

		];
		foreach ($sponsors_information as $key => $value)
			{
				SponsorInformation::create($value);
			}
    }
}
