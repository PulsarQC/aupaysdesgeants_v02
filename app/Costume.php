<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Costume extends Model
{
    protected $table = 'costumes';
    
    protected $fillable = [
        'titre', 
        'img_url',
        'description'
   ,];
}
