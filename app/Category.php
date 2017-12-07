<?php

namespace Verde;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['tipo', 'name', 'local_id'];

    public function locals (){

      return $this->belongsToMany('App\Local');
    }
}
