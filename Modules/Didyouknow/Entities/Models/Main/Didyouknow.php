<?php

namespace Modules\Didyouknow\Entities\Models\Main;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Didyouknow extends Model
{

	use SoftDeletes;

    protected $fillable = [];

	public $table = "didyouknow";


	public static function show_single_random(){
		$show_single_random = static::inRandomOrder()
			->where('draft', '=', 1)
			->where('author_approve', '=', 1)
			->where('editor_approve', '=', 1)
			->where('publisher_approve', '=', 1)
			->whereDate('publish_date_start', '<=', Carbon::now('Europe/Amsterdam'))
			->select('question', 'answer')
			->first();


		return $show_single_random;
	}


}
