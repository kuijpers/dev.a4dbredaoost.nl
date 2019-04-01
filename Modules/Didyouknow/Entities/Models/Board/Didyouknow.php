<?php

namespace Modules\Didyouknow\Entities\Models\Board;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Didyouknow extends Model
{
	use SoftDeletes;

	protected $dates = ['deleted_at'];

	protected $fillable = [
		'question',
		'answer',
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

	public $table = "didyouknow";

}
