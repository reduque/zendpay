<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['id'];

	public function panels(){
	    return $this->hasMany('App\Pannel');
	}

}
