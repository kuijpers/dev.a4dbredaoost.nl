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

	private $storage_path;

	protected $dates = ['publish_date_start',
						'publish_date_end',
						];


	public function __construct()
	{
		$this->middleware('auth:boardmember');

		// Set storage path

		$this->storage_path = 'modules/sponsors/img/logos';
	}


    public function index()
    {
		$breadcrumbles 		= [
									'Dashboard bestuur' => 'board.home',
									'Sponsors' => '',
								];

		$user 				= Auth::user();

		$packages			= static::get_packages();

		$personal_drafts	= static::get_personal_draft();

		$author_drafts		= static::get_author_drafts();

		$author_approved	= static::get_author_approved();

		$unpaid_invoices	= static::get_unpaid();

		$editor_approved	= static::get_editor_approved();

		$publisher_approved	= static::get_publisher_approved();

		$archived			= static::get_archived();

		$trashed			= static::get_trashed();

		return view('sponsors::Board.sponsors.index')
			->with(compact('breadcrumbles',
							'user',
							'packages',
							'personal_drafts',
							'author_drafts',
							'author_approved',
							'unpaid_invoices',
							'editor_approved',
							'publisher_approved',
							'archived',
							'trashed'
							));
    }

    public function create(Request $request)
    {
		// Validate all request fields

		static::create_validation($request);

		// Put data in DB table sponsors and receive sponsor id in return

		$sponsor_id	=	static::add_to_sponsor_table($request);

		// Put data in DB table sponsors_link

		static::add_to_sponsor_link_table($request, $sponsor_id);

		// Put data in DB and upload file to folder set in storage_path

		static::add_to_sponsor_image_table($request, $sponsor_id);

		// return success message

		return redirect()->route('board.sponsors.index')->with('success-message', 'New sponsor added!');

    }

    public function author_edit(Request $request)
    {
		//		return $request->all();

		// Validate all request fields
		static::author_edit_validation($request);

	// Update tables in DB

		// Sponsor table
		// $request->id
		// $request->title !
		// $request->sponsor_package !
		// $request->body !
		// $request->author_approval

		static::author_update_sponsor_table($request);

		// Sponsor_link table
		// $request->sponsor_link

		static::general_update_sponsor_link_table($request);

		// Sponsor_image
		// $request->sponsor_logo

		if(!is_null($request->sponsor_logo)){

			static::general_update_sponsor_image_table($request);

		}

		// return success message

		return redirect()->route('board.sponsors.index')->with('success-message', 'Sponsor updated!');
    }

	public function editor_edit(Request $request){

    	// Validate all request fields
		static::editor_edit_validation($request);

	// Update tables in DB

		// Sponsor table
		// $request->id
		// $request->title !
		// $request->sponsor_package !
		// $request->body !
		// $request->editor_approval
		// Auth::user()->id;
		// Auth::user()->group;

		static::editor_update_sponsor_table($request);

		// Sponsor_link table
		// $request->sponsor_link

		static::general_update_sponsor_link_table($request);

		// Sponsor_image
		// $request->sponsor_logo

		if(!is_null($request->sponsor_logo)){

			static::general_update_sponsor_image_table($request);

		}

		// return success message

		return redirect()->route('board.sponsors.index')->with('success-message', 'Sponsor updated!');

	}

	public function treasurer_edit(Request $request){

//    	return $request->all();

    	// Validate all request input
			// $request->payment_received;
			// $request->payment_received_at

		static::treasurer_edit_validation($request);

		// Add data to database
			// $request->payment_received;
			// $request->payment_received_at

		if($request->payment_received){
				static::treasurer_edit_sponsor_table($request);
			}
		else{
				return redirect()->route('board.sponsors.index')->with('danger-message', 'Sponsor is not updated!');
			}
		// return success message

		return redirect()->route('board.sponsors.index')->with('success-message', 'Sponsor updated!');
	}

	public function publisher_edit(Request $request)
	{

//		return $request->all();

		// Folowing data comes from $request
		//	-	id
		//	-	title
		//	-	body
		//	-	sponsor_link
		//	-	sponsor_logo
		//	-	approve_to_publish
		//	-	update_publish_period
		//	-	update_publish_period_start
		//	-	update_publish_period_end


		// Validate all requests

			static::publisher_edit_validation($request);

		// Update sponsor table

			static::publisher_edit_sponsor_table($request);

		// Update sponsor_link table

			static::general_update_sponsor_link_table($request);

		// Update sponsor_image table

		if(!is_null($request->sponsor_logo)){

			static::general_update_sponsor_image_table($request);

		}

		// Return success message

			return redirect()->route('board.sponsors.index')->with('success-message', 'Sponsor updated!');

	}

	public function published_edit(Request $request){

		$sponsor = Sponsor::where('id', '=', $request->id)->first();

		$sponsor->publisher_approve				= 0;

		$sponsor->save();

//		static::published_edit_sponsor_table($request);

		// Return success message

		return redirect()->route('board.sponsors.index')->with('success-message', 'Sponsor updated!');

	}

	public function delete_article($id){


		static::delete($id);

		return redirect()->route('board.sponsors.index')->with('success-message', 'Sponsor in trash!');

	}

	public function destroy_article($id){

		static::destroy($id);

		return redirect()->route('board.sponsors.index')->with('success-message', 'Sponsor destroyed!');

	}

	// Get functions

	public function get_packages(){

    	return SponsorPackages::get();
	}

	public function get_personal_draft(){

    	$personal_drafts = Sponsor::where('draft', '=', 1)
									->where('author_approve', '=', 0)
									->where('editor_approve', '=', 0)
									->where('publisher_approve', '=', 0)
									->where('author', '=', Auth::user()->id)
									->where('author_group', '=', Auth::user()->group)
									->get();

    	return $personal_drafts;

	}

	private function get_author_drafts(){

		$author_drafts = Sponsor::where('draft', '=', 1)
								->where('author_approve', '=', 0)
								->where('editor_approve', '=', 0)
								->where('publisher_approve', '=', 0)
								->get();

		return $author_drafts;

	}

	private function get_author_approved(){

		$author_approved = Sponsor::where('draft', '=', 1)
									->where('author_approve', '=', 1)
									->where('editor_approve', '=', 0)
									->where('publisher_approve', '=', 0)
									->get();

		return $author_approved;
	}

	private function get_unpaid(){

    	$unpaid = Sponsor::where('payment_received', '=', 0)->get();

    	return $unpaid;

	}

	private function get_editor_approved(){

		$editor_approved = Sponsor::where('draft', '=', 1)
			->where('author_approve', '=', 1)
			->where('editor_approve', '=', 1)
			->where('publisher_approve', '=', 0)
			->get();

		return $editor_approved;

	}

	private function get_publisher_approved(){

		$publisher_approved = Sponsor::where('draft', '=', 1)
			->where('author_approve', '=', 1)
			->where('editor_approve', '=', 1)
			->where('publisher_approve', '=', 1)
			->where('publish_date_end', '>', Carbon::now())
			->get();

		return $publisher_approved;

	}

	private function get_archived(){

		$archived = Sponsor::where('publish_date_end', '<', Carbon::now())
			->get();

		return $archived;

	}

	private function get_trashed(){

		$trashed = Sponsor::onlyTrashed()->get();

		return $trashed;

	}

	// Private create functions

	private function create_validation($request){

    	Validator::make($request->all(), [
			'title' 						=> 'required|max:255',
			'sponsor_package' 				=> 'required|integer',
			'sponsor_link' 					=> 'required|active_url',
			'body' 							=> 'required',
			'publish_date_start' 			=> 'required',
			'publish_date_end' 				=> 'required|date|after:publish_date_start',
			'sponsor_logo' 					=> 'nullable|image|mimes:jpg,jpeg,bmp,png',
			'create_new_author_approved' 	=> 'sometimes|accepted',
			'create_new_editor_approved' 	=> 'sometimes|accepted',
		])->validate();

	}

	private function add_to_sponsor_table($request){

		$new_sponsor	=	new Sponsor;

		// - title
		$new_sponsor->title							= $request->title;

		// slug
		$new_sponsor->slug 							= str_slug($request->title.Carbon::now()->timestamp, '-');

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

		return $new_sponsor->id;
	}

	private function add_to_sponsor_link_table($request, $sponsor_id){

		$sponsor_link = new SponsorLink;

		// slug
		$sponsor_link->slug							= str_slug($request->sponsor_link.Carbon::now()->timestamp, '-');

		// sponsor_id
		$sponsor_link->sponsor_id					= $sponsor_id;

		// link
		$sponsor_link->link							= $request->sponsor_link;

		$sponsor_link->save();
	}

	private function add_to_sponsor_image_table($request, $sponsor_id){

		// Upload logo

		$logo = $request->sponsor_logo->store($this->storage_path);

		$sponsor_image	=	new SponsorImage;

		// name
		$sponsor_image->name						= $logo;

		// slug
		$sponsor_image->slug						= str_slug($logo.Carbon::now()->timestamp, '-');

		// description
		$sponsor_image->description					= 'Logo for '.$request->title;

		// content (same as description)
		$sponsor_image->content						= 'Logo for '.$request->title;

		// photographer (name of sponsor)
		$sponsor_image->photographer				= $request->title;

		// sponsor_id
		$sponsor_image->sponsor_id					= $sponsor_id;

		$sponsor_image->save();

	}


	// Private edit/update functions for author

	private function author_edit_validation($request){

		Validator::make($request->all(), [
			'id' 							=> 'required',
			'title' 						=> 'required|max:255',
			'body' 							=> 'required',
			'sponsor_package' 				=> 'required|integer',
			'sponsor_link' 					=> 'required|active_url',
			'sponsor_logo' 					=> 'nullable|image|mimes:jpg,jpeg,bmp,png',
			'create_new_author_approved' 	=> 'sometimes|accepted',
		])->validate();
	}

	private function author_update_sponsor_table($request){

		$sponsor = Sponsor::where('id', '=', $request->id)->first();

		// - title
		$sponsor->title							= 	$request->title;

		// slug
		$sponsor->slug 							= 	str_slug($request->title.Carbon::now()->timestamp, '-');

		// Description
		$sponsor->description					=	$request->title;

		// - sponsor_package => sponsor_package_id
		$sponsor->sponsor_packages_id 			= 	$request->sponsor_package;

		// - body
		$sponsor->body							=	$request->body;

		if($request->author_approval){
			$sponsor->author_approve			=	1;
		}

		$sponsor->save();

	}


	// Private edit/update functions for editor

	private function editor_edit_validation($request){

		Validator::make($request->all(), [
			'id' 							=> 'required',
			'title' 						=> 'required|max:255',
			'body' 							=> 'required',
			'sponsor_package' 				=> 'required|integer',
			'sponsor_link' 					=> 'required|active_url',
			'sponsor_logo' 					=> 'nullable|image|mimes:jpg,jpeg,bmp,png',
			'update_publish_period' 		=> 'sometimes|accepted',
			'update_publish_period_start' 	=> 'required_if:update_publish_period,==,1|date_format:d-m-Y H:m:i',
			'update_publish_period_end' 	=> 'required_if:update_publish_period,==,1|date_format:d-m-Y H:m:i',
		])->validate();
	}

	private function editor_update_sponsor_table($request){

		$sponsor = Sponsor::where('id', '=', $request->id)->first();

		// - title
		$sponsor->title							= 	$request->title;

		// slug
		$sponsor->slug 							= 	str_slug($request->title.Carbon::now()->timestamp, '-');

		// Description
		$sponsor->description					=	$request->title;

		// - sponsor_package => sponsor_package_id
		$sponsor->sponsor_packages_id 			= 	$request->sponsor_package;

		// - body
		$sponsor->body							=	$request->body;

		// - editor
		$sponsor->editor						=	Auth::user()->id;

		// - author group
		$sponsor->editor_group					=	Auth::user()->group;

		if($request->editor_approval){
			$sponsor->editor_approve			=	1;
		}

		$sponsor->save();

	}

	// Private edit/update functions for treasurer

	private function treasurer_edit_validation($request){

		Validator::make($request->all(), [
			'payment_received' 				=> 'sometimes|accepted',
			'payment_received_at'		 	=> 'required_if:payment_received,==,1|date_format:d-m-Y H:i',
		])->validate();

	}

	private function treasurer_edit_sponsor_table($request){

		// $request->payment_received;
		// $request->payment_received_at

		$sponsor = Sponsor::where('id', '=', $request->id)->first();

		$sponsor->payment_received		=	$request->payment_received;

		$sponsor->payment_received_at	=	Carbon::parse($request->payment_received_at)->format('Y-m-d H:i');

		$sponsor->save();

	}

	// Private edit/update functions for publisher

	private function publisher_edit_validation($request){

		// @todo validate 2 updates when period has to be updated

		Validator::make($request->all(), [
			'id' 							=> 'required',
			'title' 						=> 'required|max:255',
			'body' 							=> 'required',
			'sponsor_link' 					=> 'required|active_url',
			'sponsor_logo' 					=> 'nullable|image|mimes:jpg,jpeg,bmp,png',
			'update_publish_period' 		=> 'sometimes|accepted',
//			'update_publish_period_start' 	=> 'sometimes|date_format:d-m-Y H:m:i',
//			'update_publish_period_end' 	=> 'sometimes|date_format:d-m-Y H:m:i',
		])->validate();
	}

	private function publisher_edit_sponsor_table($request){

		$sponsor = Sponsor::where('id', '=', $request->id)->first();

		// - title
		$sponsor->title							= 	$request->title;

		// slug
		$sponsor->slug 							= 	str_slug($request->title.Carbon::now()->timestamp, '-');

		// Description
		$sponsor->description					=	$request->title;

		// - body
		$sponsor->body							=	$request->body;

		// - editor
		$sponsor->publisher						=	Auth::user()->id;

		// - author group
		$sponsor->publisher_group					=	Auth::user()->group;

		if($request->approve_to_publish){

			$sponsor->publisher_approve				= 1;

			if($request->update_publish_period){

				$sponsor->publish_date_start			=	$request->update_publish_period_start;
				$sponsor->publish_date_start			=	Carbon::parse($request->update_publish_period_start)->format('Y-m-d H:i');

				$sponsor->publish_date_end				=	$request->update_publish_period_end;
				$sponsor->publish_date_end				=	Carbon::parse($request->update_publish_period_end)->format('Y-m-d H:i');
			}
		}

		$sponsor->save();


	}

	// Private edit/update functions for published

	private function published_edit_sponsor_table($request){

		$sponsor = Sponsor::where('id', '=', $request->id)->first();

		$sponsor->publisher_approve				= 0;

		$sponsor->save();

	}

	// Private delete/destroy functions for all

	private function delete($id)
	{

		Sponsor::find($id)->delete();

	}

	private function destroy($id)
	{

		Sponsor::withTrashed()->where('id','=', $id)->forcedelete();

	}

	// Private edit/update functions General

	private function general_update_sponsor_link_table($request){

		// Sponsor_link table
		// $request->sponsor_link

		$sponsor_link	=	SponsorLink::where('sponsor_id', '=', $request->id)->first();

		// slug
		$sponsor_link->slug							= str_slug($request->sponsor_link.Carbon::now()->timestamp, '-');

		// link
		$sponsor_link->link							= $request->sponsor_link;

		$sponsor_link->save();

	}

	private function general_update_sponsor_image_table($request){

		$sponsor_image	=	SponsorImage::where('sponsor_id', '=', $request->id)->first();

		// Get current logo and remove it from folder
		Storage::delete($sponsor_image->name);

		// Add new logo to folder
		$logo = $request->sponsor_logo->store($this->storage_path);

		// Update DB with the information coming from upload to folder

		// name
		$sponsor_image->name						= $logo;

		// slug
		$sponsor_image->slug						= str_slug($logo.Carbon::now()->timestamp, '-');

		// description
		$sponsor_image->description					= 'Logo for '.$request->title;

		// content (same as description)
		$sponsor_image->content						= 'Logo for '.$request->title;

		// photographer (name of sponsor)
		$sponsor_image->photographer				= $request->title;

		$sponsor_image->save();

	}

}
