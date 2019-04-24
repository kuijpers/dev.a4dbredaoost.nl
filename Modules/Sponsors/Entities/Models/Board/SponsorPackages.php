<?php

namespace Modules\Sponsors\Entities\Models\Board;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SponsorPackages extends Model
{
	use SoftDeletes;

	protected $dates = ['deleted_at'];

	protected $fillable = [];

	protected $table = 'sponsor_packages';


	public function sponsor_package(){
		return $this->hasMany(Sponsor::class, 'sponsor_packages_id', 'id')->get();
	}


}
