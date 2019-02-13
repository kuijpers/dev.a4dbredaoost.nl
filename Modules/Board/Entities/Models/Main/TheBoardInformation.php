<?php

namespace Modules\Board\Entities\Models\Main;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TheBoardInformation extends Model
{
	use SoftDeletes;

	protected $fillable = [];

	protected $table = 'the_board_information';



}
