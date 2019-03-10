<?php

namespace Modules\SocialMedia\Http\Controllers\Main;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Modules\SocialMedia\Entities\Models\Main\SocialMedia;
use Modules\SocialMedia\Entities\Models\Main\SocialMediaClick;

class SocialMediaController extends Controller
{

	public function click($slug){
// Get sponsor information tru the link info
		$url = SocialMedia::where('slug', '=', $slug)->first();


		// Check if IP and socialmedia_id already exist with a datetime of < 5 min ago.

		// Set all variables
		$unique_user_time	=	5; // Change for longer time duration
		$socialmedia_id		=	$url->id;
		$client_ip			=	$this->get_client_ip();
		$cur_datetime		=	Carbon::now();
		$check_time			=	Carbon::now()->subMinutes($unique_user_time)->toDateTimeString();

		// Look up in DB

		$unique_user = SocialMediaClick::orderByDesc('click_datetime')
			->where('socialmedia_id', '=', $socialmedia_id)
			->where('click_datetime', '>', $check_time)
			->where('ip', '=', $client_ip)
			->count();

		if(! $unique_user ){

			$click = new SocialMediaClick();

			$click->socialmedia_id 	=	$socialmedia_id;
			$click->ip				=	$client_ip;
			$click->click_datetime 	= 	$cur_datetime;

			$click->save();

		}

		return Redirect::to($url->direct_link);


	}

	public static function get_client_ip(){

		return request()->ip();
	}




}
