<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
      protected $table = 'places';

      protected $fillable = ['name', 'location', 'address', 'tel', 'description', 'logo', 'restaurant', 'comercio',];

      protected $cast = [
            'restaurant' =>'boolean',
            'comercio' =>'boolean'
      ];

      public function user(){
            return $this->belongsTo(User::class);
      }

      public function comments(){
            return $this->hasMany(Comment::class);
      }

      public function images(){
            return $this->hasMany(Image::class);
      }

      public function categories(){
            return $this->belongsToMany(Category::class);
      }

      // public function categories(){
      //       return $this->hasMany('')
      // }
}
