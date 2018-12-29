<?php

namespace Modules\Didyouknow\Entities\Models\Board;

use Illuminate\Database\Eloquent\Model;

class Didyouknow_settings extends Model
{
    protected $fillable = [
    	'slug',
    	'name',
    	'description',
    	'value_bool',
    	'value_text',
	];
}
