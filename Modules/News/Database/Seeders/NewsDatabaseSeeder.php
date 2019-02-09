<?php

namespace Modules\News\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\News\Entities\Models\Main\News;
use Modules\News\Entities\Models\Main\NewsCategorie;
use Modules\News\Entities\Models\Main\NewsImage;
use Modules\News\Entities\Models\Main\NewsSettings;
use Modules\News\Entities\Models\Main\NewsTag;

class NewsDatabaseSeeder extends Seeder
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


		$news_categorie = [
			[
				'name' 				=> 'Sponsoren',
				'slug' 					=> str_slug('Sponsoren', '-'),
			],
			[
				'name' 				=> 'Weer',
				'slug' 					=> str_slug('Weer', '-'),
			],
			[
				'name' 				=> 'A4D 2019',
				'slug' 					=> str_slug('A4D 2019', '-'),
			],
			[
				'name' 				=> 'De organisatie',
				'slug' 					=> str_slug('De organisatie', '-'),
			],


		];
		foreach ($news_categorie as $key => $value) {
			NewsCategorie::create($value);
		}


		$news_tag = [
			[
				'name' 				=> 'Humor',
				'slug' 					=> str_slug('Humor', '-'),
			],
			[
				'name' 				=> 'Foutje bedankt',
				'slug' 					=> str_slug('Foutje bedankt', '-'),
			],
			[
				'name' 				=> 'Dag 1',
				'slug' 					=> str_slug('Dag 1', '-'),
			],
			[
				'name' 				=> 'Dag 2',
				'slug' 					=> str_slug('Dag 2', '-'),
			],
			[
				'name' 				=> 'Dag 3',
				'slug' 					=> str_slug('Dag 3', '-'),
			],
			[
				'name' 				=> 'Dag 4',
				'slug' 					=> str_slug('Dag 4', '-'),
			],
			[
				'name' 				=> 'Bestuur',
				'slug' 					=> str_slug('Bestuur', '-'),
			],


		];
		foreach ($news_tag as $key => $value) {
			NewsTag::create($value);
		}



//		News comments


//		$news_comments = [
//							[
//								'name' 				=> 'Sponsoren',
//								'slug' 				=> str_slug('Sponsoren', '-'),
//							],
//
//
//						];
//		foreach ($news_comments as $key => $value) {
//			NewsCategorie::create($value);
//		}


//		News

		$news = [
					[
						'title' 				=> 'Post Title 1',
						'slug' 					=> str_slug('Post Title 1', '-'),
						'description' 			=> 'Test bericht',
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


						'news_categorie_id' 	=> '1',

						'draft' 				=> 1,

						'author' 				=> 1,
						'author_group' 			=> 'Boardmember',
						'author_approve' 		=> 1,

						'editor' 				=> 1,
						'editor_group' 			=> 'Boardmember',
						'editor_approve' 		=> 1,

						'publisher' 			=> 1,
						'publisher_group' 		=> 'Boardmember',
						'publisher_approve' 	=> 1,

						'publish_date_start'	=> Carbon::now(),
						'publish_date_end' 		=> Carbon::yesterday(),

						'created_at' 			=> Carbon::now(),
						'updated_at' 			=> Carbon::now(),
					],
					[
						'title' 				=> 'Post Title 2',
						'slug' 					=> str_slug('Post Title 2', '-'),
						'description' 			=> 'Test bericht',
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


						'news_categorie_id' 	=> '1',

						'draft' 				=> 1,

						'author' 				=> 1,
						'author_group' 			=> 'Boardmember',
						'author_approve' 		=> 1,

						'editor' 				=> 1,
						'editor_group' 			=> 'Boardmember',
						'editor_approve' 		=> 1,

						'publisher' 			=> 1,
						'publisher_group' 		=> 'Boardmember',
						'publisher_approve' 	=> 1,

						'publish_date_start'	=> Carbon::now(),
						'publish_date_end' 		=> Carbon::yesterday(),

						'created_at' 			=> Carbon::now(),
						'updated_at' 			=> Carbon::now(),
					],
					[
						'title' 				=> 'Post Title 3',
						'slug' 					=> str_slug('Post Title 3', '-'),
						'description' 			=> 'Test bericht',
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


						'news_categorie_id' 	=> '1',

						'draft' 				=> 1,

						'author' 				=> 1,
						'author_group' 			=> 'Boardmember',
						'author_approve' 		=> 1,

						'editor' 				=> 1,
						'editor_group' 			=> 'Boardmember',
						'editor_approve' 		=> 1,

						'publisher' 			=> 1,
						'publisher_group' 		=> 'Boardmember',
						'publisher_approve' 	=> 1,

						'publish_date_start'	=> Carbon::now(),
						'publish_date_end' 		=> Carbon::yesterday(),

						'created_at' 			=> Carbon::now(),
						'updated_at' 			=> Carbon::now(),
					],
					[
						'title' 				=> 'Post Title 4',
						'slug' 					=> str_slug('Post Title 4', '-'),
						'description' 			=> 'Test bericht',
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


						'news_categorie_id' 	=> '1',

						'draft' 				=> 1,

						'author' 				=> 1,
						'author_group' 			=> 'Boardmember',
						'author_approve' 		=> 1,

						'editor' 				=> 1,
						'editor_group' 			=> 'Boardmember',
						'editor_approve' 		=> 1,

						'publisher' 			=> 1,
						'publisher_group' 		=> 'Boardmember',
						'publisher_approve' 	=> 1,

						'publish_date_start'	=> Carbon::now(),
						'publish_date_end' 		=> Carbon::yesterday(),

						'created_at' 			=> Carbon::now(),
						'updated_at' 			=> Carbon::now(),
					],
					[
						'title' 				=> 'Post Title 5',
						'slug' 					=> str_slug('Post Title 5', '-'),
						'description' 			=> 'Test bericht',
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


						'news_categorie_id' 	=> '1',

						'draft' 				=> 1,

						'author' 				=> 1,
						'author_group' 			=> 'Boardmember',
						'author_approve' 		=> 1,

						'editor' 				=> 1,
						'editor_group' 			=> 'Boardmember',
						'editor_approve' 		=> 1,

						'publisher' 			=> 1,
						'publisher_group' 		=> 'Boardmember',
						'publisher_approve' 	=> 1,

						'publish_date_start'	=> Carbon::now(),
						'publish_date_end' 		=> Carbon::yesterday(),

						'created_at' 			=> Carbon::now(),
						'updated_at' 			=> Carbon::now(),
					],
					[
						'title' 				=> 'Post Title 6',
						'slug' 					=> str_slug('Post Title 6', '-'),
						'description' 			=> 'Test bericht',
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


						'news_categorie_id' 	=> '1',

						'draft' 				=> 1,

						'author' 				=> 1,
						'author_group' 			=> 'Boardmember',
						'author_approve' 		=> 1,

						'editor' 				=> 1,
						'editor_group' 			=> 'Boardmember',
						'editor_approve' 		=> 1,

						'publisher' 			=> 1,
						'publisher_group' 		=> 'Boardmember',
						'publisher_approve' 	=> 1,

						'publish_date_start'	=> Carbon::now(),
						'publish_date_end' 		=> Carbon::yesterday(),

						'created_at' 			=> Carbon::now(),
						'updated_at' 			=> Carbon::now(),
					],
					[
						'title' 				=> 'Post Title 7',
						'slug' 					=> str_slug('Post Title 7', '-'),
						'description' 			=> 'Test bericht',
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


						'news_categorie_id' 	=> '1',

						'draft' 				=> 1,

						'author' 				=> 1,
						'author_group' 			=> 'Boardmember',
						'author_approve' 		=> 1,

						'editor' 				=> 1,
						'editor_group' 			=> 'Boardmember',
						'editor_approve' 		=> 1,

						'publisher' 			=> 1,
						'publisher_group' 		=> 'Boardmember',
						'publisher_approve' 	=> 1,

						'publish_date_start'	=> Carbon::now(),
						'publish_date_end' 		=> Carbon::yesterday(),

						'created_at' 			=> Carbon::now(),
						'updated_at' 			=> Carbon::now(),
					],


				];
		foreach ($news as $key => $value) {
			News::create($value);
		}

//		News images

		$news_images = [
			[
				'name' 			=> 'testimage1.jpg',
				'slug' 			=> str_slug('testimage.jpg 1', '-'),
				'description' 	=> 'test image',
				'content' 		=> 'Image om mee te testen',
				'photographer' 	=> 'Dennis Kuijpers',
				'news_id' 		=> 1,
			],
			[
				'name' 			=> 'testimage2.jpg',
				'slug' 			=> str_slug('testimage.jpg 2', '-'),
				'description' 	=> 'test image',
				'content' 		=> 'Image om mee te testen',
				'photographer' 	=> 'Dennis Kuijpers',
				'news_id' 		=> 2,
			],
			[
				'name' 			=> 'testimage3.jpg',
				'slug' 			=> str_slug('testimage.jpg 3', '-'),
				'description' 	=> 'test image',
				'content' 		=> 'Image om mee te testen',
				'photographer' 	=> 'Dennis Kuijpers',
				'news_id' 		=> 3,
			],
			[
				'name' 			=> 'testimage4.jpg',
				'slug' 			=> str_slug('testimage.jpg 4', '-'),
				'description' 	=> 'test image',
				'content' 		=> 'Image om mee te testen',
				'photographer' 	=> 'Dennis Kuijpers',
				'news_id' 		=> 4,
			],
			[
				'name' 			=> 'testimage5.jpg',
				'slug' 			=> str_slug('testimage.jpg 5', '-'),
				'description' 	=> 'test image',
				'content' 		=> 'Image om mee te testen',
				'photographer' 	=> 'Dennis Kuijpers',
				'news_id' 		=> 5,
			],
			[
				'name' 			=> 'testimage6.jpg',
				'slug' 			=> str_slug('testimage.jpg 6', '-'),
				'description' 	=> 'test image',
				'content' 		=> 'Image om mee te testen',
				'photographer' 	=> 'Dennis Kuijpers',
				'news_id' 		=> 6,
			],
			[
				'name' 			=> 'testimage7.jpg',
				'slug' 			=> str_slug('testimage.jpg 7', '-'),
				'description' 	=> 'test image',
				'content' 		=> 'Image om mee te testen',
				'photographer' 	=> 'Dennis Kuijpers',
				'news_id' 		=> 7,
			],
			[
				'name' 			=> 'testimage8.jpg',
				'slug' 			=> str_slug('testimage.jpg 8', '-'),
				'description' 	=> 'test image',
				'content' 		=> 'Image om mee te testen',
				'photographer' 	=> 'Dennis Kuijpers',
				'news_id' 		=> 1,
			],
			[
				'name' 			=> 'testimage9.jpg',
				'slug' 			=> str_slug('testimage.jpg 9', '-'),
				'description' 	=> 'test image',
				'content' 		=> 'Image om mee te testen',
				'photographer' 	=> 'Dennis Kuijpers',
				'news_id' 		=> 1,
			],


		];
		foreach ($news_images as $key => $value) {
			NewsImage::create($value);
		}

//		News settings


		$news_settings = [
							[
								'name' 				=> 'categories',
								'slug' 				=> str_slug('categories', '-'),
								'description' 		=> 'main_categorie_block', // Wil je het categorie blok zien op de website?
								'value_bool' 		=> 1,
								'value_text' 		=> '',
							],
							[
								'name' 				=> 'tags',
								'slug' 				=> str_slug('tags', '-'),
								'description' 		=> 'main_tag_block',//Wil je het tags blok zien op de website?
								'value_bool' 		=> 1,
								'value_text' 		=> '',
							],
							[
								'name' 				=> 'archives',
								'slug' 				=> str_slug('archives', '-'),
								'description' 		=> 'main_archive_block',//Wil je het archief blok zien op de website?
								'value_bool' 		=> 1,
								'value_text' 		=> '',
							],
							[
								'name' 				=> 'search',
								'slug' 				=> str_slug('search', '-'),
								'description' 		=> 'main_search_block',//Wil je het zoek blok zien op de website?
								'value_bool' 		=> 1,
								'value_text' 		=> '',
							],
							[
								'name' 				=> 'comments',
								'slug' 				=> str_slug('comments', '-'),
								'description' 		=> 'post_comment_block', //Wil je het comment blok zien op de post pagina?
								'value_bool' 		=> 1,
								'value_text' 		=> '',
							],
							[
								'name' 				=> 'ratings',
								'slug' 				=> str_slug('ratings', '-'),
								'description' 		=> 'post_ratings_block', //Wil je het ratings blok zien op de post pagina?
								'value_bool' 		=> 1,
								'value_text' 		=> '',
							],


						];
		foreach ($news_settings as $key => $value) {
			NewsSettings::create($value);
		}






    }
}
