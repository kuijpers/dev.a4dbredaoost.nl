<?php

namespace Modules\News\Entities\Models\Main;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
	use SoftDeletes;

    protected $fillable = [];

	protected $table = 'news';


	public function categorie(){
		return $this->hasOne(NewsCategorie::class, 'id', 'news_categorie_id');
	}

	public function comment(){
		return $this->hasOne(NewsComments::class);
	}

	public function images(){
		return $this->hasMany(NewsImage::class, 'news_id', 'id');
	}

	public function tags(){
		return $this->belongsToMany(NewsTag::class, 'news_news_tags', 'news_id', 'news_tag_id');
	}


	public static function show_single_main(){

		$news_item	= new News;

		$item = $news_item	->where('publisher_approve', '=', 1)
							->where('show_main', '=', 1)
							->where('publish_date_start', '<=', Carbon::now())
							->first();

		return $item;

	}

	public function getAuthorName($group)
	{

		if (!empty($group)){

			$model = '\App\Models\\' . $group;

			return $model::where('id', $this->author)->first()->name;
		}
		else{
			return '';
		}

	}

	public function getAuthorSlug($group)
	{

		if (!empty($group)){

			$model = '\App\Models\\' . $group;

			return $model::where('id', $this->author)->first()->slug;
		}
		else{
			return '';
		}

	}


}
