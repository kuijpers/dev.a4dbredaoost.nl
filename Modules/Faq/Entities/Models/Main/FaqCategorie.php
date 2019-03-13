<?php

namespace Modules\Faq\Entities\Models\Main;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FaqCategorie extends Model
{
	use SoftDeletes;

	protected $fillable = [];

	protected $table = 'faq_categorie';


	public function faqs(){
		return $this->hasMany(Faq::class, 'faq_categorie_id', 'id');
	}
}
