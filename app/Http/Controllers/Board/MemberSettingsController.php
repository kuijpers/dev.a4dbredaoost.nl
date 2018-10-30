<?php

namespace App\Http\Controllers\Board;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class MemberSettingsController extends Controller
{

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth:boardmember');
	}


	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		return view('board.member.settings');

    }

	/**
	 *
	 *	Give the user the settings they would like to have
	 *
	 *
	 */
	public function post_theme(Request $request)
	{
		// Check if settings are made for this user

		if(\App\Models\BoardmembersDashboardSettings::settings())
		{
			// When this user already has settings
			// We have to update the settings in another method

			if(static::update_theme($request->message))
			{
				$response = array(
					'status' => 'success',
				);
				return response()->json($response);
			};

		}
		// When settings are not made for this user
		// We have to create the settings in database
		else
		{

			$new_theme = new \App\Models\BoardmembersDashboardSettings;

			$new_theme->boardmembers_id = Auth::user()->id;

			$new_theme->boardmembers_theme = $request->message;

			$new_theme->save();

		}

	}

	/**
	 *
	 *	Update the settings for this user because he is not completely satisfied
	 *
	 *
	 */

	public function update_theme($theme)
	{

		\App\Models\BoardmembersDashboardSettings::where('boardmembers_id', Auth::user()->id)
			->update(['boardmembers_theme' => $theme]);

		return TRUE;

	}

}
