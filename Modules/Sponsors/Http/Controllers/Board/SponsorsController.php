<?php

namespace Modules\Sponsors\Http\Controllers\Board;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

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
		$breadcrumbles = [
			'Dashboard bestuur' => 'board.home',
			'Sponsors' => '',
		];

		$user 			= Auth::user();

		return view('sponsors::Board.sponsors.index')
			->with(compact('breadcrumbles',
				'user'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
		return 'Sponsor create page';
//        return view('sponsors::create');
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
}
