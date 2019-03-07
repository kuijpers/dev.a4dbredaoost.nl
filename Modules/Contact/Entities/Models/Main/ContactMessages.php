<?php

namespace Modules\Contact\Entities\Models\Main;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactMessages extends Model
{
	use SoftDeletes;

	protected $fillable = [];

	protected $table = 'contact_messages';
}
