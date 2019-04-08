<?php

namespace Modules\Sponsors\Http\Controllers\Board;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Sponsors\Entities\Models\Board\SponsorPackages;

class SponsorsSettingsController extends Controller
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
			'Sponsors' => 'board.sponsors.index',
			'Settings'=>'',
		];

		$user 			= Auth::user();

		$packages		= static::get_packages();

		return view('sponsors::Board.settings.index')
			->with(compact('breadcrumbles',
							'user',
							'packages'
							));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
		return 'Sponsorsettings create page';
//        return view('sponsors::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
		return 'Sponsorsettings store page';
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
		return 'Sponsorsettings show page';
//        return view('sponsors::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
		return 'Sponsorsettings edit page';
//        return view('sponsors::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
		return 'Sponsorsettings update page';
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
		return 'Sponsorsettings destroy page';
    }


	public function get_packages(){

    	return SponsorPackages::get();
	}
}
