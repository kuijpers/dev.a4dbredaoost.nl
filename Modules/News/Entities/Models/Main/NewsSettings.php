<?php

namespace Modules\News\Entities\Models\Main;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsSettings extends Model
{
	use SoftDeletes;

    protected $fillable = 	[
    							'name',
    							'slug',
    							'description',
    							'value_bool',
    							'value_text',

							];

	protected $table = 'news_settings';
}
