<?php

use Illuminate\Database\Seeder;

class GeantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('geants')->insert([
            'titre' => 'Père Noël',
            'img_url' => 'noel.jpg',
            'description' => '',
        ]);
    }
}
