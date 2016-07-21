<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\HistoireRequest;
use App\Http\Controllers\Controller;
use App\Histoire;

class HistoireController extends Controller
{
    public function index()
    {
        $histoire = Histoire::all();
        return view('histoire.index', ['histoire' => $histoire]);
    }
    
    public function edit(Histoire $histoire)
    {
        $histoire = Histoire::find(1);
        return view('histoire.edit', ['histoire' => $histoire]);
    }
    
    public function update(HistoireRequest $request)
    {
        $histoire = Histoire::find(1);
        $data = $request -> all();
        $histoire -> fill($data);
        $histoire -> save();
        return redirect() -> action('HistoireController@index');
    }
}
