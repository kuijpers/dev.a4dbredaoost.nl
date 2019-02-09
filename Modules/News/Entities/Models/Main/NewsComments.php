<?php

namespace Modules\News\Entities\Models\Main;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsComments extends Model
{
	use SoftDeletes;
    protected $fillable = [];

	protected $table = 'news_comments';

	public function item(){
		return $this->hasOne(News::class);
	}
}
