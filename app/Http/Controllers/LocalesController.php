<?php

namespace Verde\Http\Controllers;

use Illuminate\Http\Request;

class LocalesController extends Controller
{

  public function index(){

    return 'Estoy en el index';
  }

  public function create(){
    return 'Aca es para crear';
  }


}
