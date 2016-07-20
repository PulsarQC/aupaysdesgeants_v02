<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CharsRequest;
use App\Char;

class CharsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chars = Char::all();
        return view('char.index', ['chars' => $chars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $char = new Char();
        return view('char.create', ['char' => $char]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CharsRequest $request)
    {
        $char = new Char();
        $data = $request->all();
        $char -> fill($data);
        $char -> save();
        return redirect()->action('CharsController@show', $char->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($char)
    {
        $int = intval($char);
        $char = Char::find($int);
        return view('char.show', ['char' => $char]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($char)
    {
        $int = intval($char);
        $char = Char::find($char);
        return view('char.edit', ['char' => $char]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CharsRequest $request, Char $char)
    {
        $data = $request -> all();
        $char -> update($data);
        return redirect()->action('CharsController@show', $char -> id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Char $char)
    {
        $char -> delete();
        return redirect() -> action('CharsController@index');
    }
}
