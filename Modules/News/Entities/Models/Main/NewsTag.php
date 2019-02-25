<?php

namespace Modules\News\Entities\Models\Main;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsTag extends Model
{
	use SoftDeletes;
    protected $fillable = [];

	protected $table = 'news_tag';


	public function items(){
		return $this->belongsToMany(News::class, 'news_news_tags', 'news_tag_id', 'news_id');
	}


}
