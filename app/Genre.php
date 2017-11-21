<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function film()
    {
        return $this->belongsTo('App\Film');
    }
}
