<?php

namespace Modules\Sponsors\Entities\Models\Main;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SponsorInformation extends Model
{
	use SoftDeletes;

	protected $fillable = [];

	protected $table = 'sponsor_information';
}
