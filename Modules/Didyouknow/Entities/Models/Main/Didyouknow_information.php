<?php

namespace Modules\Didyouknow\Entities\Models\Main;

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
}
