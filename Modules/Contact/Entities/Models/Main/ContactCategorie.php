<?php

namespace Modules\Contact\Entities\Models\Main;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactCategorie extends Model
{
	use SoftDeletes;

	protected $fillable = [];

	protected $table = 'contact_categorie';

	public function emails(){
		return $this->belongsToMany(ContactEmail::class, 'contact_categorie_contact_email', 'c_categorie_id', 'c_email_id');
	}

}
