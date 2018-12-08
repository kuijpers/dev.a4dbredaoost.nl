<?php

namespace Modules\Didyouknow\Entities\Models\Board;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Didyouknow_information extends Model
{
	use SoftDeletes;

	protected $dates = ['deleted_at'];

	protected $fillable = [
		'title',
		'body',
		'draft',
		'author',
		'author_approve',
		'editor',
		'editor_approve',
		'publisher',
		'publisher_approve',
		'publish_date_start',
		'publish_date_end',
		'archived',
	];

	public $table = "didyouknow_information";


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

	public function getEditorName($group)
	{
			if (!empty($group)){
				$model = '\App\Models\\' . $group;

				return $model::where('id', $this->editor)->first()->name;
			}
			else{
				return '';
			}
	}

	public function getPublisherName($group)
	{
		if (!empty($group)){
				$model = '\App\Models\\' . $group;

				return $model::where('id', $this->publisher)->first()->name;
			}
		else{
			return '';
		}
	}


}
