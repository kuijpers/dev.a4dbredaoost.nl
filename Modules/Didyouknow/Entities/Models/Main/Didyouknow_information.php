<?php

namespace Modules\Didyouknow\Entities\Models\Main;

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
}
