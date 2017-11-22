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

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

}
