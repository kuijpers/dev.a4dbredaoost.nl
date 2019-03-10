<?php

namespace Modules\SocialMedia\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\SocialMedia\Entities\Models\Main\SocialMedia;

class SocialMediaMainSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();



         $social_media = [
								[
									'name' 				=> 'Facebook',
									'slug' 				=> str_slug('Facebook', '-'),
									'description'		=> 'Facebook pagina van de stichting',
									'direct_link'		=> 'https://www.facebook.com/A4dbo/',
									'img'				=> 'iconmonstr-facebook-5-24.png',
									'fa_class'			=> 'fab fa-facebook',
									'web_order'			=> 1,

								],
								[
									'name' 				=> 'Youtube',
									'slug' 				=> str_slug('Youtube', '-'),
									'description'		=> 'Videokanaal voor de stichting',
									'direct_link'		=> 'https://www.youtube.com/channel/UCf9E8wzoga4441vsY3UULEA',
									'img'				=> 'iconmonstr-youtube-10-24.png',
									'fa_class'			=> 'fab fa-youtube-square',
									'username'			=> 'Webmaster.a4dbredaoost@gmail.com',
									'email_owner'		=> 'Webmaster.a4dbredaoost@gmail.com',
									'web_order'			=> 4,

								],
								[
									'name' 				=> 'Instagram',
									'slug' 				=> str_slug('Instagram', '-'),
									'description'		=> 'Instagram kanaal van de stichting',
									'direct_link'		=> 'https://www.instagram.com/a4dbredaoost',
									'img'				=> 'iconmonstr-instagram-10-24.png',
									'fa_class'			=> 'fab fa-instagram',
									'username'			=> 'A4DBredaoost',
									'secret'			=> encrypt(env('SOCIALMEDIA_PASSWORD_INSTAGRAM')),
									'email_owner'		=> 'webmaster.a4dbredaoost@gmail.com',
									'web_order'			=> 3,

								],
								[
									'name' 				=> 'Twitter',
									'slug' 				=> str_slug('Twitter', '-'),
									'description'		=> 'Twitter account voor de stichting',
									'direct_link'		=> 'https://twitter.com/A4DBredaOost',
									'img'				=> 'iconmonstr-twitter-5-24.png',
									'fa_class'			=> 'fab fa-twitter-square',
									'username'			=> 'A4DBredaOost',
									'secret'			=> encrypt(env('SOCIALMEDIA_PASSWORD_TWITTER')),
									'email_owner'		=> 'webmaster.a4dbredaoost@gmail.com',
									'web_order'			=> 2,

								],
								[
									'name' 				=> 'Whatsapp',
									'slug' 				=> str_slug('Whatsapp', '-'),
									'description'		=> 'Whatsapp account voor de stichting',
									'direct_link'		=> '06-81537576',
									'img'				=> 'iconmonstr-whatsapp-1-24.png',
									'fa_class'			=> 'fab fa-whatsapp-square',

								],

							];
		foreach ($social_media as $key => $value) {
			SocialMedia::create($value);
		}
	}


}
