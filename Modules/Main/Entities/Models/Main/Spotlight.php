<?php

namespace Modules\Main\Entities\Models\Main;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Spotlight extends Model
{
	use SoftDeletes;

	protected $fillable = [];

	protected $table = 'spotlights';


	public function images(){
		return $this->hasMany(SpotlightImage::class, 'spotlight_id', 'id');
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
