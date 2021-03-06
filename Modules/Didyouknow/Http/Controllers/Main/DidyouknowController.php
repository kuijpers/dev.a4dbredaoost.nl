<?php

namespace Modules\Didyouknow\Http\Controllers\Main;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Modules\Didyouknow\Entities\Models\Main\Didyouknow;
use Modules\Didyouknow\Entities\Models\Main\Didyouknow_information;

use Carbon\Carbon;

class DidyouknowController extends Controller
{

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {

    	// Top information

		$didyouknow_information = Didyouknow_information::where('draft', '=', 1)
			->where('author_approve', '=', 1)
			->where('editor_approve', '=', 1)
			->where('publisher_approve', '=', 1)
//			->where('publish_date_start', '<=', Carbon::now())
//			->orWhere('publish_date_start', '>', 'publish_date_end')
//			->orWhere('publish_date_end', '>=', Carbon::now())
			->whereRaw('`publish_date_start` <= NOW()
						AND 
						`publish_date_end` >= NOW()
						OR
						`publish_date_end` < `publish_date_start`')
			->get();

    	// Statements
		$didyouknows = Didyouknow::where('draft', '=', 1)
				->where('author_approve', '=', 1)
				->where('editor_approve', '=', 1)
				->where('publisher_approve', '=', 1)
				->where('publish_date_start', '<=', Carbon::now())
				->whereRaw('publish_date_start <= publish_date_end')
				->get();

        return view('didyouknow::main.index')->with(compact('didyouknows', 'didyouknow_information'));
    }

}
