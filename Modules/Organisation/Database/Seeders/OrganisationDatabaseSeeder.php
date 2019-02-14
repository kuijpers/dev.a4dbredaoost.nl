<?php

namespace Modules\Organisation\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Organisation\Entities\Models\Main\TheOrganisation;

class OrganisationDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");


		$the_organisation = [

			[
				'title' 				=> 'Het verleden. ',
				'slug' 					=> str_slug('Het verleden', '-'),
				'description' 			=> 'Het verleden van de organisatie',
				'content' 				=> '<p>
												De organisatie van de avondvierdaagse in breda oost is begonnen in 1979.
											</p>',
				'web_order' 			=> 1,
				'draft' 				=> 1,
				'author' 				=> 1,
				'author_group' 			=> 'Boardmember',
				'author_approve' 		=> 1,
				'editor' 				=> 5,
				'editor_group' 			=> 'Boardmember',
				'editor_approve' 		=> 1,
				'publisher' 			=> 6,
				'publisher_group' 		=> 'Boardmember',
				'publisher_approve' 	=> 1,
				'publish_date_start' 	=> Carbon::now(),
				'publish_date_end' 		=> Carbon::yesterday(),
			],
			[
				'title' 				=> 'Het huidige bestuur. ',
				'slug' 					=> str_slug('Het huidige bestuur', '-'),
				'description' 			=> 'De huidige organisatie',
				'content' 				=> '<p>
												In 2004 bestond de avondvierdaagse Breda-Oost 25 jaar. 
												Op dat moment heeft het toenmalige bestuur na jarenlange trouwe dienst besloten
												 om te stoppen met het organiseren van dit evenement. 
												 In die tijd liepen Mirjam en Anke samen met hun kinderen mee als deelnemers. 
												 De teleurstelling was dan ook groot toen ze hoorden dat dit het laatste jaar 
												 zou gaan worden dat ze deel konden gaan nemen aan dit gezellige evenement.
											</p>
											<p>
												Al wandelend kwamen ze met elkaar aan de praat en samen besloten ze om op zoek
												 te gaan naar een nieuwe teamsamenstelling om een doorstart te kunnen maken. 
												 Uiteindelijk zou het erg jammer zijn als dit leuke evenement uit onze wijk zou gaan verdwijnen.
											</p>
											<p>
												Anke heeft Frans-Willem benaderd. Zij hadden immers via de oudercommissie
												 van K.B.S de Weilust al intensief contact met elkaar. 
												 Hij was op dat moment al actief werkzaam als voorzitter van de wijkraad Heusdenhout/Brabantpark, 
												 dus de keus was al snel gemaakt om hem ook als voorzitter
												  van de commissie avondvierdaagse Breda-Oost te bombarderen.
											</p>
											<p>
												Via Frans-Willem sloot al snel Jan zich aan als penningmeester. 
												Zij waren beide werkzaam binnen hetzelfde bedrijf. 
												Met veel enthousiasme hebben we samen dit evenement een nieuwe vorm gegeven. 
												In de loop der jaren hebben we van verschillende mensen ondersteuning gekregen 
												en de harde kern is uiteindelijk blijven bestaan
											</p>
											<p>
												Na bijna 15 jaar met veel plezier dit evenement te hebben georganiseerd werd
												 het weer tijd voor een nieuwe frisse wind. We kunnen dan ook met volle overgave
												  melden dat er zich weer nieuwe enthousiaste kandidaten hebben aangemeld.
												   We hopen samen dit leuke wijkevenement in stand te houden.
												    Uiteraard kunnen wij dit alleen maar realiseren dankzij onze trouwe vrijwilligers en dierbare sponsors.
											</p>',
				'web_order' 			=> 2,
				'draft' 				=> 1,
				'author' 				=> 1,
				'author_group' 			=> 'Boardmember',
				'author_approve' 		=> 1,
				'editor' 				=> 5,
				'editor_group' 			=> 'Boardmember',
				'editor_approve' 		=> 1,
				'publisher' 			=> 6,
				'publisher_group' 		=> 'Boardmember',
				'publisher_approve' 	=> 1,
				'publish_date_start' 	=> Carbon::now(),
				'publish_date_end' 		=> Carbon::yesterday(),
			],
			[
				'title' 				=> 'De toekomst. ',
				'slug' 					=> str_slug('De toekomst', '-'),
				'description' 			=> 'De toekomst van de organisatie',
				'content' 				=> '<p>
												Met een groep nieuwe mensen nemen we langzaam aan het stokje over van het huidige bestuur. 
												Het digitale tijdperk en social media nemen een steeds grotere rol in, in de huidige maatschappij. 
												Ook voor de avondvierdaagse gaan we kijken wat hierin mogelijk is. 
												Uiteraard blijft het wandelen natuurlijk nog een lichamelijke activiteit voor jong en oud.
											</p>
											<p>
												In de komende periode zullen de nieuwe mensen zich voorstellen en geven we uitleg 
												over hoe de organisatie er geleidelijk aan uit gaat zien.
											</p>',
				'web_order' 			=> 3,
				'draft' 				=> 1,
				'author' 				=> 1,
				'author_group' 			=> 'Boardmember',
				'author_approve' 		=> 1,
				'editor' 				=> 5,
				'editor_group' 			=> 'Boardmember',
				'editor_approve' 		=> 1,
				'publisher' 			=> 6,
				'publisher_group' 		=> 'Boardmember',
				'publisher_approve' 	=> 1,
				'publish_date_start' 	=> Carbon::now(),
				'publish_date_end' 		=> Carbon::yesterday(),
			],


		];
		foreach ($the_organisation as $key => $value) {
			TheOrganisation::create($value);
		}


    }
}
