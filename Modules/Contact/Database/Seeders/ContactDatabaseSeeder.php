<?php

namespace Modules\Contact\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Modules\Contact\Entities\Models\Main\ContactCategorie;
use Modules\Contact\Entities\Models\Main\ContactEmail;
use Modules\Contact\Entities\Models\Main\ContactSettings;

class ContactDatabaseSeeder extends Seeder
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

		$contact_settings =	[
								[
									'name' 				=> 'show_map',
									'slug' 				=> str_slug('show_map', '-'),
									'description'		=> 'Laat de kaart zien',
									'value_bool'		=> 1,
								],
								[
									'name' 				=> 'map_latitude',
									'slug' 				=> str_slug('map_latitude', '-'),
									'description'		=> 'De breedtegraad op de kaart',
									'value_int'			=> 51.58659,
								],
								[
									'name' 				=> 'map_longitude',
									'slug' 				=> str_slug('map_longitude', '-'),
									'description'		=> 'De lengtegraad op de kaart',
									'value_int'			=> 4.81051,
								],
								[
									'name' 				=> 'map_zoom_level',
									'slug' 				=> str_slug('map_zoom_level', '-'),
									'description'		=> 'Op welk niveau moet er gestart worden met inzoomen',
									'value_int'			=> 15.25,
								],
								[
									'name' 				=> 'map_max_zoom_level',
									'slug' 				=> str_slug('map_max_zoom_level', '-'),
									'description'		=> 'Maximaal in te zoomen tot ingestelde waarde met een max van 18',
									'value_int'			=> 18,
								],
								[
									'name' 				=> 'show_board',
									'slug' 				=> str_slug('show_board', '-'),
									'description'		=> 'Laten we de contact gegevens van de bestuursleden zien ?',
									'value_bool'		=> 1,
								],
								[
									'name' 				=> 'show_president',
									'slug' 				=> str_slug('show_president', '-'),
									'description'		=> 'Laten we de contact gegevens van de voorzitter zien ?',
									'value_bool'		=> 1,
								],
								[
									'name' 				=> 'show_secretary',
									'slug' 				=> str_slug('show_secretary', '-'),
									'description'		=> 'Laten we de contact gegevens van de secretaris zien ?',
									'value_bool'		=> 1,
								],
								[
									'name' 				=> 'show_treasurer',
									'slug' 				=> str_slug('show_treasurer', '-'),
									'description'		=> 'Laten we de contact gegevens van de penningmeester zien ?',
									'value_bool'		=> 1,
								],
								[
									'name' 				=> 'show_contact_form',
									'slug' 				=> str_slug('show_contact_form', '-'),
									'description'		=> 'Laten we het contact formulier zien ?',
									'value_bool'		=> 1,
								],

							];

		foreach ($contact_settings as $key => $value)
			{
				ContactSettings::create($value);
			}


		$contact_categorie = [
								[
									'name' 				=> 'Inschrijven',
									'slug' 				=> str_slug('Inschrijven', '-'),
									'description'		=> 'Vraag over de inschrijvingen', // Nullable
									'web_order'			=> 1,
									'publisher_approve'	=> 1,
								],
								[
									'name' 				=> 'Deelname',
									'slug' 				=> str_slug('Deelname', '-'),
									'description'		=> 'Vraag over de deelname', // Nullable
									'web_order'			=> 2,
									'publisher_approve'	=> 1,
								],
								[
									'name' 				=> 'De organisatie',
									'slug' 				=> str_slug('De organisatie', '-'),
									'description'		=> 'Vraag over de organisatie', // Nullable
									'web_order'			=> 3,
									'publisher_approve'	=> 1,
								],
								[
									'name' 				=> 'Vrijwilligers',
									'slug' 				=> str_slug('Vrijwilligers', '-'),
									'description'		=> 'Vraag over de vrijwilligers', // Nullable
									'web_order'			=> 4,
									'publisher_approve'	=> 1,
								],
								[
									'name' 				=> 'Verkeersregelaars',
									'slug' 				=> str_slug('Verkeersregelaars', '-'),
									'description'		=> 'Vraag over de vrekeersregelaars', // Nullable
									'web_order'			=> 5,
									'publisher_approve'	=> 1,
								],
								[
									'name' 				=> 'EHBO',
									'slug' 				=> str_slug('EHBO', '-'),
									'description'		=> 'Vraag over de EHBO', // Nullable
									'web_order'			=> 6,
									'publisher_approve'	=> 1,
								],
								[
									'name' 				=> 'Sponsoring',
									'slug' 				=> str_slug('Sponsoring', '-'),
									'description'		=> 'Vraag over de sponsoring', // Nullable
									'web_order'			=> 7,
									'publisher_approve'	=> 1,
								],
								[
									'name' 				=> 'AVG',
									'slug' 				=> str_slug('AVG', '-'),
									'description'		=> 'Vraag over de AVG', // Nullable
									'web_order'			=> 8,
									'publisher_approve'	=> 1,
								],
								[
									'name' 				=> 'Overige vragen',
									'slug' 				=> str_slug('Overige vragen', '-'),
									'description'		=> 'Overige vraag', // Nullable
									'web_order'			=> 9,
									'publisher_approve'	=> 1,
								],
							];

		foreach ($contact_categorie as $key => $value)
			{
				ContactCategorie::create($value);
			}



		$contact_email = [
							[
//								id = 1
								'name' => 'Voorzitter Avondvierdaagse Breda-oost',
								'slug' => str_slug('Voorzitter Avondvierdaagse Breda-oost', '-'),
								'description' => '',
								'email' => 'voorzitter.a4dbredaoost@gmail.com',
								'secret' => encrypt(env('GMAIL_PASSWORD_PRESIDENT'))
							],
							[
//								id = 2
								'name' => 'Vice-Voorzittter Avondvierdaagse Breda-oost',
								'slug' => str_slug('Vice-Voorzittter Avondvierdaagse Breda-oost', '-'),
								'description' => '',
								'email' => 'vicevoorzitter.a4dbredaoost@gmail.com',
								'secret' => encrypt(env('GMAIL_PASSWORD_VICEPRESIDENT'))
							],
							[
//								id = 3
								'name' => 'Penningmeester Avondvierdaagse Breda-oost',
								'slug' => str_slug('Penningmeester Avondvierdaagse Breda-oost', '-'),
								'description' => '',
								'email' => 'penningmeester.a4dbredaoost@gmail.com',
								'secret' => encrypt(env('GMAIL_PASSWORD_TREASURER'))
							],
							[
//								id = 4
								'name' => 'Secretaris Avondvierdaagse Breda-oost',
								'slug' => str_slug('Secretaris Avondvierdaagse Breda-oost', '-'),
								'description' => '',
								'email' => 'secretaris.a4dbredaoost@gmail.com',
								'secret' => encrypt(env('GMAIL_PASSWORD_SECRETARY'))
							],
							[
//								id = 5
								'name' => 'Commisaris Avondvierdaagse Breda-oost',
								'slug' => str_slug('Commisaris Avondvierdaagse Breda-oost', '-'),
								'description' => '',
								'email' => 'commisaris.a4dbredaoost@gmail.com',
								'secret' => encrypt(env('GMAIL_PASSWORD_COMMISSIONER'))
							],
							[
//								id = 6
								'name' => 'Board Avondvierdaagse Breda-oost',
								'slug' => str_slug('Board Avondvierdaagse Breda-oost', '-'),
								'description' => '',
								'email' => 'bestuur.a4dbredaoost@gmail.com',
								'secret' => encrypt(env('GMAIL_PASSWORD_BOARD'))
							],
							[
//								id = 7
								'name' => 'Social Media Avondvierdaagse Breda-oost',
								'slug' => str_slug('Social Media Avondvierdaagse Breda-oost', '-'),
								'description' => '',
								'email' => 'socialmedia.a4dbredaoost@gmail.com',
								'secret' => encrypt(env('GMAIL_PASSWORD_SOCIALMEDIA'))
							],
							[
//								id = 8
								'name' => 'Sponsoren Avondvierdaagse Breda-oost',
								'slug' => str_slug('Sponsoren Avondvierdaagse Breda-oost', '-'),
								'description' => '',
								'email' => 'sponsors.a4dbredaoost@gmail.com',
								'secret' => encrypt(env('GMAIL_PASSWORD_SPONSORS'))
							],
							[
//								id = 9
								'name' => 'Vrijwilligers Avondvierdaagse Breda-oost',
								'slug' => str_slug('Vrijwilligers Avondvierdaagse Breda-oost', '-'),
								'description' => '',
								'email' => 'vrijwilligers.a4dbredaoost@gmail.com',
								'secret' => encrypt(env('GMAIL_PASSWORD_VOLUNTEERS'))
							],
							[
//								id = 10
								'name' => 'Organisatie Avondvierdaagse Breda-oost',
								'slug' => str_slug('Organisatie Avondvierdaagse Breda-oost', '-'),
								'description' => '',
								'email' => 'organisatie.a4dbredaoost@gmail.com',
								'secret' => encrypt(env('GMAIL_PASSWORD_ORGANISATION'))
							],
							[
//								id = 11
								'name' => 'Webmaster Avondvierdaagse Breda-oost',
								'slug' => str_slug('Webmaster Avondvierdaagse Breda-oost', '-'),
								'description' => '',
								'email' => 'webmaster.a4dbredaoost@gmail.com',
								'secret' => encrypt(env('GMAIL_PASSWORD_WEBMASTER'))
							],
							[
//								id = 12
								'name' => 'Routes Avondvierdaagse Breda-oost',
								'slug' => str_slug('Routes Avondvierdaagse Breda-oost', '-'),
								'description' => '',
								'email' => 'routes.a4dbredaoost@gmail.com',
								'secret' => encrypt(env('GMAIL_PASSWORD_ROUTES'))
							],
							[
//								id = 13
								'name' => 'Contact Avondvierdaagse Breda-oost',
								'slug' => str_slug('Contact Avondvierdaagse Breda-oost', '-'),
								'description' => '',
								'email' => 'contact.a4dbredaoost@gmail.com',
								'secret' => encrypt(env('GMAIL_PASSWORD_CONTACT'))
							],
							[
//								id = 14
								'name' => 'Info Avondvierdaagse Breda-oost',
								'slug' => str_slug('Info Avondvierdaagse Breda-oost', '-'),
								'description' => '',
								'email' => 'info.a4dbredaoost@gmail.com',
								'secret' => encrypt(env('GMAIL_PASSWORD_INFO'))
							],
							[
//								id = 15
								'name' => 'AVG Avondvierdaagse Breda-oost',
								'slug' => str_slug('AVG Avondvierdaagse Breda-oost', '-'),
								'description' => '',
								'email' => 'avg.a4dbredaoost@gmail.com',
								'secret' => encrypt(env('GMAIL_PASSWORD_AVG'))
							],
						];

		foreach ($contact_email as $key => $value)
			{
				ContactEmail::create($value);
			}


		$contact_pivot	=	[
								[
									'c_categorie_id'	=> 1,
									'c_email_id'		=> 10,

									'main_email'		=> 1,
									'blind_email'		=> 0,

									'created_at'		=> Carbon::now(),
									'updated_at'		=> Carbon::now(),
								],
								[
									'c_categorie_id'	=> 2,
									'c_email_id'		=> 10,

									'main_email'		=> 1,
									'blind_email'		=> 0,

									'created_at'		=> Carbon::now(),
									'updated_at'		=> Carbon::now(),
								],
								[
									'c_categorie_id'	=> 3,
									'c_email_id'		=> 10,

									'main_email'		=> 1,
									'blind_email'		=> 0,

									'created_at'		=> Carbon::now(),
									'updated_at'		=> Carbon::now(),
								],
								[
									'c_categorie_id'	=> 4,
									'c_email_id'		=> 9,

									'main_email'		=> 1,
									'blind_email'		=> 0,

									'created_at'		=> Carbon::now(),
									'updated_at'		=> Carbon::now(),
								],
								[
									'c_categorie_id'	=> 5,
									'c_email_id'		=> 9,

									'main_email'		=> 1,
									'blind_email'		=> 0,

									'created_at'		=> Carbon::now(),
									'updated_at'		=> Carbon::now(),
								],
								[
									'c_categorie_id'	=> 6,
									'c_email_id'		=> 9,

									'main_email'		=> 1,
									'blind_email'		=> 0,

									'created_at'		=> Carbon::now(),
									'updated_at'		=> Carbon::now(),
								],
								[
									'c_categorie_id'	=> 7,
									'c_email_id'		=> 8,

									'main_email'		=> 1,
									'blind_email'		=> 0,

									'created_at'		=> Carbon::now(),
									'updated_at'		=> Carbon::now(),
								],
								[
									'c_categorie_id'	=> 8,
									'c_email_id'		=> 15,

									'main_email'		=> 1,
									'blind_email'		=> 0,

									'created_at'		=> Carbon::now(),
									'updated_at'		=> Carbon::now(),
								],
								[
									'c_categorie_id'	=> 9,
									'c_email_id'		=> 14,

									'main_email'		=> 1,
									'blind_email'		=> 0,

									'created_at'		=> Carbon::now(),
									'updated_at'		=> Carbon::now(),
								],

		];

//		DB::table('contact_categorie_contact_email')->insert([$value]);

		foreach($contact_pivot as $key => $value){

			DB::table('contact_categorie_contact_email')->insert([$value]);

		}


    }
}
