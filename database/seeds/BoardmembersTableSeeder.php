<?php

use Illuminate\Database\Seeder;

use App\Models\Boardmember ;

class BoardmembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$boardmember = [
			[
				'name' => 'Frans-Willem van Hulst',
				'slug' => str_slug('Frans-Willem van Hulst'.time(), '-'),
				'email' => 'voorzitter.a4dbredaoost@gmail.com',
				'secondary_email' => '',
				'password' => bcrypt('welkom'),
				'address' => 'Jan huigenstraat 423',
				'postcode' => '1818XX',
				'city' => 'Woonplaats 1',
				'phone' => '06-87564321',
				'boardmember_title' => 'president',
				'dob' => '1960-03-15',
				'about_me' => '<p>Ik ben Frans-Willem van Hulst.
                Sinds 1984 ben ik woonachtig in de wijk Heusdenhout.
                Ik ben getrouwd en heb twee kinderen die beide ook al jaren
                betrokken zijn bij dit evenement.
                Al jarenlang ben ik actief betrokken in de wijk o.a ben
                ik voorzitter geweest van de wijkraad en oudercommissie
                van K.B.S de Weilust.
                Ook heb ik de tieneractiviteit toentertijd opgestart.
                Ik vind het fijn om actief en sociaal bezig te zijn in de wijk.
                </p>',
			],
			[
				'name' => 'Roy Mertens',
				'slug' => str_slug('Roy Mertens'.time(), '-'),
				'email' => 'vice-voorzitter.a4dbredaoost@gmail.com',
				'password' => bcrypt('welkom'),
				'boardmember_title' => 'vice-president',
			],
			[
				'name' => 'Mirjam Frijters',
				'slug' => str_slug('Mirjam Frijters'.time(), '-'),
				'email' => 'secretaris.a4dbredaoost@gmail.com',
				'password' => bcrypt('welkom'),
				'boardmember_title' => 'secretary',
			],
			[
				'name' => 'Micha van der Wiel',
				'slug' => str_slug('Micha van der Wiel'.time(), '-'),
				'email' => 'penningmeester.a4dbredaoost@gmail.com',
				'secondary_email' => '',
				'password' => bcrypt('welkom'),
				'address' => 'Zomaar een adres 1234',
				'postcode' => '4817 XX',
				'city' => 'Breda',
				'phone' => '06-12345678',
				'boardmember_title' => 'treasurer',
			],
			[
				'name' => 'Anke Verhagen',
				'slug' => str_slug('Anke Verhagen'.time(), '-'),
				'email' => 'sponsoring.a4dbredaoost@gmail.com',
				'secondary_email' => '',
				'password' => bcrypt('welkom'),
				'address' => 'Weilustlaan 1348',
				'postcode' => '4817 ZZ',
				'city' => 'Breda',
				'country' => 'Nederland',
				'phone' => '06-13974568',
				'boardmember_title' => 'member',
				'dob' => '1978-10-31',
				'about_me' => '<p>
								Mijn naam is Anke Verhagen en ik woon sinds 1993 samen met mijn partner
                in de wijk Heusdenhout. Samen hebben wij een zoon en dochter.
                Vanaf het eerste moment zijn wij allen actief betrokken bij dit wijkevenement.
                De meeste van jullie zullen mij beter herkennen als mascotte van de avondvierdaagse
                Breda-Oost. In verschillende creaties ben ik al voorbij komen wandelen.
                Naast dit evenement ben ik langere tijd actief geweest als voorzitter
                van de oudercommissie op K.B.S de Weilust en was ik actief lid van
                verschillende commissies binnen deze school.
                Ik vind het mooi om iets te kunnen betekenen voor onze wijk.
                Ik hoop hier nog een tijd een bijdrage aan te mogen leveren.
								</p>',
			],
			[
				'name' => 'Jeroen Tonnet',
				'slug' => str_slug('Member1 Organisation'.time(), '-'),
				'email' => 'bestuur.a4dbredaoost@gmail.com',
				'secondary_email' => '',
				'password' => bcrypt('welkom'),
				'address' => 'Weilustlaan 2134',
				'postcode' => '4817 ZZ',
				'city' => 'Breda',
				'country' => 'Nederland',
				'boardmember_title' => 'member',
				'dob' => '1978-10-31',
			],
			[
				'name' => 'Dennis Kuijpers',
				'slug' => str_slug('Dennis Kuijpers'.time(), '-'),
				'email' => 'webmaster.a4dbredaoost@gmail.com',
				'secondary_email' => 'dennis@test.nl',
				'password' => bcrypt('welkom'),
				'address' => 'Heusdenhoutesestraat 666',
				'postcode' => '4817 AA',
				'city' => 'Breda',
				'country' => 'Nederland',
				'phone' => '06-81735576',
				'boardmember_title' => 'member',
				'dob' => '1976-02-10',
				'about_me' => '<p>Zoals u al heeft gezien is mijn naam Dennis Kuijpers.
                Ik woon, met heel veel plezier, sinds 2014 in de wijk Heusdenhout.
                Samen met mijn vriendin Wendy heb ik 4 kinderen die altijd met veel pelzier deelnemen aan de a4d.
                Toen ik te horen kreeg dat er ondersteuning nodig was voor de organisatie heb ik mijzelf aangemeld.
                Voor de organisatie zal het meest actieve stuk voor mij zitten in de website.
                Mochten er vragen zijn over de website dan hoor ik ze graag.</p>',
			],
		];
		foreach ($boardmember as $key => $value) {
			Boardmember::create($value);
		}

    }
}
