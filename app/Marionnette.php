<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marionnette extends Model
{
    protected $table = 'marionnettes';
    
    protected $fillable = [
        'titre', 
        'img_url',
        'description'
   ,];
}
