<?php

namespace Verde;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
  protected $table = 'images';

  protected $fillable = ['name','local_id', 'category_id'];
}
