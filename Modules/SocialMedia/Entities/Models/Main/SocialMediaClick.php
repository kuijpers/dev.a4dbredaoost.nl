<?php

namespace Modules\SocialMedia\Entities\Models\Main;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SocialMediaClick extends Model
{
	use SoftDeletes;

	protected $fillable = ['socialmedia_id',
						   'ip',
						   'click_datetime',
						];

	protected $table = 'socialmedia_click';
}
