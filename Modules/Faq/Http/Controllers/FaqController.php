<?php

namespace Modules\Faq\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Modules\Faq\Entities\Models\Main\FaqCategorie;
use Modules\Faq\Entities\Models\Main\FaqInformation;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {

    	$faq_information = static::get_information();

		$faq_categories = static::get_categories();

		$faq_images		= static::get_images('modules/faq/img');



    	return view('faq::main.index')->with(compact(
    											'faq_information',
												'faq_categories',
												'faq_images'
												));
    }

	private function get_information(){

		$faq_information = FaqInformation::where('draft', '=', 1)
			->where('author_approve', '=', 1)
			->where('editor_approve', '=', 1)
			->where('publisher_approve', '=', 1)
			->where('publish_date_start', '<=', Carbon::now())
			//->whereRaw('publish_date_start >= publish_date_end')
			->where('publish_date_start', '>=', 'publish_date_end')
			->get();


		return $faq_information;
	}

	private function get_categories(){

		$faq_categories = FaqCategorie::where('publisher_approve', '=', 1)
			->orderBy('web_order')
			->get();

		return $faq_categories;

	}

	private function get_images($directory){

    	$images = Storage::files($directory);


//    	$images = Storage::allDirectories($directory);

    	return $images;

	}
}
