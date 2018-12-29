<?php

namespace Modules\Didyouknow\Http\Controllers\Board;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class DidyouknowController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth:boardmember');
	}


    public function index()
    {
        return view('didyouknow::board.index');
    }

	/**
	 * Show the form for creating a new resource.
	 * @return Response
	 */
	public function create()
	{
		return view('didyouknow::board.create');
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
		return view('didyouknow::board.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 * @return Response
	 */
	public function edit()
	{
		return view('didyouknow::board.edit');
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
}
