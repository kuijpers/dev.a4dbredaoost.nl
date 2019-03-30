<?php

namespace App\Http\Controllers\Board;

use App\Models\Boardmember;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class MemberProfileController extends Controller
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
		$breadcrumbles = [
							'Dashboard bestuur' => 'board.home',
							'Lid' => 'board.member',
							'Profiel' => 'board.member.profile',
						];

		$user 			= Auth::user();

		return view('board.member.profile')
					->with(compact('user',
									'breadcrumbles'));
    }


	public function change_password(Request $request){

    	$user = Auth::user();

    	// Check if current password compares to existing password

		if(Hash::check($request->current_password, $user->getAuthPassword())){


			// If compares, check if new password and repeated password compare
			// If compares, validate if new password is with validation rules

			$this->validate($request, [
				'current_password' 		=> 'required',
				'new_password' 			=> 'required|same:repeat_new_password|min:3',
				'repeat_new_password' 	=> 'required',
			]);

			// If validates, update database

			$user 			= Auth::user();

			$boardmember 			= Boardmember::find($user->getAuthIdentifier());

			$boardmember->password = bcrypt($request->new_password);

			$boardmember->save();


			// after update send succeed alert

			return back()->with('success-message','Information is processed.');

		}

		// If anything doesn't compare, return to page with danger alert

		return back()->with('danger-message','Something went wrong. Please check again');
	}

	public function update_profile(Request $request){

//    	return $request->all();

		// Validate request

		$this->validate($request, [
			'name' 				=> 'required|min:3',
			'email' 			=> 'required|email',
			'secondary_email' 	=> 'nullable|email',
			'address' 			=> 'nullable',
			'postcode' 			=> 'nullable',
			'city' 				=> 'nullable',
			'phone' 			=> 'nullable',
			'dob'				=> 'nullable|date_format:d-m-Y',
		]);

		// If validate add to database

		$user 							= Auth::user();

		$boardmember 					= Boardmember::find($user->getAuthIdentifier());

		$boardmember->name 				= $request->name;

		$boardmember->email 			= $request->email;

		$boardmember->secondary_email 	= $request->secondary_email;

		$boardmember->address 			= $request->address;

		$boardmember->postcode 			= $request->postcode;

		$boardmember->city 				= $request->city;

		$boardmember->phone 			= $request->phone;

		$boardmember->dob 				= Carbon::parse($request->dob)->format('Y-m-d');

		$boardmember->save();

		// Return with success message

		return back()->with('success-message','Information is processed.');


	}

	public function update_about_me(Request $request){

    	// Validate request

		$this->validate($request, [
			'body' 				=> 'nullable|min:10',
		]);

		// If valid add to database

		$user 							= Auth::user();

		$boardmember 					= Boardmember::find($user->getAuthIdentifier());

		$boardmember->about_me 				= $request->body;

		$boardmember->save();


		// Return to page with success message

		return back()->with('success-message','Information is processed.');

	}

	public function update_avatar(Request $request){

    	// Set user
		$user = Auth::user();

		// Get correct user

		$boardmember 					= Boardmember::find($user->getAuthIdentifier());

		// Set path

		$storage_path	=	'board/memberprofile/avatar';

    	// Validate uploaded image

		$this->validate($request, [
			'avatar' 		=> 'nullable|image|mimes:jpg,jpeg,bmp,png',
		]);

		// Get old image info from DB

		$file_to_delete	=	$boardmember->profile_img;

		// Save new image
			// Upload image
			$avatar = $request->avatar->store($storage_path);

			// Add to DB
			$boardmember->profile_img		=	$avatar;

			$boardmember->save();

		// Remove old image from folder


//		return $file_to_delete;

		Storage::delete($file_to_delete);



		return back()->with('success-message','Information is processed.');

	}

}
