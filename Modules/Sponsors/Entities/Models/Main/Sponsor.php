<?php

namespace Modules\Sponsors\Entities\Models\Main;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sponsor extends Model
{
	use SoftDeletes;

	protected $fillable = [];

	protected $table = 'sponsor';


	public function with_package(){

		return $this->hasOne(SponsorPackages::class, 'id', 'sponsor_packages_id')->first();

	}

	public function with_link(){

		return $this->hasOne(SponsorLink::class, 'sponsor_id', 'id')->first();

	}

	public function with_image(){

		return $this->hasOne(SponsorImage::class, 'sponsor_id', 'id')->first();

	}



}
