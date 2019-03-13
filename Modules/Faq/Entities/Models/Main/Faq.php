<?php

namespace Modules\Faq\Entities\Models\Main;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Faq extends Model
{
	use SoftDeletes;

	protected $fillable = [];

	protected $table = 'faq';
}
