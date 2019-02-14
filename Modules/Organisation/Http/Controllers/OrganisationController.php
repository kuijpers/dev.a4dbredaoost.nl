<?php

namespace Modules\Organisation\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Organisation\Entities\Models\Main\TheOrganisation;
use Modules\Organisation\Entities\Models\Main\TheOrganisationImage;

class OrganisationController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $items	= $this->get_items();

    	return view('organisation::Main.index')
			->with(compact( 'items'
			));
    }


	public function get_items(){

		$items = TheOrganisation::where('draft', '=', 1)
					->where('author_approve', '=', 1)
					->where('editor_approve', '=', 1)
					->where('publisher_approve', '=', 1)
					->whereDate('publish_date_start', '<=', Carbon::now('Europe/Amsterdam'))
					->orderBy('web_order', 'asc')
					->get();

    	return $items;
	}

}
