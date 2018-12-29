<?php

namespace Modules\Didyouknow\Entities\Models\Board;

use Illuminate\Database\Eloquent\Model;

class Didyouknow extends Model
{
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
