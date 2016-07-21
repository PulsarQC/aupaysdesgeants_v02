<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Geant extends Model
{
    protected $table = 'geants';
    
    protected $fillable = [
        'titre', 
        'img_url',
        'description'
   ];
}
