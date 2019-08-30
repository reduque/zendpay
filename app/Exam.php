<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $guarded = ['id'];

    public function scopeSearch($query, $filter){
		if($filter<>''){
			$query->where(function($q) use ($filter){
                $q->where('name','like','%' . $filter . '%');
                $q->orwhere('full_name','like','%' . $filter . '%');
                $q->orwhere('quest_code','like','%' . $filter . '%');
            });
		}
	}

	public function relacionado(){
	    return $this->hasOne('App\ExamPanel')->where('panel_id',session('panel_id'));
	}

}
