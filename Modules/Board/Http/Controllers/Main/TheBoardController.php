<?php

namespace Modules\Board\Http\Controllers\Main;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Board\Entities\Models\Main\TheBoard;
use Modules\Board\Entities\Models\Main\TheBoardInformation;
use Modules\Board\Entities\Models\Main\TheBoardSettings;

class TheBoardController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {

		$board_information 			= static::get_info();

		$board_president			= static::get_president();
		$board_vice_president		= static::get_vice_president();
		$board_secretary			= static::get_secretary();
		$board_treasurer			= static::get_treasurer();
		$board_members				= static::get_members();

    	return view('board::Main.index')
					->with(compact( 'board_information',
									'board_president',
									'board_vice_president',
									'board_secretary',
									'board_treasurer',
									'board_members'
									));
    }


	public static function show_on_page($column){

		$show_is_approved =  static::get_settings($column);

		if($show_is_approved[0] == 1){

			return true;
		}

		return false;
	}

	public static function get_info(){

    	$info = TheBoardinformation::where('draft', '=', 1)
			->where('author_approve', '=', 1)
			->where('editor_approve', '=', 1)
			->where('publisher_approve', '=', 1)
			->where('publish_date_start', '<=', Carbon::now())
			->where('publish_date_start', '>=', 'publish_date_end')
			->orderBy('web_order', 'desc')
			->first();

    	return $info;
	}

	public static function get_president(){

		$president = TheBoard::where('boardmember_title', '=', 'president')->first();

		return $president;
	}

	public static function get_vice_president(){

		$vice_president = TheBoard::where('boardmember_title', '=', 'vice-president')->first();

		return $vice_president;
	}

	public static function get_secretary(){

		$secretary = TheBoard::where('boardmember_title', '=', 'secretary')->first();

		return $secretary;
	}

	public static function get_treasurer(){

		$treasurer = TheBoard::where('boardmember_title', '=', 'treasurer')->first();

		return $treasurer;
	}

	public static function get_members(){

		$members = TheBoard::where('boardmember_title', '=', 'member')->get();

		return $members;
	}

	public static function get_settings($column){

		return TheBoardSettings::where('slug', '=', $column)
			->pluck('value_bool');

	}

}
