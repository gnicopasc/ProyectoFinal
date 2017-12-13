<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Place;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Place::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request,
        // [
        //   'title' => 'required',
        //   'description'=>'required',
        //   'category_id'=>'required'
        // ],
        // [
        //   'title.required' => 'el campo title es requerido',
        //   'description.required' => 'el campo description es requerido',
        //   'category_id' => 'el campo categoria es requerido'
        // ]);

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
        //
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
