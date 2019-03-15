<?php

namespace App\Models\Main;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WebSettings extends Model
{
	use SoftDeletes;

	protected $fillable = 	[
		'name',
		'slug',
		'description',
		'value_bool',
		'value_text',

	];

	protected $table = 'web_settings';
}
