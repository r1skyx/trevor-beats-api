<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Beat;
use App\Models\Genre;

class BeatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beats = Beat::all();
        return $beats;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'bpm'=> 'required',
            'genre_id'=> 'required',
            'price'=> 'required',
            'filename'=> 'required',
            'slug'=> 'required'
        ]);
        return Beat::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Beat::find($id);
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
        $beat = Beat::find($id)->update($request->all());
        return $beat;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Beat::destroy($id);
    }

    public function search($name)
    {
        return Beat::where('name', 'like', '%'.$name.'%')->get();
    }

    public function filterGenre($id)
    {
        $genre = Genre::find($id);
        return $genre->beats;
    }

}
