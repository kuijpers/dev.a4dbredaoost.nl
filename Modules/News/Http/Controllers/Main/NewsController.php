<?php

namespace Modules\News\Http\Controllers\Main;

use Carbon\Carbon;
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
		$news_items					= static::get_news_items();

		$news_categories 			= static::get_categories();
		$news_tags 					= static::get_tags();



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

	public function categorie($slug){

		$news_categories 			= static::get_categories();
		$news_tags 					= static::get_tags();

    	//Get id from slug
		$cat_id	=	NewsCategorie::where('slug', '=', $slug)->pluck('id');

//		return $cat_id;

		if($cat_id->isEmpty()){
			$news_items = '';
			$news_cat	=	$slug;
		}else{
			$news_items = NewsCategorie::get_items($cat_id);
			$news_cat	= NewsCategorie::where('slug', '=', $slug)->first()->name;
		}


		return view('news::Main.categorie')
			->with(compact( 'news_categories',
							'news_tags',
							'news_cat',
							'news_items'
			));

	}

	public function tag($slug){

		$news_items = static::get_tagged_items($slug);


		$news_categories 			= static::get_categories();
		$news_tags 					= static::get_tags();



		return view('news::Main.tag')
			->with(compact( 'news_categories',
								'news_tags',
								'news_items'
							));

	}

	public function author($slug){

    	 $author = $this->get_author_by_slug($slug);

    	 if(!$author){
			 $news_items = '';
		 }else{

			$news_items = News::where('author', '=', $author->id)
							->where('author_group', '=', $author->group)
							->where('author_approve', '=', 1)
							->where('editor_approve', '=', 1)
							->where('publisher_approve', '=', 1)
							->where('publish_date_start', '<=', Carbon::now())
							//->whereRaw('publish_date_start >= publish_date_end')
							->where('publish_date_start', '>=', 'publish_date_end')
							->paginate(5);
		 }

    	 $news_author	=	$this->get_author($author->group, $slug);

		$news_categories 			= static::get_categories();
		$news_tags 					= static::get_tags();



		return view('news::Main.author')
						->with(compact( 'news_categories',
							'news_tags',
							'news_author',
							'news_items'
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

    	$news_items = News::where('draft', '=', 1)
			->where('author_approve', '=', 1)
			->where('editor_approve', '=', 1)
			->where('publisher_approve', '=', 1)
			->where('publish_date_start', '<=', Carbon::now())
			//->whereRaw('publish_date_start >= publish_date_end')
			->where('publish_date_start', '>=', 'publish_date_end')
			->paginate(5);


    	return $news_items;
	}

	public function get_news_item($slug){

    	$news_item = News::where('slug', '=', $slug)->first();

    	return $news_item;

	}

	public function get_tagged_items($slug){

		$tag_items	=	NewsTag::where('slug', '=', $slug)->first();

		$articles =	 $tag_items->items
						->where('draft', '=', 1)
						->where('author_approve', '=', 1)
						->where('editor_approve', '=', 1)
						->where('publisher_approve', '=', 1)
						->where('publish_date_start', '<=', Carbon::now())

//						->where('publish_date_start', '>=', 'publish_date_end')

//				@todo make paginate work
//						->paginate(5)

		;



		return $articles;
	}

	public static function get_settings($column){

    	return NewsSettings::where('name', '=', $column)
				->pluck('value_bool');
	}

	public function get_author_by_slug($slug){

		// Check if slug belongs to boardmembers
		if( isset($this->get_author('Boardmember', $slug)->group) ){
			if( $this->get_author('Boardmember', $slug)->group === 'Boardmember' ){
				return $this->get_author('Boardmember', $slug);
			};
		};


		// Check if slug belongs to volunteers

		if( isset($this->get_author('Volunteer', $slug)->group) ){
			if( $this->get_author('Volunteer', $slug)->group === 'Volunteer' ){
				return $this->get_author('Volunteer', $slug);
			};
		};

		// Check if slug belongs to users

		if( isset($this->get_author('User', $slug)->group) ){
			if( $this->get_author('User', $slug)->group === 'User' ){
				return $this->get_author('User', $slug);
			};
		};


		return false;
	}

	public function get_author($table, $slug){

		$model = '\App\Models\\' . $table;

		$author =  $model::where('slug', '=', $slug)->first();

		return $author;

	}


}
