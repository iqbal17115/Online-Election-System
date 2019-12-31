<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\AdminPasswordResetNotification;

class CandidateDetails extends Authenticatable
{
    use Notifiable;
    //protected $guard='admin';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cId','eId', 'cName', 'info', 'image',
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
    public function getVote(){
        return $this->hasMany('App\Vote','eId');
    }
}
