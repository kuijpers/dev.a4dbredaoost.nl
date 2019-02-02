<?php

namespace Modules\News\Entities\Models\Main;

use Illuminate\Database\Eloquent\Model;

class NewsTag extends Model
{
	use SoftDeletes;
    protected $fillable = [];

	protected $table = 'news_tag';
}
