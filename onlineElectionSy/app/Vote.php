<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $fillable = [
        'eId', 'cId', 'email', 'vote',
    ];
    public function getCandidate(){
    	return $this->hasMany('App\CandidateDetails');
    }
    public function gets(){
    	return $this->belongsTo('App\CandidateDetails','cId');
    }
}
