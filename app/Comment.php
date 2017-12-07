<?php

namespace Verde;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";

    protected $fillable = ['content', 'user_id', 'local_id'];


    public function user(){

      return $this->belongsTo('App\User');
      
    }

    public function Local(){

      return $this->belongsTo('App\Local');

    }

}
