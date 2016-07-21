<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accueil extends Model
{
    protected $table = 'accueil';
    
    protected $fillable = [
        'titre',
        'titre_img1',
        'img1',
        'titre_img2',
        'img2',
        'titre_img3',
        'img3',
        'titre_img4',
        'img4',
        'titre_img5',
        'img5',
    ];
}
