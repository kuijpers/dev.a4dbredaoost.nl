<?php

namespace Modules\Main\Http\Controllers\Main;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Modules\Calendar\Entities\Models\Main\Calendar;
use Modules\Calendar\Entities\Models\Main\CalendarGroup;
use Modules\Didyouknow\Entities\Models\Main\Didyouknow;
use Modules\Main\Entities\Models\Main\Spotlight;
use Modules\Main\Entities\Models\Main\TyParticipants;
use Modules\Main\Entities\Models\Main\TySponsors;
use Modules\Main\Entities\Models\Main\TyVolunteers;
use Modules\News\Entities\Models\Main\News;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
    	$spotlight				= static::get_spotlight();

    	$main_latestnews		= static::get_latest_news();

    	$main_event				= static::get_whats_going_to_happen();

    	$main_didyouknow		= static::get_did_you_know();

		$ty_volunteers 			= static::get_ty_volunteers();

		$ty_participants 		= static::get_ty_participants();

		$ty_sponsors 			= static::get_ty_sponsors();

        return view('main::Main.index')
			->with(compact( 'spotlight',
							'main_latestnews',
							'main_event',
							'main_didyouknow',
							'ty_volunteers',
							'ty_participants',
							'ty_sponsors'
			));
    }

	public function spotlight_index($slug){

    	$spotlight		= $this->get_current_spotlight($slug);

		return view('main::Main.Spotlight.index')
			->with(compact( 'spotlight'
			));

	}


// Spotlight section
	public function get_spotlight(){
		$spotlight = Spotlight::where('draft', '=', 1)
			->where('author_approve', '=', 1)
			->where('editor_approve', '=', 1)
			->where('publisher_approve', '=', 1)
			->whereDate('publish_date_start', '<=', Carbon::now('Europe/Amsterdam'))
			->first();

		return $spotlight;
	}

	public function get_current_spotlight($slug){

		$spotlight = Spotlight::where('slug', '=', $slug)->first();

		return $spotlight;

	}


// Announcements section
	public function get_latest_news(){
		return News::show_single_main();
	}


// Calender section
	public function get_whats_going_to_happen(){

    	$event = Calendar::orderBy('start', 'asc')

			->where('start', '>=', Carbon::now())
			->where('show_main', '=', 1)

			->whereHas('calendar_groups', function($q) {
					$q->where('calendar_group_id', '=', '1');
				})->with('calendar_groups')

			->first();


		return $event;
	}

	public function get_did_you_know(){
			return Didyouknow::show_single_random();
	}


// Thank you section
	public function get_ty_volunteers(){

    	$ty_volunteer = TyVolunteers::where('draft', '=', 1)
			->where('author_approve', '=', 1)
			->where('editor_approve', '=', 1)
			->where('publisher_approve', '=', 1)
			->whereDate('publish_date_start', '<=', Carbon::now('Europe/Amsterdam'))
			->get();

		return $ty_volunteer;
	}

	public function get_ty_participants(){

    	$ty_participants = TyParticipants::where('draft', '=', 1)
			->where('author_approve', '=', 1)
			->where('editor_approve', '=', 1)
			->where('publisher_approve', '=', 1)
			->whereDate('publish_date_start', '<=', Carbon::now('Europe/Amsterdam'))
			->get();

		return $ty_participants;
	}

	public function get_ty_sponsors(){
		$ty_sponsors = TySponsors::where('draft', '=', 1)
			->where('author_approve', '=', 1)
			->where('editor_approve', '=', 1)
			->where('publisher_approve', '=', 1)
			->whereDate('publish_date_start', '<=', Carbon::now('Europe/Amsterdam'))
			->get();

		return $ty_sponsors;
	}

	public function get_main_settings(){

	}

}
