<?php

namespace Modules\News\Entities\Models\Main;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsCategorie extends Model
{
	use SoftDeletes;
    protected $fillable = [];

	protected $table = 'news_categorie';

	public function items(){
		return $this->hasMany(News::class);
	}

	public static function get_items($id){

		$items = News::where('news_categorie_id', '=', $id)
			->where('draft', '=', 1)
			->where('author_approve', '=', 1)
			->where('editor_approve', '=', 1)
			->where('publisher_approve', '=', 1)
			->where('publish_date_start', '<=', Carbon::now())
			//->whereRaw('publish_date_start >= publish_date_end')
			->where('publish_date_start', '>=', 'publish_date_end')
			->paginate(5);


		return $items;

	}

	public static function count_cat_items($news_categorie_id){

		$number_of_items =News::where('news_categorie_id', '=', $news_categorie_id)
			->where('draft', '=', 1)
			->where('author_approve', '=', 1)
			->where('editor_approve', '=', 1)
			->where('publisher_approve', '=', 1)
			->where('publish_date_start', '<=', Carbon::now())
			//->whereRaw('publish_date_start >= publish_date_end')
			->where('publish_date_start', '>=', 'publish_date_end')
			->count();

		return $number_of_items;

	}
}
