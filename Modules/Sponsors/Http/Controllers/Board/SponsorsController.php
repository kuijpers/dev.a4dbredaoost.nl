<?php

namespace Modules\Sponsors\Http\Controllers\Board;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Validator;
use Modules\Sponsors\Entities\Models\Board\Sponsor;
use Modules\Sponsors\Entities\Models\Board\SponsorPackages;
use Modules\Sponsors\Entities\Models\Board\SponsorLink;
use Modules\Sponsors\Entities\Models\Board\SponsorImage;

class SponsorsController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth:boardmember');
	}

	/**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
		$breadcrumbles 		= [
									'Dashboard bestuur' => 'board.home',
									'Sponsors' => '',
								];

		$user 				= Auth::user();

		$packages			= static::get_packages();

		$personal_drafts	= static::get_personal_draft();

		return view('sponsors::Board.sponsors.index')
			->with(compact('breadcrumbles',
							'user',
							'packages',
							'personal_drafts'
							));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create(Request $request)
    {
		// Validate all request fields

		Validator::make($request->all(), [
			'title' 						=> 'required|max:255',
			'sponsor_package' 				=> 'required|integer',
			'sponsor_link' 					=> 'required|active_url',
			'body' 							=> 'required',
			'publish_date_start' 			=> 'required',
			'publish_date_end' 				=> 'required|date|after:publish_date_start',
			'sponsor_logo' 					=> 'required|image|mimes:jpg,jpeg,bmp,png',
			'create_new_author_approved' 	=> 'sometimes|accepted',
			'create_new_editor_approved' 	=> 'sometimes|accepted',
		])->validate();

		// Put data in DB table sponsors

		$new_sponsor	=	new Sponsor;

		// - title
		$new_sponsor->title							= $request->title;

		// slug
		$new_sponsor->slug 							= str_slug($request->title, '-');

		// Description
		$new_sponsor->description					=	$request->title;

		// - sponsor_package => sponsor_package_id
		$new_sponsor->sponsor_packages_id 			= $request->sponsor_package;

		// - body
		$new_sponsor->body							=	$request->body;

		// - publish_date_start
		$new_sponsor->publish_date_start			=	Carbon::parse($request->publish_date_start)->format('Y-m-d H:i');

		// - publish_date_end
		$new_sponsor->publish_date_end				=	Carbon::parse($request->publish_date_end)->format('Y-m-d H:i');

		// - author
		$new_sponsor->author						=	Auth::user()->id;

		// - author group
		$new_sponsor->author_group					=	Auth::user()->group;

		// - create_new_author_approved (if it is set to on )
		if($request->author_approved == 'on')
		{

		$new_sponsor->create_new_author_approved 	= $request->author_approve;

			// - create_new_editor_approved (if it is set to on )
			if($request->create_new_editor_approved == 'on')
			{

			// editor
			$new_sponsor->editor 					= Auth::user()->id;
			// editor_group
			$new_sponsor->editor_group 				= Auth::user()->group;
			// editor_approve
			$new_sponsor->editor_approve 			= $request->editor_approve;

			}

		}
		$new_sponsor->save();

		$sponsor_id 								= $new_sponsor->id;

		// Put data in DB table sponsors_link
			// - slug
			// - sponsor_link
			// - sponsor_id

		$sponsor_link = new SponsorLink;

		// slug
		$sponsor_link->slug							= str_slug($request->sponsor_link, '-');

		// sponsor_id
		$sponsor_link->sponsor_id					= $sponsor_id;

		// link
		$sponsor_link->link							= $request->sponsor_link;

		$sponsor_link->save();

		// Put data in DB and upload file to folder (modules/sponsors/img/logos)

		// Set path

		$storage_path								= 'modules/sponsors/img/logos';

		// Upload logo

		$logo = $request->sponsor_logo->store($storage_path);

		$sponsor_image	=	new SponsorImage;

		// name
		$sponsor_image->name						= $logo;

		// slug
		$sponsor_image->slug						= str_slug($logo, '-');

		// description
		$sponsor_image->description					= 'Logo for '.$request->title;

		// content (same as description)
		$sponsor_image->content						= 'Logo for '.$request->title;

		// photographer (name of sponsor)
		$sponsor_image->photographer				= $request->title;

		// sponsor_id
		$sponsor_image->sponsor_id					= $sponsor_id;

		$sponsor_image->save();

		// return success message

		return redirect()->route('board.sponsors.index')->with('success-message', 'New sponsor added!');

    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
		return 'Sponsor store page';
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
		return 'Sponsor show page';
//        return view('sponsors::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
		return 'Sponsor edit page';
//        return view('sponsors::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
		return 'Sponsor update page';
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
		return 'Sponsor destroy page';
    }

	public function get_packages(){

    	return SponsorPackages::get();
	}

	public function get_personal_draft(){

    	$personal_drafts = Sponsor::where('draft', '=', 1)
									->where('author_approve', '=', 0)
									->where('editor_approve', '=', 0)
									->where('publisher_approve', '=', 0)
									->get();



    	return $personal_drafts;
	}

}
