<?php

namespace Modules\Faq\Entities\Models\Main;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FaqInformation extends Model
{
	use SoftDeletes;

	protected $fillable = [];

	protected $table = 'faq_information';
}
