<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //use SoftDeletes;

    /*public static function boot()
    {
     static::addGlobalScope('x',function ($q){
         $q->where('id','>',6);
     });
    }*/
  /*  protected $casts=['body'=>'array',
    ];*/

   // protected $perPage=2;
    public function scopeIdsin102030($query)
    {
        $query->whereIn('id',[10,20,30]);

    }

    protected $fillable=['user_id','title','body'];
    protected $table='posts';
    protected $primaryKey='id';
    //public $timestamps = false;
    //public $dates=['deleted_at'];
    protected $connection='mysql';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class,'post__tags');
    }

    public function rates()
    {
        return $this->morphMany(Rate::class,'rateable');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function getTitleAttribute($vale)
    {
        return strtoupper($vale);
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title']=strtoupper($value);
    }
}
