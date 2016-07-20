<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\AccueilRequest;
use App\Http\Controllers\Controller;
use App\Accueil;

class AccueilController extends Controller
{
    public function index() 
    {
        $accueil = Accueil::all();
        return view('accueil.index')->with('accueil', $accueil);
    }
    
    public function edit(Accueil $accueil) 
    {
        $accueil = Accueil::find(1);
        return view('accueil.edit', ['accueil' => $accueil]);
    }
    
    public function update(AccueilRequest $request, Accueil $accueil)
    {
        $accueil = Accueil::find(1);
        $data = $request -> all();
        $accueil -> fill($data);
        $accueil -> save();
        return redirect() -> action('AccueilController@index');
    }
}
