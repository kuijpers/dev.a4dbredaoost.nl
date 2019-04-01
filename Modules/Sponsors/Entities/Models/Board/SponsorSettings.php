<?php

namespace Modules\Sponsors\Entities\Models\Board;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SponsorSettings extends Model
{
	use SoftDeletes;

	protected $dates = ['deleted_at'];

	protected $fillable = [];

	protected $table = 'sponsors_settings';
}
