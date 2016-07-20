<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\GeantsRequest;
use App\Http\Controllers\Controller;
use App\Geant;

class GeantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $geants = Geant::all();
        return view('geant.index', ['geants' => $geants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $geant = new Geant();
        return view('geant.create', ['geant' => $geant]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GeantsRequest $request)
    {
        $geant = new Geant();
        $data = $request -> all();
        $geant -> fill($data);
        $geant -> save();
        return redirect() -> action('GeantsController@show', $geant -> id);
    }   
     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($geant)
    {
        $int = intval($geant);
        $geant = Geant::find($int);
        return view('geant.show', ['geant' => $geant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($geant)
    {
        $int = intval($geant);
        $geant = Geant::find($int);
        return view('geant.edit', ['geant' => $geant]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GeantsRequest $request, Geant $geant)
    {
        $data = $request -> all();
        $geant -> update($data);
        return redirect() -> action('GeantsController@show', $geant -> id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Geant $geant)
    {
        $geant -> delete();
        return redirect() -> action('GeantsController@index');
    }
}
