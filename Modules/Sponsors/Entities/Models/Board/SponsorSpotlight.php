<?php

namespace Modules\Sponsors\Entities\Models\Board;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SponsorSpotlight extends Model
{
	use SoftDeletes;

	protected $dates = ['deleted_at'];

	protected $fillable = [];

	protected $table = 'sponsors_spotlight';
}
