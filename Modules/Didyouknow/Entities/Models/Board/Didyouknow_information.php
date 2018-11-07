<?php

namespace Modules\Didyouknow\Entities\Models\Board;

use Illuminate\Database\Eloquent\Model;

class Didyouknow_information extends Model
{
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
		$model = '\App\Models\\'.$group;

		return $model::where('id',$this->author)->first()->name;
	}

	public function getEditorName($group)
	{
		$model = '\App\Models\\'.$group;

		return $model::where('id',$this->editor)->first()->name;
	}

	public function getPublisherName($group)
	{
		$model = '\App\Models\\'.$group;

		return $model::where('id',$this->publisher)->first()->name;
	}


}
