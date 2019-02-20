<?php

namespace Modules\Sponsors\Http\Controllers\Main;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Modules\Sponsors\Entities\Models\Main\Sponsor;
use Modules\Sponsors\Entities\Models\Main\SponsorClick;
use Modules\Sponsors\Entities\Models\Main\SponsorInformation;
use Modules\Sponsors\Entities\Models\Main\SponsorLink;
use Modules\Sponsors\Entities\Models\Main\SponsorSettings;
use Modules\Sponsors\Entities\Models\Main\SponsorSpotlight;

class SponsorsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * @return Response
	 */
	public function index()
	{

		$sponsor_information	=	static::get_sponsor_information();

		$sponsors				= 	static::get_sponsors();

		$sponsor_spotlight		=	static::get_sponsor_spotlight();

		$sponsor_settings		=	static::get_sponsor_settings();


		return view('sponsors::Main.index')
					->with(compact(
									'sponsor_information',
									'sponsors',
									'sponsor_spotlight',
									'sponsor_settings'
					));
	}

	public function click($slug){

		// Get sponsor information tru the link info
		$url = SponsorLink::where('slug', '=', $slug)->first();

		// Check if IP and sponsor_id already exist with a datetime of < 5 min ago.

			// Set all variables
				$unique_user_time	=	5; // Change for longer time duration
				$sponsor_id			=	$url->sponsor_id;
				$client_ip			=	$this->get_client_ip();
				$cur_datetime		=	Carbon::now();
				$check_time			=	Carbon::now()->subMinutes($unique_user_time)->toDateTimeString();

			// Look up in DB

			$unique_user = SponsorClick::orderByDesc('click_datetime')
								->where('sponsor_id', '=', $sponsor_id)
								->where('click_datetime', '>', $check_time)
								->where('ip', '=', $client_ip)
								->count();

			if(! $unique_user ){

				$click = new SponsorClick;

				$click->sponsor_id 		=	$sponsor_id;
				$click->ip				=	$client_ip;
				$click->click_datetime 	= 	$cur_datetime;

				$click->save();

			}

		return Redirect::to($url->link);
	}

	public static function select_template($slug, $template){

		$template_approval = SponsorSettings::where('slug', '=', $slug)
							->where('value_bool', '=', $template )
							->count();
		if($template_approval){
			return true;
		}
		return false;

	}


	public static function get_sponsor_information(){

		$information	=	SponsorInformation::where('draft', '=', 1)
			->where('author_approve', '=', 1)
			->where('editor_approve', '=', 1)
			->where('publisher_approve', '=', 1)
			->where('publish_date_start', '<=', Carbon::now())
			->where('publish_date_start', '>=', 'publish_date_end')
			->get();

		return $information;

	}

	public static function get_sponsors(){

		$sponsors	=	Sponsor::where('draft', '=', 1)
			->where('author_approve', '=', 1)
			->where('editor_approve', '=', 1)
			->where('publisher_approve', '=', 1)
			->where('payment_received', '=', 1)
			->where('publish_date_start', '<=', Carbon::now())
			->where('publish_date_start', '>=', 'publish_date_end')
			->inRandomOrder()
			->get();

		return $sponsors;

	}

	public static function get_sponsor_spotlight(){

		$current_datetime = Carbon::now();

		$sponsor = SponsorSpotlight::where('publish_date_start','<',$current_datetime)
										->where('publish_date_end','>',$current_datetime)
										->inRandomOrder()
										->first();
		if(!empty($sponsor)){
			$sponsor_id = $sponsor->pluck('sponsor_id');

			$sponsor_spotlight = Sponsor::where('id','=',$sponsor_id)->first();

			return $sponsor_spotlight;
		}

		return false;
	}

	public static function get_sponsor_settings(){

		$settings	=	SponsorSettings::get();

		return $settings;

	}

	public static function get_client_ip(){

		return request()->ip();
	}

}