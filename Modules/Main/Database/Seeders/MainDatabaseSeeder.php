<?php

namespace Modules\Main\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
use Modules\Main\Entities\Models\Main\TyParticipants;
use Modules\Main\Entities\Models\Main\TySponsors;
use Modules\Main\Entities\Models\Main\TyVolunteers;

class MainDatabaseSeeder extends Seeder
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

		$ty_volunteers = [

			[
				'title' 				=> 'Hier komt een bedankwoordje naar de vrijwilligers. ',
				'slug' 					=> str_slug('Hier komt een bedankwoordje naar de vrijwilligers', '-'),
				'description' 			=> 'Een bedankwoordje naar de vrijwilligers van de Avondvierdaagse Breda-oost',
				'content' 				=> '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et non ex maxima parte de tota iudicabis? Itaque ab his ordiamur. A mene tu? Duo Reges: constructio interrete. Bonum incolumis acies: misera caecitas. Non igitur bene. Et ais, si una littera commota sit, fore tota ut labet disciplina. Utilitatis causa amicitia est quaesita. Quid ergo hoc loco intellegit honestum? Dic in quovis conventu te omnia facere, ne doleas.</p>',
				'web_order' 			=> 0,
				'draft' 				=> 1,
				'author' 				=> 1,
				'author_group' 			=> 'Boardmembers',
				'author_approve' 		=> 1,
				'editor' 				=> 5,
				'editor_group' 			=> 'Boardmembers',
				'editor_approve' 		=> 1,
				'publisher' 			=> 6,
				'publisher_group' 		=> 'Boardmembers',
				'publisher_approve' 	=> 1,
				'publish_date_start' 	=> Carbon::now(),
				'publish_date_end' 		=> Carbon::yesterday(),
			],


		];
		foreach ($ty_volunteers as $key => $value) {
			TyVolunteers::create($value);
		}


		$ty_participants = [

			[
				'title' 				=> 'Hier komt een bedankwoordje naar de deelnemers. ',
				'slug' 					=> str_slug('Hier komt een bedankwoordje naar de deelnemers', '-'),
				'description' 			=> 'Een bedankwoordje naar de deelnemers van de Avondvierdaagse Breda-oost',
				'content' 				=> '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et non ex maxima parte de tota iudicabis? Itaque ab his ordiamur. A mene tu? Duo Reges: constructio interrete. Bonum incolumis acies: misera caecitas. Non igitur bene. Et ais, si una littera commota sit, fore tota ut labet disciplina. Utilitatis causa amicitia est quaesita. Quid ergo hoc loco intellegit honestum? Dic in quovis conventu te omnia facere, ne doleas.</p>',
				'web_order' 			=> 0,
				'draft' 				=> 1,
				'author' 				=> 1,
				'author_group' 			=> 'Boardmembers',
				'author_approve' 		=> 1,
				'editor' 				=> 5,
				'editor_group' 			=> 'Boardmembers',
				'editor_approve' 		=> 1,
				'publisher' 			=> 6,
				'publisher_group' 		=> 'Boardmembers',
				'publisher_approve' 	=> 1,
				'publish_date_start' 	=> Carbon::now(),
				'publish_date_end' 		=> Carbon::yesterday(),
			],


		];
		foreach ($ty_participants as $key => $value) {
			TyParticipants::create($value);
		}

		$ty_sponsors = [

			[
				'title' 				=> 'Hier komt een bedankwoordje naar de sponsors. ',
				'slug' 					=> str_slug('Hier komt een bedankwoordje naar de sponsors', '-'),
				'description' 			=> 'Een bedankwoordje naar de sponsors van de Avondvierdaagse Breda-oost',
				'content' 				=> '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et non ex maxima parte de tota iudicabis? Itaque ab his ordiamur. A mene tu? Duo Reges: constructio interrete. Bonum incolumis acies: misera caecitas. Non igitur bene. Et ais, si una littera commota sit, fore tota ut labet disciplina. Utilitatis causa amicitia est quaesita. Quid ergo hoc loco intellegit honestum? Dic in quovis conventu te omnia facere, ne doleas.</p>',
				'web_order' 			=> 0,
				'draft' 				=> 1,
				'author' 				=> 1,
				'author_group' 			=> 'Boardmembers',
				'author_approve' 		=> 1,
				'editor' 				=> 5,
				'editor_group' 			=> 'Boardmembers',
				'editor_approve' 		=> 1,
				'publisher' 			=> 6,
				'publisher_group' 		=> 'Boardmembers',
				'publisher_approve' 	=> 1,
				'publish_date_start' 	=> Carbon::now(),
				'publish_date_end' 		=> Carbon::yesterday(),
			],


		];
		foreach ($ty_sponsors as $key => $value) {
			TySponsors::create($value);
		}

    }
}
