<?php

namespace App\Http\Controllers\Board;

use App\Models\Boardmember;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth:boardmember');
	}



    public function index(){

		$breadcrumbles = [
			'Dashboard bestuur' => 'board.home',
			'Leden' => 'board.boardmembers.index',
		];

		$boardmembers =  static::board();

		$workgroup =  static::workgroup();

		return view('board.boardmembers.overview')->with(compact('boardmembers', 'workgroup' , 'breadcrumbles'));

	}

	public function show($slug){

	}



	public function board(){

		return Boardmember::where('group','board')->get();

	}

	public function workgroup(){

		return Boardmember::where('group','workgroup')->get();

	}
}
