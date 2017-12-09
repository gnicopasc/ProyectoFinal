<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  protected $table = "comments";

  protected $fillable = ['comment'];


  public function user(){

    return $this->belongsTo(User::class);

  }

  public function place(){

    return $this->belongsTo(Place::class);

  }
}
