<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\AdminPasswordResetNotification;

class NewElection extends Authenticatable
{
    use Notifiable;
    //protected $guard='admin';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'date', 'noOfCandidate',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AdminPasswordResetNotification($token));
    }
    public function candidateDetails(){
        return $this->hasMany(CandidateDetails::class, 'eId');
    }

    public function electionDetails(){
        return $this->hasMany('App\Vote','eId');
    }
}
