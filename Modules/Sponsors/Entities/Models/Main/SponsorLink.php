<?php

namespace Modules\Sponsors\Entities\Models\Main;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SponsorLink extends Model
{
	use SoftDeletes;

	protected $fillable = [];

	protected $table = 'sponsors_link';
}
