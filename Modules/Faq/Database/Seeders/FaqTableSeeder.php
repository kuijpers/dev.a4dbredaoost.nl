<?php

namespace Modules\Faq\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Faq\Entities\Models\Main\Faq;

class FaqTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $faq = [
        			[
        				'title' 				=> 'Wanneer en waar kan er ingeschreven worden?',
        				'slug' 					=> str_slug('Wanneer en waar kan er ingeschreven worden?', '-'),
        				'content' 			=>
						'<p>
						
						We houden als organisatie 3 inschrijf momenten en deze vinden plaats op een woensdag en zaterdag in de aanloop naar de avondvierdaagse. 
						Daarnaast kunt u ook nog uw inschrijving regelen op de startdag van de avondvierdaagse en dit is op dinsdag. 
						<br><br>
						Op woensdag 12-06-2019 tussen 12.00 en 13.00 kunt u zich inschrijven op de volgende 2 lokaties:
						<br>
						<ul>
							<li>
								OBS De Tweesprong
							</li>
							<li>
								KBS De Weilust
							</li>
						</ul>
						Op zaterdag 15-06-2019 tussen 10.00 en 13.00 kunt u zich inschrijven op de volgende 2 lokaties:
						<br>
						<ul>
							<li>
								Albert Heijn Bischopshoeve
							</li>
							<li>
								Albert Heijn Brabantplein
							</li>
						</ul>
						<br>
						Op deze lokaties vindt u vrijwilligers van de a4d Breda Oost. 
						<br><br>
						Op dinsdag 18-06-2019 is er nog een mogelijkheid om in te schrijven op de start locatie. De tijden hiervoor zijn van 17.30 tot 18.30.
						
						</p>',
        				'description'	 			=> 'Informatie over wanneer en waar de inschrijvingen plaats vinden.',
        				'web_order' 			=> 1,
        				'faq_categorie_id' 		=> 1,
        				'draft' 				=> 1,
        				'author' 				=> 6,
        				'author_group' 			=> 'Boardmember',
        				'author_approve' 		=> 1,
        				'editor' 				=> 6,
        				'editor_group' 			=> 'Boardmember',
        				'editor_approve' 		=> 1,
        				'publisher' 			=> 6,
        				'publisher_group' 		=> 'Boardmember',
        				'publisher_approve' 	=> 1,
        				'publish_date_start' 	=> Carbon::now(),
        				'publish_date_end' 		=> Carbon::yesterday(),

					],
        			[
        				'title' 				=> 'Is legitimatie verplicht bij de inschrijving?',
        				'slug' 					=> str_slug('Is legitimatie verplicht bij de inschrijving?', '-'),
        				'content' 			=> '
        				<p>
        				Nee, dit is niet nodig. We gaan er vanuit dat alles op een eerlijke manier zal gebeuren. 
        				Hier mogen we toch wel vertrouwen in hebben. 
        				Mocht er toch nog twijfel bestaan over de leeftijden van de jongere deelnemers 
        				dan wordt er alsnog om legitimatie verzocht. Dit is puur om veiligheids redenen.
        				</p>',
        				'description'	 			=> 'Legitimatie i.v.m. de leeftijd van de deelnemers',
        				'web_order' 			=> 2,
        				'faq_categorie_id' 		=> 1,
        				'draft' 				=> 1,
        				'author' 				=> 6,
        				'author_group' 			=> 'Boardmember',
        				'author_approve' 		=> 1,
        				'editor' 				=> 6,
        				'editor_group' 			=> 'Boardmember',
        				'editor_approve' 		=> 1,
        				'publisher' 			=> 6,
        				'publisher_group' 		=> 'Boardmember',
        				'publisher_approve' 	=> 1,
        				'publish_date_start' 	=> Carbon::now(),
        				'publish_date_end' 		=> Carbon::yesterday(),

					],
        			[
        				'title' 				=> 'Ik wil met mijn zoon / dochter meelopen. Moet ik me nu verplicht inschrijven ?',
        				'slug' 					=> str_slug('Ik wil met mijn zoon / dochter meelopen. Moet ik me nu verplicht inschrijven ?', '-'),
        				'content' 			=> '
        				<p>
        				U bent niet verplicht tot inschrijving wanneer u mee loopt maar met uw inschrijving 
        				steunt u ook de avondvierdaagse voor uw zoon / dochter. 
        				Uiteraard kunt u dan ook gebruik maken van de versnaperingen onderweg en 
        				aan het eind een medaille in ontvangst nemen.
        				</p>',
        				'description'	 			=> 'Is de inschrijving verplicht?',
        				'web_order' 			=> 3,
        				'faq_categorie_id' 		=> 1,
        				'draft' 				=> 1,
        				'author' 				=> 6,
        				'author_group' 			=> 'Boardmember',
        				'author_approve' 		=> 1,
        				'editor' 				=> 6,
        				'editor_group' 			=> 'Boardmember',
        				'editor_approve' 		=> 1,
        				'publisher' 			=> 6,
        				'publisher_group' 		=> 'Boardmember',
        				'publisher_approve' 	=> 1,
        				'publish_date_start' 	=> Carbon::now(),
        				'publish_date_end' 		=> Carbon::yesterday(),

					],
        			[
        				'title' 				=> 'Mag ik ook mijn kleinkinderen inschrijven ?',
        				'slug' 					=> str_slug('Mag ik ook mijn kleinkinderen inschrijven ?', '-'),
        				'content' 			=> '
        				<p>
        				Zeer zeker dat dit mag. 
        				De avondvierdaagse is altijd al een soort van familiefeest geweest en dit willen we graag zo houden. 
        				Het zou helemaal geweldig zijn wanneer u zelf ook meeloopt.
        				</p>',
        				'description'	 			=> 'Kunnen mijn kleinkinderen ingeschreven worden?',
        				'web_order' 			=> 4,
        				'faq_categorie_id' 		=> 1,
        				'draft' 				=> 1,
        				'author' 				=> 6,
        				'author_group' 			=> 'Boardmember',
        				'author_approve' 		=> 1,
        				'editor' 				=> 6,
        				'editor_group' 			=> 'Boardmember',
        				'editor_approve' 		=> 1,
        				'publisher' 			=> 6,
        				'publisher_group' 		=> 'Boardmember',
        				'publisher_approve' 	=> 1,
        				'publish_date_start' 	=> Carbon::now(),
        				'publish_date_end' 		=> Carbon::yesterday(),

					],
        			[
        				'title' 				=> 'Wat zijn de inschrijvingskosten ?',
        				'slug' 					=> str_slug('Wat zijn de inschrijvingskosten ?', '-'),
        				'content' 				=> '
        				<p>
        				Tijdens de voorinschrijving op de scholen en bij de supermarkten zijn de kosten € 3,50. 
        				<br>
						Inschrijven op de startdag bij PCP kost € 4,50 
						<br>
						De kosten dienen contant voldaan te worden.
        				</p>',
        				'description'	 		=> 'Wat zijn de kosten bij inschrijving?',
        				'web_order' 			=> 5,
        				'faq_categorie_id' 		=> 1,
        				'draft' 				=> 1,
        				'author' 				=> 6,
        				'author_group' 			=> 'Boardmember',
        				'author_approve' 		=> 1,
        				'editor' 				=> 6,
        				'editor_group' 			=> 'Boardmember',
        				'editor_approve' 		=> 1,
        				'publisher' 			=> 6,
        				'publisher_group' 		=> 'Boardmember',
        				'publisher_approve' 	=> 1,
        				'publish_date_start' 	=> Carbon::now(),
        				'publish_date_end' 		=> Carbon::yesterday(),

					],
        			[
        				'title' 				=> 'Welke afstanden kunnen er worden gelopen?',
        				'slug' 					=> str_slug('Welke afstanden kunnen er worden gelopen?', '-'),
        				'content' 				=> '
        				<p>
        				Wij hebben 4 afstanden:
        				<ul>
							<li>
							2,5 km
							</li>
							<li>
							5 km
							</li>
							<li>
							7,5 km
							</li>
							<li>
							10 km
							</li>
						</ul>
        				</p>',
        				'description'	 			=> 'Wat zijn de afstanden?',
        				'web_order' 			=> 6,
        				'faq_categorie_id' 		=> 1,
        				'draft' 				=> 1,
        				'author' 				=> 6,
        				'author_group' 			=> 'Boardmember',
        				'author_approve' 		=> 1,
        				'editor' 				=> 6,
        				'editor_group' 			=> 'Boardmember',
        				'editor_approve' 		=> 1,
        				'publisher' 			=> 6,
        				'publisher_group' 		=> 'Boardmember',
        				'publisher_approve' 	=> 1,
        				'publish_date_start' 	=> Carbon::now(),
        				'publish_date_end' 		=> Carbon::yesterday(),

					],
        			[
        				'title' 				=> 'Hoe oud moet je zijn?',
        				'slug' 					=> str_slug('Hoe oud moet je zijn?', '-'),
        				'content' 			=> '
        				<p>
        				Voor onze afstanden hebben we wel regels voor wat betreft de afstanden. 
        				Hieronder de regels per afstand.
        				<ul>
        					<li>
        						<b>2,5 km :</b> Voor deze afstand geldt geen leeftijd. 
        						Van jong tot oud mag je jezelf op deze afstand inschrijven.
							</li>
							<li>
								<b>5 km :</b> Voor deze afstand geldt geen leeftijd. 
								Van jong tot oud mag je jezelf op deze afstand inschrijven.
							</li>
							<li>
								<b>7,5 km :</b> De minimum leeftijd voor deze afstand is 12 jaar. 
								Echter zit hier dan wel de voorwaarde aan dat dit onder begeleiding van een volwassene is. 
								Vanaf de leeftijd van 16 jaar mag deze afstand zelfstandig gelopen worden.
							</li>
							<li>
								<b>10 km :</b> De minimum leeftijd voor deze afstand is 12 jaar. 
								Echter zit hier dan wel de voorwaarde aan dat dit onder begeleiding van een volwassene is. 
								Vanaf de leeftijd van 16 jaar mag deze afstand zelfstandig gelopen worden.
							</li>
						</ul>
						I.v.m. de minimum leeftijd en de begeleiding op de "lange" afstanden kan er bij twijfel gevraagd worden om te legitimeren op leeftijd.

        				</p>',
        				'description'	 			=> 'De leeftijden per afstand uitgewerkt',
        				'web_order' 			=> 7,
        				'faq_categorie_id' 		=> 1,
        				'draft' 				=> 1,
        				'author' 				=> 6,
        				'author_group' 			=> 'Boardmember',
        				'author_approve' 		=> 1,
        				'editor' 				=> 6,
        				'editor_group' 			=> 'Boardmember',
        				'editor_approve' 		=> 1,
        				'publisher' 			=> 6,
        				'publisher_group' 		=> 'Boardmember',
        				'publisher_approve' 	=> 1,
        				'publish_date_start' 	=> Carbon::now(),
        				'publish_date_end' 		=> Carbon::yesterday(),

					],


					[
						'title' 				=> 'Zoeken jullie nog extra mensen voor ondersteuning ?',
						'slug' 					=> str_slug('Zoeken jullie nog extra mensen voor ondersteuning ?', '-'),
						'content' 			=> '
        				<p>
        				We zijn altijd op zoek naar vrijwilligers. Hoe meer hoe liever want het is niet zo dat alle vrijwilligers ook elke dag kunnen. 
						Ook voor het bestuur en de werkgroepen zijn we op zoek naar ondersteuning. 
						Stuur ons een berichtje via de <a href="/contact" class="text-success">contactpagina</a> en we laten u de mogelijkheden weten.

        				</p>',
						'description'	 			=> 'Vrijwilligers gevraagd',
						'web_order' 			=> 1,
						'faq_categorie_id' 		=> 2,
						'draft' 				=> 1,
						'author' 				=> 6,
						'author_group' 			=> 'Boardmember',
						'author_approve' 		=> 1,
						'editor' 				=> 6,
						'editor_group' 			=> 'Boardmember',
						'editor_approve' 		=> 1,
						'publisher' 			=> 6,
						'publisher_group' 		=> 'Boardmember',
						'publisher_approve' 	=> 1,
						'publish_date_start' 	=> Carbon::now(),
						'publish_date_end' 		=> Carbon::yesterday(),

					],
					[
						'title' 				=> 'Hoeveel uur steken jullie in de organisatie ?',
						'slug' 					=> str_slug('Hoeveel uur steken jullie in de organisatie ?', '-'),
						'content' 			=> '
        				<p>
        				Dit is een vraag die bijna niet te beantwoorden is. 
						Gedurende het jaar zitten er al redelijk wat uren in maar in de week van de avondvierdaagse zijn we bijna fulltime bezig.
        				</p>',
						'description'	 			=> 'Hoeveel uur zijn we bezig met de organisatie.',
						'web_order' 			=> 2,
						'faq_categorie_id' 		=> 2,
						'draft' 				=> 1,
						'author' 				=> 6,
						'author_group' 			=> 'Boardmember',
						'author_approve' 		=> 1,
						'editor' 				=> 6,
						'editor_group' 			=> 'Boardmember',
						'editor_approve' 		=> 1,
						'publisher' 			=> 6,
						'publisher_group' 		=> 'Boardmember',
						'publisher_approve' 	=> 1,
						'publish_date_start' 	=> Carbon::now(),
						'publish_date_end' 		=> Carbon::yesterday(),

					],


					[
						'title' 				=> 'Wat is de start lokatie ?',
						'slug' 					=> str_slug('Wat is de start lokatie ?', '-'),
						'content' 			=> '
        				<p>
        					Al heel wat jaren is de start van het evenement op het PCP terrein Sportpark De lage Kant Noord. 
        					<br>
							Wij starten dagelijks van deze lokatie.
        				</p>',
						'description'	 			=> 'De start lokatie',
						'web_order' 			=> 1,
						'faq_categorie_id' 		=> 3,
						'draft' 				=> 1,
						'author' 				=> 6,
						'author_group' 			=> 'Boardmember',
						'author_approve' 		=> 1,
						'editor' 				=> 6,
						'editor_group' 			=> 'Boardmember',
						'editor_approve' 		=> 1,
						'publisher' 			=> 6,
						'publisher_group' 		=> 'Boardmember',
						'publisher_approve' 	=> 1,
						'publish_date_start' 	=> Carbon::now(),
						'publish_date_end' 		=> Carbon::yesterday(),

					],
					[
						'title' 				=> ' Wat zijn de starttijden ?',
						'slug' 					=> str_slug(' Wat zijn de starttijden ?', '-'),
						'content' 			=> '
        				<p>
        				In de starttijden zitten een aantal wisselingen, vandaar dat we hieronder even een opsomming maken:
        				<ul>
							<li>
								<b>Dinsdag : </b>
								Deze dag is de openingsdag en dan zouden wij het waarderen dat iedereen om 18.30 aanwezig is. 
								Wij starten dan nadat het welkomstwoord is gesproken.
							</li>
							<li>
								<b>Woensdag :</b>
								Starten tussen 18.30 en 19.00
							</li>
							<li>
								<b>Donderdag :</b>
								Starten tussen 18.30 en 19.00
							</li>
							<li>
								<b>Vrijdag :</b>
								Op deze dag is de huldiging van de gelopen avondvierdaagse. 
								Om ervoor te zorgen dat alle afstanden op een gelijk moment bij de finish aankomen hebben we op deze dag verschillende starttijden.
								<ul>
									<li>
										<b>2,5 km :</b>
										Deze afstand start om 19.30
									</li>
									<li>
										<b>5 km :</b>
										Deze afstand start om 18.30
									</li>
									<li>
										<b>7,5 km :</b>
										Deze afstand start om 18.15
									</li>
									<li>
										<b>10 km :</b>
										Deze afstand start om 18.00
									</li>
								</ul>
							</li>
						</ul>
        				</p>',
						'description'	 			=> 'De starttijden voor de verschillende afstanden',
						'web_order' 			=> 2,
						'faq_categorie_id' 		=> 3,
						'draft' 				=> 1,
						'author' 				=> 6,
						'author_group' 			=> 'Boardmember',
						'author_approve' 		=> 1,
						'editor' 				=> 6,
						'editor_group' 			=> 'Boardmember',
						'editor_approve' 		=> 1,
						'publisher' 			=> 6,
						'publisher_group' 		=> 'Boardmember',
						'publisher_approve' 	=> 1,
						'publish_date_start' 	=> Carbon::now(),
						'publish_date_end' 		=> Carbon::yesterday(),

					],
					[
						'title' 				=> 'Wanneer en waar is de huldiging ?',
						'slug' 					=> str_slug('Wanneer en waar is de huldiging ?', '-'),
						'content' 			=> '
        				<p>
        				De huldiging vindt jaarlijks plaats bij PCP. De lokatie van waar we ook de start hebben. 
						We plannen het zo, dat de officiële binnenkomst`op vrijdag om 20.00 uur is.
        				</p>',
						'description'	 			=> 'De huldiging',
						'web_order' 			=> 3,
						'faq_categorie_id' 		=> 3,
						'draft' 				=> 1,
						'author' 				=> 6,
						'author_group' 			=> 'Boardmember',
						'author_approve' 		=> 1,
						'editor' 				=> 6,
						'editor_group' 			=> 'Boardmember',
						'editor_approve' 		=> 1,
						'publisher' 			=> 6,
						'publisher_group' 		=> 'Boardmember',
						'publisher_approve' 	=> 1,
						'publish_date_start' 	=> Carbon::now(),
						'publish_date_end' 		=> Carbon::yesterday(),

					],
					[
						'title' 				=> 'Waar is het verzamelpunt ?',
						'slug' 					=> str_slug('Waar is het verzamelpunt ?', '-'),
						'content' 			=> '
        				<p>
        				Het verzamelpunt, op de slotavond, wisselt jaarlijks. 
        				Als organisatie kunnen we wel met zekerheid zeggen dat de huldiging plaats vindt bij het PCP terrein. 
        				Voor onze deelnemers zou het geweldig zijn wanneer hier een grote haag van mensen gevormd wordt
        				 voor de ontvangst en huldiging van onze deelnemers. 
        				 Vanuit het verzamelpunt lopen wij hier altijd naar toe
        				</p>',
						'description'	 			=> 'Verzamelpunt op de laatste dag',
						'web_order' 			=> 4,
						'faq_categorie_id' 		=> 3,
						'draft' 				=> 1,
						'author' 				=> 6,
						'author_group' 			=> 'Boardmember',
						'author_approve' 		=> 1,
						'editor' 				=> 6,
						'editor_group' 			=> 'Boardmember',
						'editor_approve' 		=> 1,
						'publisher' 			=> 6,
						'publisher_group' 		=> 'Boardmember',
						'publisher_approve' 	=> 1,
						'publish_date_start' 	=> Carbon::now(),
						'publish_date_end' 		=> Carbon::yesterday(),

					],
					[
						'title' 				=> 'Moet ik me melden voor de start ?',
						'slug' 					=> str_slug('Moet ik me melden voor de start ?', '-'),
						'content' 			=> '
        				<p>
        				U moet zich te allen tijde melden voor de start. 
        				Bij het melden ontvangt u een knipkaart. 
        				Op deze manier is het voor ons zichtbaar of alle deelnemers vertrokken zijn.
        				</p>',
						'description'	 			=> 'Melden bij start',
						'web_order' 			=> 5,
						'faq_categorie_id' 		=> 3,
						'draft' 				=> 1,
						'author' 				=> 6,
						'author_group' 			=> 'Boardmember',
						'author_approve' 		=> 1,
						'editor' 				=> 6,
						'editor_group' 			=> 'Boardmember',
						'editor_approve' 		=> 1,
						'publisher' 			=> 6,
						'publisher_group' 		=> 'Boardmember',
						'publisher_approve' 	=> 1,
						'publish_date_start' 	=> Carbon::now(),
						'publish_date_end' 		=> Carbon::yesterday(),

					],
					[
						'title' 				=> 'Moet ik me dan ook afmelden en waarom dan ?',
						'slug' 					=> str_slug('Moet ik me dan ook afmelden en waarom dan ?', '-'),
						'content' 			=> '
        				<p>
        				Bij het afmelden levert u, uw knipkaart in. 
        				Op het moment dat einde binnenkomst is kunnen we zien wie de knipkaart niet ingeleverd hebben. 
        				Deze deelnemers kunnen we in eerste instantie telefonisch benaderen om te kijken of ze al binnen zijn geweest. 
        				Het kan natuurlijk altijd zo zijn dat ze vergeten zijn hun knipkaart in te leveren. 
        				Mocht het zo zijn dat de deelnemer door omstandigheden niet binnen is gekomen dan kunnen we altijd kijken hoe we tot een oplossing kunnen komen.
        				</p>',
						'description'	 			=> 'Afmelden bij binnenkomst',
						'web_order' 			=> 6,
						'faq_categorie_id' 		=> 3,
						'draft' 				=> 1,
						'author' 				=> 6,
						'author_group' 			=> 'Boardmember',
						'author_approve' 		=> 1,
						'editor' 				=> 6,
						'editor_group' 			=> 'Boardmember',
						'editor_approve' 		=> 1,
						'publisher' 			=> 6,
						'publisher_group' 		=> 'Boardmember',
						'publisher_approve' 	=> 1,
						'publish_date_start' 	=> Carbon::now(),
						'publish_date_end' 		=> Carbon::yesterday(),

					],
					[
						'title' 				=> 'Bij wie ligt de verantwoordelijkheid tijdens het evenement ?',
						'slug' 					=> str_slug('Bij wie ligt de verantwoordelijkheid tijdens het evenement ?', '-'),
						'content' 			=> '
        				<p>
        				Deelname aan het evenement is altij op eigen risico. 
						Als organisatie proberen wij de situaties zo veilig mogelijk te maken. 
						Het is ook van groot belang om de aanwijzingen van de organisatie op te lopen. 
						Onze verkeersregelaars zijn er om te zorgen voor een veilige oversteek.
        				</p>',
						'description'	 			=> 'Evenement is voor eigen risico',
						'web_order' 			=> 7,
						'faq_categorie_id' 		=> 3,
						'draft' 				=> 1,
						'author' 				=> 6,
						'author_group' 			=> 'Boardmember',
						'author_approve' 		=> 1,
						'editor' 				=> 6,
						'editor_group' 			=> 'Boardmember',
						'editor_approve' 		=> 1,
						'publisher' 			=> 6,
						'publisher_group' 		=> 'Boardmember',
						'publisher_approve' 	=> 1,
						'publish_date_start' 	=> Carbon::now(),
						'publish_date_end' 		=> Carbon::yesterday(),

					],
					[
						'title' 				=> 'Is het toegestaan om een baby mee te nemen in een kinderwagen ?',
						'slug' 					=> str_slug('Is het toegestaan om een baby mee te nemen in een kinderwagen ?', '-'),
						'content' 			=> '
        				<p>
        				Er zijn voor de korte afstanden geen restricties op de leeftijden. 
						Het is dus toegestaan om kleine en zeer kleine kinderen mee te nemen met ondersteuning van een kinderwagen of buggy.
        				</p>',
						'description'	 			=> 'Kinderen in buggy\'s of kinderwagens.',
						'web_order' 			=> 8,
						'faq_categorie_id' 		=> 3,
						'draft' 				=> 1,
						'author' 				=> 6,
						'author_group' 			=> 'Boardmember',
						'author_approve' 		=> 1,
						'editor' 				=> 6,
						'editor_group' 			=> 'Boardmember',
						'editor_approve' 		=> 1,
						'publisher' 			=> 6,
						'publisher_group' 		=> 'Boardmember',
						'publisher_approve' 	=> 1,
						'publish_date_start' 	=> Carbon::now(),
						'publish_date_end' 		=> Carbon::yesterday(),

					],
					[
						'title' 				=> 'Hoe kom ik aan mijn route ?',
						'slug' 					=> str_slug('Hoe kom ik aan mijn route ?', '-'),
						'content' 			=> '
        				<p>
        				Wanneer de starttijd is aangebroken staan er vrijwilligers klaar met de routes. 
        				Iedere vrijwilliger zal een eigen afstand hebben.
        				</p>',
						'description'	 			=> 'Route informatie',
						'web_order' 			=> 9,
						'faq_categorie_id' 		=> 3,
						'draft' 				=> 1,
						'author' 				=> 6,
						'author_group' 			=> 'Boardmember',
						'author_approve' 		=> 1,
						'editor' 				=> 6,
						'editor_group' 			=> 'Boardmember',
						'editor_approve' 		=> 1,
						'publisher' 			=> 6,
						'publisher_group' 		=> 'Boardmember',
						'publisher_approve' 	=> 1,
						'publish_date_start' 	=> Carbon::now(),
						'publish_date_end' 		=> Carbon::yesterday(),

					],
					[
						'title' 				=> 'Kan ik de route ook digitaal lopen ?',
						'slug' 					=> str_slug('Kan ik de route ook digitaal lopen ?', '-'),
						'content' 			=> '
        				<p>
        				 Ja dit is mogelijk. De routes worden beschikbaar gesteld via de website <a href="afstandmeten.nl" class="text-success">afstandmeten.nl</a>. 
        				 De inlog gegevens worden per dag bij de start verstrekt.
        				</p>',
						'description'	 			=> 'Digitale route',
						'web_order' 			=> 10,
						'faq_categorie_id' 		=> 3,
						'draft' 				=> 1,
						'author' 				=> 6,
						'author_group' 			=> 'Boardmember',
						'author_approve' 		=> 1,
						'editor' 				=> 6,
						'editor_group' 			=> 'Boardmember',
						'editor_approve' 		=> 1,
						'publisher' 			=> 6,
						'publisher_group' 		=> 'Boardmember',
						'publisher_approve' 	=> 1,
						'publish_date_start' 	=> Carbon::now(),
						'publish_date_end' 		=> Carbon::yesterday(),

					],
					[
						'title' 				=> 'Wie moet er in noodgevallen benaderd worden ?',
						'slug' 					=> str_slug('Wie moet er in noodgevallen benaderd worden ?', '-'),
						'content' 			=> '
        				<p>
        				Op het routeformulier staat altijd het nummer vermeld van de calamiteiten persoon.
        				</p>',
						'description'	 			=> 'Nood nummer',
						'web_order' 			=> 11,
						'faq_categorie_id' 		=> 3,
						'draft' 				=> 1,
						'author' 				=> 6,
						'author_group' 			=> 'Boardmember',
						'author_approve' 		=> 1,
						'editor' 				=> 6,
						'editor_group' 			=> 'Boardmember',
						'editor_approve' 		=> 1,
						'publisher' 			=> 6,
						'publisher_group' 		=> 'Boardmember',
						'publisher_approve' 	=> 1,
						'publish_date_start' 	=> Carbon::now(),
						'publish_date_end' 		=> Carbon::yesterday(),

					],
					[
						'title' 				=> 'Het lukt me niet om alle dagen mee te doen. Krijg ik nu wel een medaille ?',
						'slug' 					=> str_slug('Het lukt me niet om alle dagen mee te doen. Krijg ik nu wel een medaille ?', '-'),
						'content' 			=> '
        				<p>
        				Er zijn altijd momenten dat het niet lukt om alle dagen aanwezig te zijn. 
        				Wij houden hier altijd rekening mee en u kunt op de laatste dag gewoon een medaille in ontvangst nemen.
        				</p>',
						'description'	 			=> 'Niet alle dagen dan wel een medaille?',
						'web_order' 			=> 12,
						'faq_categorie_id' 		=> 3,
						'draft' 				=> 1,
						'author' 				=> 6,
						'author_group' 			=> 'Boardmember',
						'author_approve' 		=> 1,
						'editor' 				=> 6,
						'editor_group' 			=> 'Boardmember',
						'editor_approve' 		=> 1,
						'publisher' 			=> 6,
						'publisher_group' 		=> 'Boardmember',
						'publisher_approve' 	=> 1,
						'publish_date_start' 	=> Carbon::now(),
						'publish_date_end' 		=> Carbon::yesterday(),

					],
					[
						'title' 				=> 'Wat gebeurt er bij slecht weer ?',
						'slug' 					=> str_slug('t gebeurt er bij slecht weer ?', '-'),
						'content' 			=> '
        				<p>
        				Als organisatie houden wij alle kanalen in de gaten. 
        				Weer radar, nieuwsberichten maar de belangrijkste is nog wel de informatie vanuit de politie en gemeente. 
        				Wij proberen zo lang mogelijk te wachten met een beslissing te nemen bij slecht weer om er maar voor te 
        				zorgen dat we met plezier dit gezellige evenement af kunnen maken. 
        				Houdt tijdens de avondvierdaagse week onze website en onze social media kanalen in de gaten.
        				</p>',
						'description'	 			=> 'Slecht weer, en nu?',
						'web_order' 			=> 13,
						'faq_categorie_id' 		=> 3,
						'draft' 				=> 1,
						'author' 				=> 6,
						'author_group' 			=> 'Boardmember',
						'author_approve' 		=> 1,
						'editor' 				=> 6,
						'editor_group' 			=> 'Boardmember',
						'editor_approve' 		=> 1,
						'publisher' 			=> 6,
						'publisher_group' 		=> 'Boardmember',
						'publisher_approve' 	=> 1,
						'publish_date_start' 	=> Carbon::now(),
						'publish_date_end' 		=> Carbon::yesterday(),

					],
					[
						'title' 				=> 'De afstand die we gekozen hebben blijkt te lang voor mijn zoon / dochter. Kunnen wij van afstand wisselen ?',
						'slug' 					=> str_slug('De afstand die we gekozen hebben blijkt te lang voor mijn zoon / dochter. Kunnen wij van afstand wisselen ?', '-'),
						'content' 			=> '
        				<p>
        				Wanneer u zich voor de start meldt bij het secretariaat kunnen we uw inschrijving zo omzetten. 
						Het zou jammer zijn wanneer uw zoon / dochter het plezier verliest in de avondvierdaagse doordat 
						bij de inschrijving voor een verkeerde afstand gekozen is.
        				</p>',
						'description'	 			=> 'Gekozen afstand blijkt te lang',
						'web_order' 			=> 14,
						'faq_categorie_id' 		=> 3,
						'draft' 				=> 1,
						'author' 				=> 6,
						'author_group' 			=> 'Boardmember',
						'author_approve' 		=> 1,
						'editor' 				=> 6,
						'editor_group' 			=> 'Boardmember',
						'editor_approve' 		=> 1,
						'publisher' 			=> 6,
						'publisher_group' 		=> 'Boardmember',
						'publisher_approve' 	=> 1,
						'publish_date_start' 	=> Carbon::now(),
						'publish_date_end' 		=> Carbon::yesterday(),

					],


					[
						'title' 				=> 'Wat gebeurd er met de persoonlijke gegevens, van de deelnemers, die bij de inschrijving worden gebruikt ?',
						'slug' 					=> str_slug('Wat gebeurd er met de persoonlijke gegevens, van de deelnemers, die bij de inschrijving worden gebruikt ?', '-'),
						'content' 			=> '
        				<p>
        				De informatie wordt tijdens het evenment gebruikt om te achterhalen wie de betreffende deelnemer is mochten er problemen zijn. 
        				Het zou zomaar kunnen gebeuren dat er iemand verdwaald of te laat binnen is. 
        				Aan de hand van de informatie welke is gegeven bij de inschrijving kunnen wij direct contact zoeken. 
        				<br>
        				<br>
        				De gegevens worden zo spoedig mogelijk, tot uiterlijk 1 week, na het evenement vernietigd.
        				</p>',
						'description'	 			=> '',
						'web_order' 			=> 1,
						'faq_categorie_id' 		=> 4,
						'draft' 				=> 1,
						'author' 				=> 6,
						'author_group' 			=> 'Boardmember',
						'author_approve' 		=> 1,
						'editor' 				=> 6,
						'editor_group' 			=> 'Boardmember',
						'editor_approve' 		=> 1,
						'publisher' 			=> 6,
						'publisher_group' 		=> 'Boardmember',
						'publisher_approve' 	=> 1,
						'publish_date_start' 	=> Carbon::now(),
						'publish_date_end' 		=> Carbon::yesterday(),

					],
					[
						'title' 				=> 'Wat gebeurd er met de foto\'s gemaakt tijdens het evenement ?',
						'slug' 					=> str_slug('Wat gebeurd er met de foto\'s gemaakt tijdens het evenement ?', '-'),
						'content' 			=> '
        				<p>
        				
                                Bij de inschrijving heef u een akkoord gegeven voor gebruik op social media en website.
                                Mocht er echter onverhoopt een foto geplaatst zijn waarvoor geen toestemming is gegeven,
                                laat ons dit dan weten via het <a href="/contact" class="text-success">contactformulier</a>.
                                Wij zullen er dan voor zorgen dat de betreffende foto zo spoedig mogelijk wordt verwijderd.
        				</p>',
						'description'	 			=> 'Wat er met de foto\'s en videos gebeurd.',
						'web_order' 			=> 2,
						'faq_categorie_id' 		=> 4,
						'draft' 				=> 1,
						'author' 				=> 6,
						'author_group' 			=> 'Boardmember',
						'author_approve' 		=> 1,
						'editor' 				=> 6,
						'editor_group' 			=> 'Boardmember',
						'editor_approve' 		=> 1,
						'publisher' 			=> 6,
						'publisher_group' 		=> 'Boardmember',
						'publisher_approve' 	=> 1,
						'publish_date_start' 	=> Carbon::now(),
						'publish_date_end' 		=> Carbon::yesterday(),

					],

				];

		foreach ($faq as $key => $value) {
			Faq::create($value);
		}
    }
}
