<?php

namespace Modules\Sponsors\Http\Controllers\Board;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class SponsorsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
    	return 'Sponsor index page';
//        return view('sponsors::index');
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
