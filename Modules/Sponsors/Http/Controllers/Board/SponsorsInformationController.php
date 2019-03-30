<?php

namespace Modules\Sponsors\Http\Controllers\Board;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class SponsorsInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
		return 'Sponsorinformation index page';
//        return view('sponsors::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
		return 'Sponsorinformation create page';
//        return view('sponsors::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
		return 'Sponsorinformation store page';
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
		return 'Sponsorinformation show page';
//        return view('sponsors::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
		return 'Sponsorinformation edit page';
//        return view('sponsors::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
		return 'Sponsorinformation update page';
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
		return 'Sponsorinformation destroy page';
    }
}
