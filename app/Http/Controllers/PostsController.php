<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $places=Place::all();
      return view('places',compact('places'));
    }

    public function addPlace(){
      return view('posts.form');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPlace()
    {
      $this->validate($request,
      [
        'name' => 'required',
        'description'=>'required',
        // 'category_id'=>'required'
      ],
      [
        'name.required' => 'el campo nombre es requerido',
        'description.required' => 'el campo description es requerido',
        // 'category_id' => 'el campo categoria es requerido'
      ]);

      $place = new Place($request->all());
      $place->save();
      return redirect('places');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $post = new Place($request->all());
        $post->restaurant = 0;
        $post->comercio = 1;
        $post->user_id = 9;
        $post->logo = 'sjdaiosdjsio';
        $post->save();

        dd($post);

        return redirect('/places');

    ;}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
