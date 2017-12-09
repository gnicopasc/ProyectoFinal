<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $table = 'categories';

  protected $fillable = ['food'];

  public function places(){

    return $this->belongsToMany(Place::class);
  }
  public function users(){

    return $this->belongsToMany(User::class);
  }
}
