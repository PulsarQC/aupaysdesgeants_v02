<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ImagesController extends Controller
{
    public function index() 
    {
        return view('images.index');
    }
    
    public function upload()
    {
        $file = ['img' => Input::file('img')];
        
        $rules = ['img' => 'required'];
        
        $validator = Validator::make($file, $rules);
        
        if($validator->fails()) {
            return redirect()->action('ImagesController@index')->withInput()->withErrors($validator);  
        }else {
            
            if (Input::file('img')->isValid()) {
                $destinationPath = 'uploads';
                $name = Input::file('img')->¨getClientOriginalName();
                $extension = Input::file('img')->getClientOriginalExtension();
                $fileName = $name.'.'.$extension;
                Input::file('img')->move($destinationPath, $fileName);
                Session::flash('success', 'Importation réussi');
                return redirect()->action('ImagesController@index');
            }else {
                Session::flash('error', 'Importation non valid');
                return redirect()->action('ImagesController@index');
            }
        }
    }
}
