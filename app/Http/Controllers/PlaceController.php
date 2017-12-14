<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Place;
use Illuminate\Support\Facades\Auth;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $places = Place::all();
        return view('places.index', compact('places'));
    }

    public function indexB(){

        $places=Place::all();
        // dd($places);
        $places=$places->where("user_id","=",Auth::User()->id);
        return view('places.indexB', compact('places'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('places.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
         $request,
         [
           'name' => 'required',
           'location' => 'required',
           'address' => 'required',
           'tel' =>'numeric | between:0,99999999',
           'description'=>'required'
         ],
         [
           'name.unique' => 'Ya hay un lugar registrado con ese nombre',
           'name.required' => 'El nombre es obligatorio',
           'location.required' => 'Indique una provincia o localidad',
           'address.required' => 'Indique una dirección',
           'tel' => 'El campo :attribute debe ser un número',
           'description' => 'Describa brevemente su comercio',
           'rating.between' => 'Rating, entre 1 y 10',
         ]
       );
        $place = new Place($request->all());
        $place->user_id = Auth::User()->id;
        $place->save();

        return redirect()->route('places.index');



    // $nombre = 'producto' . $request->name .'.'. $request->file('images')->extension();
    // $path = $request->file('images')->storePubliclyAs('public/productos', $nombre);
    // $producto = new Product($request->all());
    // $producto->images = "/storage/productos/".$nombre;
    // $producto->save();
    // dd($producto);
    // return redirect('/productos');

  /* src={{$place->avatar}} */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $place = Place::findOrFail($id);
        return view('show.edit', compact('place'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $place = Place::findOrFail($id);
      return view('places.edit', compact('place'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $place = Place::findOrFail($id);
        $place->fill($request->all());
        $place->save();

        return redirect()->route('places.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $place = Place::findOrFail($id);
          $place->delete();

          return redirect()->route('places.index');
    }
}
