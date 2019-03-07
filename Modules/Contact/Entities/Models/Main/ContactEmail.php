<?php

namespace Modules\Contact\Entities\Models\Main;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactEmail extends Model
{
	use SoftDeletes;

	protected $fillable = [];

	protected $table = 'contact_email';

	public function categories(){
		return $this->belongsToMany(ContactEmail::class, 'contact_categorie_contact_email', 'c_email_id', 'c_categorie_id');
	}

}
