<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    public function genre(){
        return $this->belongsTo(Genre::class, 'genre_id');
    }

    public function episode(){
        return $this->hasMany(Episode::class,'episode_id');
    }
}
