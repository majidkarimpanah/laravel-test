<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

   
//protected $with=['posts','profile'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile()
    {
        return $this->hasOne(Profile::class)->withDefault(['age'=>'1937']);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function scopeLastPost($query,$min=40)
    {
        return $this->posts()->where('created_at','>=',Carbon::now()->subMinute($min));
    }

    public function rates()
    {
        return $this->morphMany(Rate::class,'rateable');
    }

    public function getFirstNameAttribute()
    {
        return explode(' ',$this->name)[0];
    }

    public function getEmailProviderAttribute()
    {
        $provider=explode('@',$this->email)[1];
        return explode('.',$provider)[0];
    }

    public function getNameAttribute()
    {
        return strtoupper($this->attributes['name']);
    }

    public function setFirstNameAttribute($value)
    {
        $name=$this->attributes['name'];
        $lastName=explode(' ',$name);
        $lastName=isset($lastName[1])?' '.$lastName[1]:'';
        $this->attributes['name']=$value.$lastName;
    }


}
