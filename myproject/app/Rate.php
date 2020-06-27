<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $table='rates';
    protected $fillable=['rateable_id','rate','rateable_type'];

    public function rateable()
    {
        return $this->morphTo();
    }
}
