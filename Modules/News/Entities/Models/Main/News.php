<?php

namespace Modules\News\Entities\Models\Main;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
	use SoftDeletes;
    protected $fillable = [];

	protected $table = 'news';


	public function categorie(){
		return $this->hasOne(NewsCategorie::class);
	}




}
