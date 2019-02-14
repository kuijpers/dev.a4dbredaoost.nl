<?php

namespace Modules\Organisation\Entities\Models\Main;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TheOrganisation extends Model
{
	use SoftDeletes;

	protected $fillable = [];

	protected $table = 'the_organisations';


	public function images(){
		return $this->hasMany(TheOrganisationImage::class, 'the_organisations_id', 'id');
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
