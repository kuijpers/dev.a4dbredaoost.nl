<?php

namespace Modules\Calendar\Entities\Models\Main;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Calendar extends Model
{
//	use SoftDeletes;
    protected $fillable = ['name','slug'];

    protected $table = 'calendar';


	public function calendar_groups()
	{
		return $this->belongsToMany(CalendarGroup::class);
	}


}
