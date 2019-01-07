<?php

namespace Modules\Didyouknow\Http\Controllers\Board;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Auth;

use Carbon\Carbon;

use Modules\Didyouknow\Entities\Models\Board\Didyouknow_information;
use Modules\Didyouknow\Entities\Models\Board\Didyouknow_settings;

class DidyouknowInformationController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth:boardmember');
	}


    public function index()
    {
    	$personal_drafts 		= static::get_personal_draft();

		$author_drafts 			= static::get_author_draft();

		$author_approved 		= static::get_author_approved();

		$editor_approved 		= static::get_editor_approved();

		$publisher_approved 	= static::get_publisher_approved();

		$archived 				= static::get_archived();

		$title_setting 			= static::get_settings('set title');

		$body_setting 			= static::get_settings('set body');


        return view('didyouknow::board.information.index')
			->with(compact('personal_drafts',
							'author_drafts',
							'author_approved',
							'editor_approved',
							'publisher_approved',
							'archived',
							'title_setting',
							'body_setting'
				));
    }

	/**
	 * Show the form for creating a new resource.
	 * @return Response
	 */
	public function create()
	{
		return view('didyouknow::board.information.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * @param  Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$validator = \Validator::make($request->all(), [
			'title' => 'required|max:255',
			'body' => 'required',
			'author_approved' => 'required|boolean',
			'editor_approved' => 'required|boolean',
		]);

		if ($validator->fails())
			{
				return response()->json(['errors'=>$validator->errors()->all()]);
			}

		$new_article = new Didyouknow_information;
		// slug
			$new_article->slug = str_slug($request->title, '-');
		// title
			$new_article->title = $request->title;
		// body
			$new_article->body = $request->body;
		// draft = 1
			$new_article->draft = 1;
		// author
			$new_article->author = Auth::user()->id;
		// author_group
			$new_article->author_group = Auth::user()->group;
		// author_approve
		if($request->author_approved == 1){

			$new_article->author_approve = $request->author_approved;

			if($request->editor_approved == 1){

				// editor
					$new_article->editor = Auth::user()->id;
				// editor_group
				$new_article->editor_group = Auth::user()->group;
				// editor_approve
				$new_article->editor_approve = $request->editor_approved;

			}

		}

		$new_article->save();


		return response()->json(['success'=>['message'=>'Record is successfully added']]);

	}

	/**
	 * Show the specified resource.
	 * @return Response
	 */
	public function show()
	{
		return view('didyouknow::board.information.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 * @return Response
	 */
	public function edit()
	{
	}

	/**
	 * Update the specified resource in storage.
	 * @param  Request $request
	 * @return Response
	 */
	public function update(Request $request)
	{
		switch ($request->type) {

			case "edit_personal_drafts":
				// Validate the incoming data
					$validator = \Validator::make($request->all(), [
						'title' => 'required|max:255',
						'body' => 'required',
						'author_approved' => 'required|boolean',
					]);
					// When validation is incorrect send an error message
					if ($validator->fails())
						{
							return response()->json(['errors'=>$validator->errors()->all()]);
						}

				// Update data in DB

					Didyouknow_information::where('id', $request->id)
					->update([
						'slug'				=>str_slug($request->title, '-'),
						'title'				=> $request->title,
						'body'				=> $request->body,
						'author_approve' 	=> $request->author_approved,
					]);


					// Send an response that it went well
				return response()->json(['success'=>['message'=>'Record is successfully updated']]);
			break;

			case "edit_author_approved":
				// Validate the incoming data
					$validator = \Validator::make($request->all(), [
						'title' => 'required|max:255',
						'body' => 'required',
						'editor_approved' => 'required|boolean',
					]);
					// When validation is incorrect send an error message
					if ($validator->fails())
						{
							return response()->json(['errors'=>$validator->errors()->all()]);
						}

					// Update data in DB
					Didyouknow_information::where('id', $request->id)
						->update([
							'slug'				=>str_slug($request->title, '-'),
							'title'				=> $request->title,
							'body'				=> $request->body,
							'editor' 			=> Auth::user()->id,
							'editor_group' 		=> Auth::user()->group,
							'editor_approve' 	=> $request->editor_approved,
						]);


					// Send an response that it went well
					return response()->json(['success'=>['message'=>'Record is successfully updated']]);
			break;

			case "edit_editor_approved":

				// Validate the incoming data
					$validator_1 = \Validator::make($request->all(), [
						'title' => 'required|max:255',
						'body' => 'required',
						'publisher_approved' => 'required|boolean',
//						'select_period' => 'required|boolean',
					]);
					// When validation is incorrect send an error message
					if ($validator_1->fails())
						{
							return response()->json(['errors'=>$validator_1->errors()->all()]);
						}

					// Now that we know that the 'publisher_approved' and
					// the 'select_period' are valid we can check for the dates

					if($request->publisher_approved == 1 && $request->select_period == 0){

						$validator_2 = \Validator::make($request->all(), [
							'publish_date_start' => 'required|date',
						]);

					}elseif($request->publisher_approved == 1 && $request->select_period == 1){

						$validator_2 = \Validator::make($request->all(), [
							'publish_date_start' => 'required|date',
							'publish_date_end'=> 'required|date',
						]);

					}
					// When validation is incorrect send an error message
					// This error message will contain the values of
					// publish_date_start and/or publish_date_end
					if (isset($validator_2) && $validator_2->fails())
						{
							return response()->json(['errors'=>$validator_2->errors()->all()]);
						}

					$select_period	=	$request->select_period;

					$publisher_approved	=	$request->publisher_approved;

//					$publish_date_start	=	$request->publish_date_start;
//					$publish_date_start	=	Carbon::createFromFormat('Y-m-d H:i', $request->publish_date_start);
					$publish_date_start	=	Carbon::parse($request->publish_date_start)->format('Y-m-d H:i');

//					$publish_date_end	=	$request->publish_date_end;
					if(!empty($request->publish_date_end)){
						$publish_date_end	=	Carbon::parse($request->publish_date_end)->format('Y-m-d H:i');
					}else{
						$publish_date_end = NULL;
					}


					// If everything is valid make sure start and end date
					// are empty when it is not yet approved
					if($publisher_approved == 0){
						$publish_date_start = NULL;
						$publish_date_end = NULL;
					}

					if($publisher_approved == 0 && $select_period == 0){
						$publish_date_end = NULL;
					}

					Didyouknow_information::where('id', $request->id)
						->update([
							'slug'					=>str_slug($request->title, '-'),
							'title'					=> $request->title,
							'body'					=> $request->body,
							'publisher' 			=> Auth::user()->id,
							'publisher_group' 		=> Auth::user()->group,
							'publisher_approve' 	=> $publisher_approved,
							'publish_date_start'	=> $publish_date_start,
							'publish_date_end'		=> $publish_date_end,
						]);

					// Send an response that it went well
					return response()->json(['success'=>['message'=>'Record is successfully updated']]);

			break;

			case "edit_publisher_approved":
				// Validate the incoming data
					$validator = \Validator::make($request->all(), [
						'publisher_approved' => 'required|boolean',
					]);
					// When validation is incorrect send an error message
					if ($validator->fails())
						{
							return response()->json(['errors'=>$validator->errors()->all()]);
						}

					// Update data in DB

					Didyouknow_information::where('id', $request->id)
						->update([
							'publisher_approve' => $request->publisher_approved,
							'publish_date_start' => NULL,
							'publish_date_end' => NULL,
						]);


					// Send an response that it went well
					return response()->json(['success'=>['message'=>'Record is successfully updated']]);


			break;

			case "green":
					echo "Your favorite color is green!";
			break;

			default:
				// If the type isn't listed send an error message
					return response()->json(['errors'=>'Something went wrong']);
			}

		// If everything goes wrong send an error message
		return response()->json(['errors'=>'Something went wrong']);

	}

	/**
	 * Remove the specified resource from storage.
	 * @return Response
	 */
	public function delete($id)
	{
		Didyouknow_information::find($id)->delete();

		return redirect()->back();
	}

	/**
	 * Remove the specified resource from storage.
	 * @return Response
	 */
	public function destroy(Request $request)
	{
		// Validation is required


		Didyouknow_information::withTrashed()->where('id','=', $request->id)->forcedelete();

		return redirect()->back();

	}

	public function restore(Request $request)
	{
		// Validate the incoming data
			$validator = \Validator::make($request->all(), [
				'id' => 'required|exists:didyouknow_information',
				'roll_back' => 'required|boolean',
			]);
			// When validation is incorrect send an error message
			if ($validator->fails())
				{
					return response()->json(['errors'=>$validator->errors()->all()]);
				}



		Didyouknow_information::withTrashed()->where('id','=', $request->id)->restore();

		return response()->json(['success'=>['message'=>'Record is successfully restored']]);
	}

	// Get the drafts that are started by the auth::user

	public function get_personal_draft()
	{
		$personal_draft = Didyouknow_information::where('draft', '=', 1)
			->where('author_approve', '=', 0)
			->where('editor_approve', '=', 0)
			->where('publisher_approve', '=', 0)
			->where('author', '=', Auth::user()->id)
			->where('author_group', '=', Auth::user()->group)
			->get();

		return $personal_draft;
	}

	// Get all author drafts that still require approval from author to continue

	public function get_author_draft()
	{
		$author_draft = Didyouknow_information::where('draft', '=', 1)
			->where('author_approve', '=', 0)
			->where('editor_approve', '=', 0)
			->where('publisher_approve', '=', 0)
			->get();

		return $author_draft;
	}

	// Get all author approved data that still requires editing

	public function get_author_approved()
	{
		$author_approved = Didyouknow_information::where('draft', '=', 1)
			->where('author_approve', '=', 1)
			->where('editor_approve', '=', 0)
			->where('publisher_approve', '=', 0)
			->get();

		return $author_approved;
	}

	// Get all editor approved data that still requires approval from publisher

	public function get_editor_approved()
	{
		$editor_approved = Didyouknow_information::where('draft', '=', 1)
			->where('author_approve', '=', 1)
			->where('editor_approve', '=', 1)
			->where('publisher_approve', '=', 0)
			->get();

		return $editor_approved;
	}

	// Get all editor approved data that still requires approval from publisher

	public function get_publisher_approved()
	{
		$publisher_approved = Didyouknow_information::where('draft', '=', 1)
			->where('author_approve', '=', 1)
			->where('editor_approve', '=', 1)
			->where('publisher_approve', '=', 1)
			->get();

		return $publisher_approved;
	}

	// Get all editor approved data that still requires approval from publisher

	public function get_archived()
	{
		$archived = Didyouknow_information::onlyTrashed()->get();
		return $archived;
	}

	public function get_settings($name){

		$result	=	Didyouknow_settings::where('name', '=', $name)
			->select('value_bool',
				'value_text')
			->get();

		return $result;
	}
}
