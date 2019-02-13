<?php

namespace Modules\Main\Entities\Models\Main;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SpotlightImage extends Model
{
	use SoftDeletes;
	protected $fillable = [];

	protected $table = 'spotlight_image';

	public function item(){
		return $this->hasOne(Spotlight::class);
	}
}
