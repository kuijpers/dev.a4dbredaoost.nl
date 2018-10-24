<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Auth;

class BoardmembersDashboardSettings extends Model
{

	public static function settings()
	{
		return static::find(Auth::user()->id);
	}

}
