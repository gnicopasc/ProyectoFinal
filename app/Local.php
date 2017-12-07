<?php

namespace Verde;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $table = 'locals';

    protected $fillable = ['name','email','direccion','tel' ,'despcripcion' ,'validar'];


    public function user(){

      return $this->belongsTo('App\Local');

    }

    public function images(){

      return $this->hasMany('App\Image');
    }

    public function comments(){
      return $this->hasMany('App\Comment');

    }

    public function categories (){

      return $this->belongsToMany('App\Category');

  }

}
