<?php

namespace Modules\Sponsors\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Sponsors\Entities\Models\Main\Sponsor;
use Modules\Sponsors\Entities\Models\Main\SponsorImage;
use Modules\Sponsors\Entities\Models\Main\SponsorInformation;
use Modules\Sponsors\Entities\Models\Main\SponsorLink;
use Modules\Sponsors\Entities\Models\Main\SponsorPackages;
use Modules\Sponsors\Entities\Models\Main\SponsorSettings;
use Modules\Sponsors\Entities\Models\Main\SponsorSpotlight;

class SponsorsDatabaseSeeder extends Seeder
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
				'sponsor_packages_id' 	=> 7,

				'created_at' 			=> Carbon::now(),
				'updated_at' 			=> Carbon::now(),
			],

		];
		foreach ($sponsors as $key => $value)
			{
				Sponsor::create($value);
			}



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


		// Settings Seeder

		$sponsor_settings = [
			[
				'slug' 			=> str_slug('Set title', '-'),
				'name' 			=> 'set title',
				'description' 	=> 'Title visible on website yes or no',
				'value_bool' 	=> 1,
				'value_text' 	=> '',

				'created_at' 	=> Carbon::now(),
				'updated_at' 	=> Carbon::now(),
			],

			[
				'slug' 			=> str_slug('Set body', '-'),
				'name' 			=> 'set body',
				'description' 	=> 'Body visible on website yes or no',
				'value_bool' 	=> 1,
				'value_text' 	=> '',

				'created_at' 	=> Carbon::now(),
				'updated_at' 	=> Carbon::now(),
			],

			[
				'slug' 			=> str_slug('Set theme', '-'),
				'name' 			=> 'set theme',
				'description' 	=> 'Set the theme for the layout',
				'value_bool' 	=> 1,
				'value_text' 	=> '',

				'created_at' 	=> Carbon::now(),
				'updated_at' 	=> Carbon::now(),
			],

			[
				'slug' 			=> str_slug('number of columns', '-'),
				'name' 			=> 'number of columns',
				'description' 	=> 'Set the number of columns',
				'value_bool' 	=> 3,
				'value_text' 	=> '',

				'created_at' 	=> Carbon::now(),
				'updated_at' 	=> Carbon::now(),
			],
		];
		foreach ($sponsor_settings as $key => $value) {
			SponsorSettings::create($value);
		}


    }
}
