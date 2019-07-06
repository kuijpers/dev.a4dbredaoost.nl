<?php

namespace Modules\Sponsors\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Sponsors\Entities\Models\Main\Sponsor;

class SponsorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

		// Sponsor package ID
		// 1 = Full 250
		// 2 = Full 500
		// 3 = Full 750
		// 4 = Full 1000
		// 5 = Mini text
		// 6 = Image footer linked
		// 7 = Full non text


		// Main Seeder

		$sponsors = [
			// ID = 1
			[
				'title' 				=> 'Cigo Brabantplein Breda',
				'slug' 					=> str_slug('Cigo Brabantplein Breda', '-'),
				'description' 			=> 'Sponsor Cigo Brabantplein Breda',
				'body' 					=> '<p>
												Het adres voor leuke cadeau artikelen, boeken, kantoorartikelen, enz.
												<br>
												Wij hebben ook een grote voorraad aan bridge artikelen.
											</p>',
				//				'web_order' 			=> 0,
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

				'payment_received' 		=> 1,
				'payment_received_at'	=> Carbon::now(),

				'sponsor_packages_id' 	=> 1,

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],
			// ID = 2
			[
				'title' 				=> 'Brainwash brabantplein Breda',
				'slug' 					=> str_slug('Brainwash brabantplein Breda', '-'),
				'description' 			=> 'Sponsor Brainwash brabantplein Breda',
				'body' 					=> '<p>
												Zin in een nieuw kapsel.
                                    			<br>
												Wilt u snel geholpen worden zonder afspraak.
												<br>
												Brainwash Brabantplein is voor u het adres voor een heerlijke knipbeurt.
											</p>',
				//				'web_order' 			=> 0,
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

				'payment_received' 		=> 1,
				'payment_received_at'	=> Carbon::now(),

				'sponsor_packages_id' 	=> 5,

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],
			// ID = 3
			[
				'title' 				=> 'KBS Weilust Breda',
				'slug' 					=> str_slug('KBS Weilust Breda', '-'),
				'description' 			=> 'Sponsor KBS Weilust Breda',
				'body' 					=> '<p>
												KBS Weilust is een katholieke basisschool, die sinds 1 maart 1970 bestaat en is gelegen in Breda-Oost.
												De school heeft ongeveer 500 leerlingen en het team bestaat uit 41 personeelsleden.
												De populatie op KBS Weilust is een goede afspiegeling van de wijk, waarin de school ligt en de maatschappij.
												<br>
												‘Met veel plezier naar school’. Zo luidt het ‘mission statement’ van onze school.
												Wij vinden het belangrijk dat iedereen zich veilig en gewaardeerd voelt,
												zodat de leerlingen optimaal tot leren, spelen en ontwikkelen komen.
												We streven naar balans in cognitieve, sociaal- emotionele, creatieve en sportieve ontwikkeling.
											</p>',
				//				'web_order' 			=> 0,
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

				'payment_received' 		=> 1,
				'payment_received_at'	=> Carbon::now(),

				'sponsor_packages_id' 	=> 4,

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],
			// ID = 4
			[
				'title' 				=> 'Winkelcentrum Heusdenhout Breda',
				'slug' 					=> str_slug('Winkelcentrum Heusdenhout Breda', '-'),
				'description' 			=> 'Sponsor Winkelcentrum Heusdenhout Breda',
				'body' 					=> '<p>
												Winkelcentrum Heusdenhout is gelegen aan de Bisschopshoeve in Breda-Oost.
												Door het veelzijdige aanbod van zowel grootwinkelbedrijf als gespecialiseerde winkeliers is het er goed vertoeven.
												Voor al uw boodschappen en vertier kunt u bij ons terecht.
											</p>',
				//				'web_order' 			=> 0,
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

				'payment_received' 		=> 1,
				'payment_received_at'	=> Carbon::now(),

				'sponsor_packages_id' 	=> 3,

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],
			// ID = 5
			[
				'title' 				=> 'Meeus Verzekeringen',
				'slug' 					=> str_slug('Meeus Verzekeringen', '-'),
				'description' 			=> 'Sponsor Meeus Verzekeringen',
				'body' 					=> '<p>
												Meeus is vanaf nu Aon.
											</p>',
				//				'web_order' 			=> 0,
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

				'payment_received' 		=> 1,
				'payment_received_at'	=> Carbon::now(),

				'sponsor_packages_id' 	=> 5,

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],
			// ID = 6
			[
				'title' 				=> 'Willemsen Tuin en Bloemen Breda',
				'slug' 					=> str_slug('Willemsen Tuin en Bloemen Breda', '-'),
				'description' 			=> 'Sponsor Willemsen Tuin en Bloemen Breda',
				'body' 					=> '<p>
												
											</p>',
				//				'web_order' 			=> 0,
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

				'payment_received' 		=> 1,
				'payment_received_at'	=> Carbon::now(),

				'sponsor_packages_id' 	=> 6,

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],
			// ID = 7
			[
				'title' 				=> 'P.C.P. Voetbalvereniging Breda',
				'slug' 					=> str_slug('P.C.P. Voetbalvereniging Breda', '-'),
				'description' 			=> 'Sponsor P.C.P. Voetbalvereniging Breda',
				'body' 					=> '<p>
												Gelegen in het hart van de Bredase wijken Brabantpark en Heusdenhout,
												’waar ons voetbalhart klopt’,
												stelt zich actief op om de vereniging meer en meer een thuisclub voor de wijk te maken.
												De mogelijkheden voor een sportclub reiken verder;
												ons sociale gezicht laten zien en meerdere rollen vervullen voor de bewoners (jong tot oud) in de wijk.
											</p>',
				//				'web_order' 			=> 0,
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

				'payment_received' 		=> 1,
				'payment_received_at'	=> Carbon::now(),

				'sponsor_packages_id' 	=> 4,

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],
			// ID = 8
			[
				'title' 				=> 'Drukkerij Frijters Breda',
				'slug' 					=> str_slug('Drukkerij Frijters Breda', '-'),
				'description' 			=> 'Sponsor Drukkerij Frijters Breda',
				'body' 					=> '<p>
												
											</p>',
				//				'web_order' 			=> 0,
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

				'payment_received' 		=> 1,
				'payment_received_at'	=> Carbon::now(),

				'sponsor_packages_id' 	=> 6,

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],
			// ID = 9
			[
				'title' 				=> 'O.B.S. De tweesprong Breda',
				'slug' 					=> str_slug('O.B.S. De tweesprong Breda', '-'),
				'description' 			=> 'Sponsor O.B.S. De tweesprong Breda',
				'body' 					=> '<p>
												Onze school ligt op de grens van de wijken Heusdenhout en Brabantpark.
												Samen met de ouders streeft het team naar een school waar kinderen zich thuis voelen.
												Alles draait er immers om de kinderen.
												Zij helpen mee aan de fijne sfeer op onze school en kunnen zo op
												"natuurlijke wijze" hun mogelijkheden optimaal ontwikkelen.
												Elk kind krijgt de zorg die hij of zij nodig heeft.
												<br>
												<br>
												Voor ons zijn de volgende 5 waarden van groot belang:
												<br>
												<strong>
													Respect, structuur, zelfstandigheid, veiligheid en humor.
												</strong>
											</p>',
				//				'web_order' 			=> 0,
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

				'payment_received' 		=> 1,
				'payment_received_at'	=> Carbon::now(),

				'sponsor_packages_id' 	=> 4,

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],
			// ID = 10
			[
				'title' 				=> 'Paramedisch Centrum Heusdenhout Breda',
				'slug' 					=> str_slug('Paramedisch Centrum Heusdenhout Breda', '-'),
				'description' 			=> 'Sponsor Paramedisch Centrum Heusdenhout Breda',
				'body' 					=> '<p>
												Paramedisch Centrum (PMC) Heusdenhout is sinds 2001 gevestigd aan de wilderen in de wijk Heusdenhout in Breda.
												Het centrum biedt onderdak aan verschillende (para) medische disciplines.
												Niet alleen binnen maar ook buiten het centrum zijn er samenwerkingsverbanden.
												De disciplines binnen en buiten PMC-Heusdenhout werken nauw samen met als doel het leveren van optimale en complete zorg.
											</p>',
				//				'web_order' 			=> 0,
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

				'payment_received' 		=> 1,
				'payment_received_at'	=> Carbon::now(),

				'sponsor_packages_id' 	=> 2,

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],
			// ID = 11
			[
				'title' 				=> 'ROHA Shop Breda',
				'slug' 					=> str_slug('ROHA Shop Breda', '-'),
				'description' 			=> 'Sponsor ROHA Shop Breda',
				'body' 					=> '<p>
												In onze totaal vernieuwde RohaShop aan de Tilburgseweg nummer 16 in Breda,
												vindt u onze Top1Toys speelgoedwinkel.
												Verdeeld over 2 verdiepingen bieden wij ± 400m² aan speelplezier!
											</p>',
				//				'web_order' 			=> 0,
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

				'payment_received' 		=> 1,
				'payment_received_at'	=> Carbon::now(),

				'sponsor_packages_id' 	=> 4,

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],
			// ID = 12
			[
				'title' 				=> 'Albert Heijn Bisschopshoeve Breda',
				'slug' 					=> str_slug('Albert Heijn Bisschopshoeve Breda', '-'),
				'description' 			=> 'Sponsor Albert Heijn Bisschopshoeve Breda',
				'body' 					=> '<p>
												
											</p>',
				//				'web_order' 			=> 0,
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

				'payment_received' 		=> 1,
				'payment_received_at'	=> Carbon::now(),

				'sponsor_packages_id' 	=> 7,

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],
			// ID = 13
			[
				'title' 				=> 'Chinees restaurant Palace',
				'slug' 					=> str_slug('Chinees restaurant Palace', '-'),
				'description' 			=> 'Sponsor Chinees restaurant Palace',
				'body' 					=> '<p>
												Op 8 februari 1986 werd Chinees Specialiteiten Restaurant “Palace” geopend.
												Een eigentijds en gastvrij restaurant waar u in een sfeervolle omgeving
												kan genieten van een heerlijk diner.
											</p>',
				//				'web_order' 			=> 0,
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

				'payment_received' 		=> 1,
				'payment_received_at'	=> Carbon::now(),

				'sponsor_packages_id' 	=> 2,

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],
			// ID = 14
			[
				'title' 				=> 'Fietsen Breda',
				'slug' 					=> str_slug('Fietsen Breda', '-'),
				'description' 			=> 'Sponsor Fietsen Breda',
				'body' 					=> '<p>
												Fietsen Breda is sinds 1934 gevestigd aan de Tilburgseweg 1 te Breda.
												<br>
												<br>
												Wij verkopen stadsfietsen, recreatieve fietsen, ATB, mountain bikes,
												moederfietsen, elektrisch ondersteunde fietsen/E-bike, sport-hybride fietsen,
												racefietsen, transportfietsen...Zowel nieuw als 2e hands.
												Bij ons vindt U verschillende modellen van merken zoals Multicycle,BSP, en Vogue
												,kortom voor elk wat wils.
											</p>',
				//				'web_order' 			=> 0,
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

				'payment_received' 		=> 1,
				'payment_received_at'	=> Carbon::now(),

				'sponsor_packages_id' 	=> 4,

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],
			// ID = 15
			[
				'title' 				=> 'Zusje cadeautjes',
				'slug' 					=> str_slug('Zusje cadeautjes', '-'),
				'description' 			=> 'Sponsor Zusje cadeautjes',
				'body' 					=> '<p>
												
											</p>',
				//				'web_order' 			=> 0,
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

				'payment_received' 		=> 1,
				'payment_received_at'	=> Carbon::now(),

				'sponsor_packages_id' 	=> 6,

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],
			// ID = 16
			[
				'title' 				=> 'Kober Kinder Centra Breda',
				'slug' 					=> str_slug('Kober Kinder Centra Breda', '-'),
				'description' 			=> 'Sponsor Kober Kinder Centra Breda',
				'body' 					=> '<p>
												Ben je in verwachting of heb je jonge kinderen en
												wil je de zorg voor je gezin graag combineren met je werk of je studie?
												Dan zit je goed bij Kober kinderopvang.
												Of je nu een kinderdagverblijf zoekt, peuteropvang,
												buitenschoolse opvang of een gastouder;
												we bieden je kind dicht bij huis of je werk een
												vertrouwde plek en een uitdagende speel- en leeromgeving.
											</p>',
				//				'web_order' 			=> 0,
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

				'payment_received' 		=> 1,
				'payment_received_at'	=> Carbon::now(),

				'sponsor_packages_id' 	=> 2,

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],
			// ID = 17
			[
				'title' 				=> 'Albert Heijn Brabantplein Breda',
				'slug' 					=> str_slug('Albert Heijn Brabantplein Breda', '-'),
				'description' 			=> 'Sponsor Albert Heijn Brabantplein Breda',
				'body' 					=> '<p>
												
											</p>',
				//				'web_order' 			=> 0,
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

				'payment_received' 		=> 1,
				'payment_received_at'	=> Carbon::now(),

				'sponsor_packages_id' 	=> 7,

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],

		];
		foreach ($sponsors as $key => $value)
			{
				Sponsor::create($value);
			}

	}
}
