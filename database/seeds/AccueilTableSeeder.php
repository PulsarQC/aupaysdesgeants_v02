<?php

use Illuminate\Database\Seeder;

class AccueilTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accueil')->insert([
            'titre' => 'ATELIER DE CRÉATION DÉCORS | PRODUCTEUR DÉLÉGUÉ | ÉVÉNEMENTS SPÉCIAUX',
            'titre_img1' => 'Char du Père Noël',
            'img1' => 'noel.jpg',
            'titre_img2' => 'Franfreluche',
            'img2' => 'fran.jpg',
            'titre_img3' => 'Dragon',
            'img3' => 'dragon.jpg',
            'titre_img4' => 'Funky jungle',
            'img4' => 'funky.jpg',
            'titre_img5' => 'Marionnettes variées',
            'img5' => 'marionnettes.jpg',
        ]);
    }
}
