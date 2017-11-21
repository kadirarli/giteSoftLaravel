<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function genres()
    {
        return $this->hasMany('App\Genre');
    }

}
