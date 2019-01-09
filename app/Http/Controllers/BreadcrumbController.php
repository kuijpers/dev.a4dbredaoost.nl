<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BreadcrumbController extends Controller
{


	public function build($breadcrumbles){

//		print_r($breadcrumbles);

		$breadcrumb_count = 0;

		$breadcrumb_crumbles = count($breadcrumbles);


		$link = "";


		foreach($breadcrumbles as $pagename => $href){


			$breadcrumb_count ++;

			if($breadcrumb_count < $breadcrumb_crumbles){

				$link .= "<li><a href=". route($href)."> $pagename </a></li>";

			}else{

				$link .= "<li class='active'>$pagename</li>";

			}



		}

		return $link;

	}
}
