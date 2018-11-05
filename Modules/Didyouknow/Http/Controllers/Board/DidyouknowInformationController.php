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


        return view('didyouknow::board.information.index')
			->with(compact('personal_drafts', 'author_drafts'));
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
		return view('didyouknow::board.information.edit');
	}

	/**
	 * Update the specified resource in storage.
	 * @param  Request $request
	 * @return Response
	 */
	public function update(Request $request)
	{
	}

	/**
	 * Remove the specified resource from storage.
	 * @return Response
	 */
	public function destroy()
	{
	}

	// Get the drafts that are started by the auth::user

	public function get_personal_draft()
	{
		$personal_draft = Didyouknow_information::where('draft', '=', 1)
			->where('author_approve', '=', 0)
			->where('editor_approve', '=', 0)
			->where('publisher_approve', '=', 0)
			->where('archived', '=', 0)
			->where('author', '=', Auth::user()->id)
			->where('author_group', '=', Auth::user()->group)
			->get();

		return $personal_draft;
	}

	// Get all author approved data that still requires editing

	public function get_author_draft()
	{
		$author_draft = Didyouknow_information::where('draft', '=', 1)
			->where('author_approve', '=', 0)
			->where('editor_approve', '=', 0)
			->where('publisher_approve', '=', 0)
			->where('archived', '=', 0)
			->get();

		return $author_draft;
	}

}
