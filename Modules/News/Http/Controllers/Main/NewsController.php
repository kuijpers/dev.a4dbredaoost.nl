<?php

namespace Modules\News\Http\Controllers\Main;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\News\Entities\Models\Main\News;
use Modules\News\Entities\Models\Main\NewsCategorie;
use Modules\News\Entities\Models\Main\NewsSettings;
use Modules\News\Entities\Models\Main\NewsTag;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
		$news_categories 			= static::get_categories();
		$news_tags 					= static::get_tags();

		$news_items					= static::get_news_items();



        return view('news::Main.index')
			->with(compact( 'news_categories',
							'news_tags',

							'news_items'
					));
    }

	public function show($slug){

		$news_item = $this->get_news_item($slug);

		$news_categories 			= static::get_categories();
		$news_tags 					= static::get_tags();

		return view('news::Main.post')
			->with(compact( 'news_categories',
							'news_tags',

							'news_item'
						));
	}


	public static function show_on_page($column){

    	$show_is_approved =  static::get_settings($column);

		if($show_is_approved[0] == 1){

			return true;
		}

    	return false;
	}

	public function get_categories(){
			return NewsCategorie::get();
	}


	public function get_tags(){
			return NewsTag::get();
	}

	public function get_archives(){

	}

	public function get_news_items(){

    	$news_items = News::paginate(5);


    	return $news_items;
	}

	public function get_news_item($slug){

    	$news_item = News::where('slug', '=', $slug)->first();

    	return $news_item;

	}

	public static function get_settings($column){

    	return NewsSettings::where('name', '=', $column)
				->pluck('value_bool');
	}


}
