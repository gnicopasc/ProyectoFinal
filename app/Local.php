<?php

namespace Verde;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $table = 'categories';

    protected $fillable = ['name','email','direccion','tel' ,'despcripcion' ,'validar'];
}
