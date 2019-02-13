<?php

namespace Modules\Board\Entities\Models\Main;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TheBoard extends Model
{
	use SoftDeletes;

	protected $fillable = [];

	protected $table = 'boardmembers';


}
