<?php

namespace Modules\News\Entities\Models\Main;

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

}
