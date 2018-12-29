<?php

namespace Modules\Didyouknow\Http\Controllers\Board;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Didyouknow\Entities\Models\Board\Didyouknow_settings;

class DidyouknowSettingsController extends Controller
{
//    /**
//     * Display a listing of the resource.
//     * @return Response
//     */
//    public function index()
//    {
//        return view('didyouknow::index');
//    }
//
//    /**
//     * Show the form for creating a new resource.
//     * @return Response
//     */
//    public function create()
//    {
//        return view('didyouknow::create');
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     * @param  Request $request
//     * @return Response
//     */
//    public function store(Request $request)
//    {
//    }
//
//    /**
//     * Show the specified resource.
//     * @return Response
//     */
//    public function show()
//    {
//        return view('didyouknow::show');
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     * @return Response
//     */
//    public function edit()
//    {
//        return view('didyouknow::edit');
//    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {

//    	return $request;


    	// Validate the incoming data
		$validator = \Validator::make($request->all(), [
			'title_setting' => 'required|boolean',
			'body_setting' => 'required|boolean',
		]);
		// When validation is incorrect send an error message
		if ($validator->fails())
			{
				return response()->json(['errors'=>$validator->errors()->all()]);
			}

		// dual update

			// Title setting
				Didyouknow_settings::where('slug', 'set-title')
					->update([
						'value_bool'	=>$request->title_setting,
					]);
			// Body setting
				Didyouknow_settings::where('slug', 'set-body')
					->update([
						'value_bool'	=>$request->body_setting,
					]);

		// Send an response that it went well
		return response()->json(['success'=>['message'=>'Record is successfully updated']]);


    }

//    /**
//     * Remove the specified resource from storage.
//     * @return Response
//     */
//    public function destroy()
//    {
//    }
}
