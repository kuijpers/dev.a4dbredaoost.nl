<?php

namespace Modules\SocialMedia\Entities\Models\Main;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SocialMedia extends Model
{
	use SoftDeletes;

	protected $fillable = [];

	protected $table = 'socialmedia';



	public static function get_social_media(){

		$social_media_items = SocialMedia::where('web_order', '>', '0')->orderBy('web_order')->get();

		return $social_media_items;
	}



}
