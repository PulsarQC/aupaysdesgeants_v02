<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\MarionnettesRequest;
use App\Http\Controllers\Controller;
use App\Marionnette;

class MarionnettesController extends Controller
{
    public function index()
    {
        $marionnettes = Marionnette::all();
        return view('marionnette.index', ['marionnettes' => $marionnettes]);
    }

    public function create()
    {
        $marionnette = new Marionnette();
        return view('marionnette.create', ['marionnette' => $marionnette]);
    }

    public function store(MarionnettesRequest $request)
    {
        $marionnette = new Marionnette();
        $data = $request -> all();
        $marionnette -> fill($data);
        $marionnette -> save();
        return redirect() -> action('MarionnettesController@show', $marionnette->id);
    }

    public function show($marionnette)
    {
        $int = intval($marionnette);
        $marionnette = Marionnette::find($int);
        return view('marionnette.show', ['marionnette' => $marionnette]);
    }

    public function edit($marionnette)
    {
        $int = intval($marionnette);
        $marionnette = Marionnette::find($int);
        //dd($marionnette);
        return view('marionnette.edit', ['marionnette' => $marionnette]);
    }

    public function update(MarionnettesRequest $request, Marionnette $marionnette)
    {
        $data = $request -> all();
        $marionnette -> update($data);
        return redirect() -> action('MarionnettesController@show', $marionnette->id);
    }

    public function destroy(Marionnette $marionnette)
    {
        $marionnette -> delete();
        return redirect() -> action('MarionnettesController@index');
    }
}
