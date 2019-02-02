<?php

namespace Modules\News\Entities\Models\Main;

use Illuminate\Database\Eloquent\Model;

class NewsNewsCategories extends Model
{
	use SoftDeletes;
    protected $fillable = [];

	protected $table = 'news_news_categories';
}
