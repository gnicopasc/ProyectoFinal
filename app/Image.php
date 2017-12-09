<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    protected $fillable = ['src'];


    public function place(){
        $this->belongsTo(Place::class);
    }
}
