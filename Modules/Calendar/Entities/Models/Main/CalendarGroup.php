<?php

namespace Modules\Calendar\Entities\Models\Main;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CalendarGroup extends Model
{
//	use SoftDeletes;

    protected $fillable = ['name','slug'];

	protected $table = 'calendar_group';


	public function events()
	{
		return $this->belongsToMany(Calendar::class);
	}


}
