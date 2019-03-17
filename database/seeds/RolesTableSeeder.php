<?php

use Illuminate\Database\Seeder;
	use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$roles = [
//			id = 1
			[
				'name' 			=> 'Webmaster',
				'slug' 			=> str_slug('webmaster', '-'),
				'permissions' 	=> [
									'set-webmaster'				=> true,
									'set-roles-with-admin'		=> true,

									'create-users'				=> true,
									'ban-users'					=> true,
									'blacklist-users'			=> true,
									'delete-users'				=> true,
									'view-delete-users'			=> true,
									'destroy-users'				=> true,

									'create-volunteers'			=> true,
									'ban-volunteers'			=> true,
									'blacklist-volunteers'		=> true,
									'delete-volunteers'			=> true,
									'view-delete-volunteers'	=> true,
									'destroy-volunteers'		=> true,

									'create-news-post' 			=> true,
									'edit-news-post' 			=> true,
									'publish-news-post' 		=> true,
									'delete-news-post' 			=> true,
									'view-deleted-news-posts' 	=> true,
									'destroy-news-post' 		=> true,

									'create-dyk-post' 			=> true,
									'edit-dyk-post' 			=> true,
									'publish-dyk-post' 			=> true,
									'delete-dyk-post' 			=> true,
									'view-deleted-dyk-posts' 	=> true,
									'destroy-dyk-post' 			=> true,
									'change-dyk-setting' 		=> true,

									'create-dyki-post' 			=> true,
									'edit-dyki-post' 			=> true,
									'publish-dyki-post' 		=> true,
									'delete-dyki-post' 			=> true,
									'view-deleted-dyki-posts' 	=> true,
									'destroy-dyki-post' 		=> true,
									'change-dyki-setting' 		=> true,
								],
			],
//			id = 2
			[
				'name' 			=> 'Admin',
				'slug' 			=> str_slug('admin', '-'),
				'permissions' 	=> [
									'set-webmaster'				=> false,
									'set-roles-without-admin'	=> true,

									'create-users'				=> true,
									'ban-users'					=> true,
									'delete-users'				=> true,

									'create-volunteers'			=> true,
									'ban-volunteers'			=> true,
									'delete-volunteers'			=> true,

									'create-news-post' 			=> true,
									'edit-news-post' 			=> true,
									'publish-news-post' 		=> true,
									'delete-news-post' 			=> true,
									'view-deleted-news-posts' 	=> true,
									'destroy-news-post' 		=> true,

									'create-dyk-post' 			=> true,
									'edit-dyk-post' 			=> true,
									'publish-dyk-post' 			=> true,
									'delete-dyk-post' 			=> true,
									'view-deleted-dyk-posts' 	=> true,
									'destroy-dyk-post' 			=> true,
									'change-dyk-setting' 		=> true,

									'create-dyki-post' 			=> true,
									'edit-dyki-post' 			=> true,
									'publish-dyki-post' 		=> true,
									'delete-dyki-post' 			=> true,
									'view-deleted-dyki-posts' 	=> true,
									'destroy-dyki-post' 		=> true,
									'change-dyki-setting' 		=> true,
				],
			],
//			id = 3
			[
				'name' 			=> 'Author',
				'slug' 			=> str_slug('author', '-'),
				'permissions' 	=> [
									'create-news-post' 			=> true,
									'edit-own-news-post' 		=> true,
									'delete-own-news-post' 		=> true,

									'create-dyk-post' 			=> true,
									'edit-own-dyk-post' 		=> true,
									'delete-own-dyk-post' 		=> true,

									'create-dyki-post' 			=> true,
									'edit-own-dyki-post' 		=> true,
									'delete-own-dyki-post' 		=> true,
								],
			],
//			id = 4
			[
				'name' 			=> 'Editor',
				'slug' 			=> str_slug('editor', '-'),
				'permissions' 	=> [
									'edit-news-posts' 			=> true,
									'delete-news-post' 			=> true,

									'edit-dyk-posts' 			=> true,
									'delete-dyk-post' 			=> true,

									'edit-dyki-posts' 			=> true,
									'delete-dyki-post' 			=> true,
								],
			],
//			id = 5
			[
				'name' 			=> 'Publisher',
				'slug' 			=> str_slug('publisher', '-'),
				'permissions' 	=> [
									'publish-news-post' 		=> true,
									'delete-news-post' 			=> true,

									'publish-dyk-post' 			=> true,
									'delete-dyk-post' 			=> true,

									'publish-dyki-post' 		=> true,
									'delete-dyki-post' 			=> true,
								],
			],


//			id = 6
			[
				'name' 			=> 'President',
				'slug' 			=> str_slug('president', '-'),
				'permissions' 	=> [
									'create-volunteers'			=> true,
									'ban-volunteers'			=> true,
									'delete-volunteers'			=> true,
									],
			],
//			id = 7
			[
				'name' 			=> 'Vice President',
				'slug' 			=> str_slug('vice president', '-'),
				'permissions' 	=> [
									'create-volunteers'			=> true,
									'ban-volunteers'			=> true,
									'delete-volunteers'			=> true,
									],
			],
//			id = 8
			[
				'name' 			=> 'Secretary',
				'slug' 			=> str_slug('secretary', '-'),
				'permissions' 	=> [
									'create-volunteers'			=> true,
									'ban-volunteers'			=> true,
									'delete-volunteers'			=> true,],
			],
//			id = 9
			[
				'name' 			=> 'Treasurer',
				'slug' 			=> str_slug('treasurer', '-'),
				'permissions' 	=> [
									'create-volunteers'			=> true,
									'ban-volunteers'			=> true,
									'delete-volunteers'			=> true,
									],
			],
//			id = 10
			[
				'name' 			=> 'Member',
				'slug' 			=> str_slug('member', '-'),
				'permissions' 	=> [
									'create-volunteers'			=> true,
									'ban-volunteers'			=> true,
									'delete-volunteers'			=> true,
									],
			],


		];
		foreach ($roles as $key => $value) {
			Role::create($value);
		}
    }
}
