<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Histoire extends Model
{
    protected $table = 'histoire';
    
    protected $fillable = [
        'titre_histoire', 
        'titre_realisation', 
        'titre_service', 
        'titre_produit', 
        'img_url_guy',
        'img_url_denise',
        'description_histoire',
        'description_guy',
        'description_denise',
        'description_service',
        'description_produit',
        'description_realisation',
   ];
}
