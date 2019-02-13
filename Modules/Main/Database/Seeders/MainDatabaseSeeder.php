<?php

namespace Modules\Main\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
use Modules\Main\Entities\Models\Main\Spotlight;
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

//		$ty_volunteers = [
//
//			[
//				'title' 				=> 'Hier komt een bedankwoordje naar de vrijwilligers. ',
//				'slug' 					=> str_slug('Hier komt een bedankwoordje naar de vrijwilligers', '-'),
//				'description' 			=> 'Een bedankwoordje naar de vrijwilligers van de Avondvierdaagse Breda-oost',
//				'content' 				=> '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et non ex maxima parte de tota iudicabis? Itaque ab his ordiamur. A mene tu? Duo Reges: constructio interrete. Bonum incolumis acies: misera caecitas. Non igitur bene. Et ais, si una littera commota sit, fore tota ut labet disciplina. Utilitatis causa amicitia est quaesita. Quid ergo hoc loco intellegit honestum? Dic in quovis conventu te omnia facere, ne doleas.</p>',
//				'web_order' 			=> 0,
//				'draft' 				=> 1,
//				'author' 				=> 1,
//				'author_group' 			=> 'Boardmember',
//				'author_approve' 		=> 1,
//				'editor' 				=> 5,
//				'editor_group' 			=> 'Boardmember',
//				'editor_approve' 		=> 1,
//				'publisher' 			=> 6,
//				'publisher_group' 		=> 'Boardmember',
//				'publisher_approve' 	=> 1,
//				'publish_date_start' 	=> Carbon::now(),
//				'publish_date_end' 		=> Carbon::yesterday(),
//			],
//
//
//		];
//		foreach ($ty_volunteers as $key => $value) {
//			TyVolunteers::create($value);
//		}
//
//
//		$ty_participants = [
//
//			[
//				'title' 				=> 'Hier komt een bedankwoordje naar de deelnemers. ',
//				'slug' 					=> str_slug('Hier komt een bedankwoordje naar de deelnemers', '-'),
//				'description' 			=> 'Een bedankwoordje naar de deelnemers van de Avondvierdaagse Breda-oost',
//				'content' 				=> '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et non ex maxima parte de tota iudicabis? Itaque ab his ordiamur. A mene tu? Duo Reges: constructio interrete. Bonum incolumis acies: misera caecitas. Non igitur bene. Et ais, si una littera commota sit, fore tota ut labet disciplina. Utilitatis causa amicitia est quaesita. Quid ergo hoc loco intellegit honestum? Dic in quovis conventu te omnia facere, ne doleas.</p>',
//				'web_order' 			=> 0,
//				'draft' 				=> 1,
//				'author' 				=> 1,
//				'author_group' 			=> 'Boardmember',
//				'author_approve' 		=> 1,
//				'editor' 				=> 5,
//				'editor_group' 			=> 'Boardmember',
//				'editor_approve' 		=> 1,
//				'publisher' 			=> 6,
//				'publisher_group' 		=> 'Boardmember',
//				'publisher_approve' 	=> 1,
//				'publish_date_start' 	=> Carbon::now(),
//				'publish_date_end' 		=> Carbon::yesterday(),
//			],
//
//
//		];
//		foreach ($ty_participants as $key => $value) {
//			TyParticipants::create($value);
//		}
//
//		$ty_sponsors = [
//
//			[
//				'title' 				=> 'Hier komt een bedankwoordje naar de sponsors. ',
//				'slug' 					=> str_slug('Hier komt een bedankwoordje naar de sponsors', '-'),
//				'description' 			=> 'Een bedankwoordje naar de sponsors van de Avondvierdaagse Breda-oost',
//				'content' 				=> '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et non ex maxima parte de tota iudicabis? Itaque ab his ordiamur. A mene tu? Duo Reges: constructio interrete. Bonum incolumis acies: misera caecitas. Non igitur bene. Et ais, si una littera commota sit, fore tota ut labet disciplina. Utilitatis causa amicitia est quaesita. Quid ergo hoc loco intellegit honestum? Dic in quovis conventu te omnia facere, ne doleas.</p>',
//				'web_order' 			=> 0,
//				'draft' 				=> 1,
//				'author' 				=> 1,
//				'author_group' 			=> 'Boardmember',
//				'author_approve' 		=> 1,
//				'editor' 				=> 5,
//				'editor_group' 			=> 'Boardmember',
//				'editor_approve' 		=> 1,
//				'publisher' 			=> 6,
//				'publisher_group' 		=> 'Boardmember',
//				'publisher_approve' 	=> 1,
//				'publish_date_start' 	=> Carbon::now(),
//				'publish_date_end' 		=> Carbon::yesterday(),
//			],
//
//
//		];
//		foreach ($ty_sponsors as $key => $value) {
//			TySponsors::create($value);
//		}

		$spotlight = [

			[
				'title' 				=> 'Roha Shop Breda. ',
				'slug' 					=> str_slug('Roha Shop Breda', '-'),
				'description' 			=> 'Wie zetten we in de spotlight',
				'content' 				=> '<p>
														Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
														sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
														Blandit libero volutpat sed cras ornare arcu dui vivamus. 
														Neque aliquam vestibulum morbi blandit cursus risus at. 
														A erat nam at lectus urna duis. Cursus metus aliquam eleifend mi in nulla posuere sollicitudin. 
														Eu turpis egestas pretium aenean pharetra magna ac placerat vestibulum. 
														Ridiculus mus mauris vitae ultricies. Donec ultrices tincidunt arcu non sodales. 
														Eu non diam phasellus vestibulum lorem sed risus ultricies tristique. 
														Sit amet purus gravida quis blandit turpis cursus in. 
														Amet aliquam id diam maecenas. Ornare aenean euismod elementum nisi quis. 
														Blandit turpis cursus in hac habitasse platea. 
														Sit amet mauris commodo quis. Purus ut faucibus pulvinar elementum integer. 
														Ante in nibh mauris cursus mattis molestie a iaculis. 
														Mattis pellentesque id nibh tortor id aliquet lectus proin nibh.
													</p>
													<p>
														Tincidunt id aliquet risus feugiat in. Mauris ultrices eros in cursus turpis massa tincidunt dui ut. 
														Imperdiet sed euismod nisi porta lorem. 
														Elit duis tristique sollicitudin nibh sit amet commodo nulla facilisi. 
														At tellus at urna condimentum mattis pellentesque id nibh tortor. 
														Nullam vehicula ipsum a arcu cursus vitae congue mauris rhoncus. 
														Consequat mauris nunc congue nisi vitae suscipit tellus mauris a. 
														Fermentum dui faucibus in ornare. Ultricies leo integer malesuada nunc vel risus commodo. 
														Pulvinar neque laoreet suspendisse interdum consectetur libero id. 
														Fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien nec. 
														Fringilla ut morbi tincidunt augue interdum.
													</p>
													<p>
														Venenatis cras sed felis eget velit aliquet sagittis id consectetur. 
														At imperdiet dui accumsan sit. Et odio pellentesque diam volutpat commodo sed egestas. 
														Vitae ultricies leo integer malesuada nunc vel. 
														Tellus at urna condimentum mattis pellentesque id nibh tortor id. 
														Orci sagittis eu volutpat odio facilisis mauris sit. 
														Ut tortor pretium viverra suspendisse potenti nullam ac. 
														Malesuada fames ac turpis egestas integer eget aliquet. 
														Amet volutpat consequat mauris nunc congue nisi vitae. 
														Enim tortor at auctor urna nunc id cursus metus. 
														Volutpat odio facilisis mauris sit amet massa vitae tortor. 
														Mauris cursus mattis molestie a iaculis at erat.
													</p>
													<p>
														Viverra justo nec ultrices dui. Purus sit amet volutpat consequat mauris nunc. 
														Sed faucibus turpis in eu mi bibendum neque egestas. 
														Suspendisse interdum consectetur libero id. Quis risus sed vulputate odio ut enim blandit. 
														Et ligula ullamcorper malesuada proin libero. Diam ut venenatis tellus in metus vulputate. 
														Eu tincidunt tortor aliquam nulla. Dignissim cras tincidunt lobortis feugiat vivamus at. 
														Commodo sed egestas egestas fringilla. Mattis enim ut tellus elementum sagittis vitae et leo. 
														Interdum posuere lorem ipsum dolor sit. 
														Sed risus pretium quam vulputate dignissim suspendisse in est. 
														Cursus in hac habitasse platea dictumst quisque sagittis purus sit.
													</p>
													<p>
														Quam elementum pulvinar etiam non quam.
														Lectus mauris ultrices eros in cursus turpis massa tincidunt dui. 
														Nisi scelerisque eu ultrices vitae auctor eu augue ut lectus. 
														Porttitor leo a diam sollicitudin tempor id eu nisl. Vel risus commodo viverra maecenas accumsan. 
														Urna et pharetra pharetra massa massa ultricies mi quis hendrerit. 
														Sed arcu non odio euismod lacinia at quis risus sed. Libero id faucibus nisl tincidunt. 
														Ut tristique et egestas quis ipsum suspendisse ultrices gravida. Quisque non tellus orci ac auctor. 
														Vivamus at augue eget arcu dictum varius duis at. 
														Arcu dictum varius duis at consectetur lorem donec. Urna porttitor rhoncus dolor purus. 
														Pellentesque nec nam aliquam sem et tortor consequat. Quis viverra nibh cras pulvinar mattis. 
														Enim eu turpis egestas pretium aenean pharetra. Nibh ipsum consequat nisl vel.
													</p>',
				'web_order' 			=> 0,
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
		foreach ($spotlight as $key => $value) {
			Spotlight::create($value);
		}

    }
}
