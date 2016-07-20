<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CostumesRequest;
use App\Http\Controllers\Controller;
use App\Costume;

class CostumesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $costumes = Costume::all();
        return view('costume.index', ['costumes' => $costumes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $costume = new Costume();
        return view('costume.create', ['costume' => $costume]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CostumesRequest $request)
    {
        $costume = new Costume();
        $data = $request -> all();
        $costume -> fill($data);
        $costume -> save();
        return redirect() -> action('CostumesController@show', $costume['id']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($costume)
    {
        $int = intval($costume);
        $costume = Costume::find($int);
        return view('costume.show', ['costume' => $costume]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($costume)
    {
        $int = intval($costume);
        $costume = Costume::find($int);
        return view('costume.edit', ['costume' => $costume]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CostumesRequest $request, Costume $costume)
    {
        $data = $request -> all();
        $costume -> update($data);
        return redirect() -> action('CostumesController@show', $costume['id']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Costume $costume)
    {
        $costume -> delete();
        return redirect() -> action('CostumesController@index');
    }
}
