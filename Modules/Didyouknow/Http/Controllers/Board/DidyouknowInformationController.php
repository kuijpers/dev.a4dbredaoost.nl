<?php

namespace Modules\Didyouknow\Http\Controllers\Board;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Auth;

//use Modules\Didyouknow\Entities\Models\Main\Didyouknow;
use Modules\Didyouknow\Entities\Models\Board\Didyouknow_information;

class DidyouknowInformationController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth:boardmember');
	}


    public function index()
    {
    	$personal_drafts = static::get_personal_draft();

		$author_drafts = static::get_author_draft();

		$author_approved = static::get_author_approved();

		$editor_approved = static::get_editor_approved();

		$publisher_approved = static::get_publisher_approved();

		$archived = static::get_archived();


        return view('didyouknow::board.information.index')
			->with(compact('personal_drafts',
							'author_drafts',
							'author_approved',
							'editor_approved',
							'publisher_approved',
							'archived'));
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
						'title'=> $request->title,
						'body'=> $request->body,
						'author_approve' => $request->author_approved,
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
							'title'=> $request->title,
							'body'=> $request->body,
							'editor' => Auth::user()->id,
							'editor_group' => Auth::user()->group,
							'editor_approve' => $request->editor_approved,
						]);


					// Send an response that it went well
					return response()->json(['success'=>['message'=>'Record is successfully updated']]);
			break;

			case "edit_editor_approved":
					echo "Your favorite color is green!";
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
	public function destroy($id)
	{

		Didyouknow_information::find($id)->forcedelete();

		return redirect()->back();

	}

	// Get the drafts that are started by the auth::user

	public function get_personal_draft()
	{
		$personal_draft = Didyouknow_information::where('draft', '=', 1)
			->where('author_approve', '=', 0)
			->where('editor_approve', '=', 0)
			->where('publisher_approve', '=', 0)
			//->where('deleted_at', '=', NULL)
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
			//->where('deleted_at', '=', NULL)
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
			//->where('deleted_at', '=', NULL)
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
			//->where('deleted_at', '=', NULL)
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
			//->where('deleted_at', '=', NULL)
			->get();

		return $publisher_approved;
	}

	// Get all editor approved data that still requires approval from publisher

	public function get_archived()
	{
		$archived = Didyouknow_information::onlyTrashed()->get();
		return $archived;
	}
}
