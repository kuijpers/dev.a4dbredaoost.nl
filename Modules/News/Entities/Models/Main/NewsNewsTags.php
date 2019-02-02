<?php

namespace Modules\News\Entities\Models\Main;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsNewsTags extends Model
{
	use SoftDeletes;
    protected $fillable = [];

	protected $table = 'news_news_tags';
}
