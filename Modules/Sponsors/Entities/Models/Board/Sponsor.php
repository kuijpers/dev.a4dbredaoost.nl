<?php

namespace Modules\Sponsors\Entities\Models\Board;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sponsor extends Model
{
	use SoftDeletes;

	protected $dates = ['deleted_at'];

	protected $fillable = [];

    protected $table = 'sponsor';


    public function sponsor_image(){
    	return $this->hasOne(SponsorImage::class, 'sponsor_id')->first();
	}

	public function sponsor_link(){
    	return $this->hasOne(SponsorLink::class, 'sponsor_id')->first();
	}



}