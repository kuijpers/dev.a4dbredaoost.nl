<?php

namespace Modules\Organisation\Entities\Models\Main;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TheOrganisationImage extends Model
{
	use SoftDeletes;
	protected $fillable = [];

	protected $table = 'the_organisation_image';

	public function item(){
		return $this->hasOne(TheOrganisation::class);
	}
}
