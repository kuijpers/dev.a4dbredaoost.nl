<?php

namespace Modules\Faq\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Faq\Entities\Models\Main\FaqInformation;

class FaqInformationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $faq_information = [
        					[
        						'title' => 'Wat kunnen wij voor u betekenen.',
        						'slug' => str_slug('Wat kunnen wij voor u betekenen.', '-'),
        						'description' => 'Welke vragen worden vaak gesteld?',
        						'content' => '
        						<p>
        						Als organisatie ontvangen wij vaak vragen. 
        						Het komt dan ook regelmatig voor dat dezelfde vragen gesteld worden. 
        						Deze pagina is hier speciaal voor aangemaakt. 
        						</p>
        						<p>
        						Hieronder hebben we de meest voorkomende vragen op een rijtje proberen te zetten. 
        						Om het makkelijker te maken hebben we de vragen in categoriën gezet in de hoop 
        						dat dit voor u beter helpt. 
        						Mochten er nu toch vragen zijn die hieronder niet vermeld staan dan kunt u ons 
        						altijd een berichtje sturen via de <a href="/contact" class="text-success">contact pagina</a>.
								</p>',
        						'web_order' => 1,
        						'draft' => 1,
        						'author' => 6,
        						'author_group' => 'Boardmember',
        						'author_approve' => 1,
        						'editor' => 6,
        						'editor_group' => 'Boardmember',
        						'editor_approve' => 1,
        						'publisher' => 6,
        						'publisher_group' => 'Boardmember',
        						'publisher_approve' => 1,
        						'publish_date_start' => Carbon::now(),
        						'publish_date_end' => Carbon::yesterday(),
							]	,
        					[
        						'title' => 'FAQ',
        						'slug' => str_slug('FAQ', '-'),
        						'description' => 'FAQ pagina',
        						'content' => '
        						<p>
        							Hieronder kunt u de Frequently Asked Questions vinden.
								</p>',
        						'draft' => 1,
								'author' => 6,
								'author_group' => 'Boardmember',
							]	,
		];

		foreach ($faq_information as $key => $value) {
			FaqInformation::create($value);
		}




    }
}
