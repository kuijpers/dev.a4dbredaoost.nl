<?php

namespace Modules\Didyouknow\Http\Controllers\Main;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class DidyouknowController extends Controller
{

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('didyouknow::main.index');
    }

}
