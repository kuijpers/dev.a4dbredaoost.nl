<?php

namespace Modules\Board\Entities\Models\Main;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TheBoardSettings extends Model
{
	use SoftDeletes;

	protected $fillable = [];

	protected $table = 'the_board_settings';



}
