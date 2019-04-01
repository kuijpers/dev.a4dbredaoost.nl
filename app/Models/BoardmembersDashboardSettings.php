<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;

class BoardmembersDashboardSettings extends Model
{

	use SoftDeletes;

	protected $guard = 'boardmember';

	protected $table = 'boardmembers_dashboard_settings';

	protected $fillable = [
							'boardmembers_id',
							'boardmembers_theme',
							'boardmembers_language',
						];

	// Get the settings for the user
	public static function settings()
	{
		return static::find(Auth::user()->id);
	}

	// Check if user has settings
	public static function settings_are_set(){

		if(!empty(static::settings()))
		{

			return TRUE;

		}

		return FALSE;
	}

}
