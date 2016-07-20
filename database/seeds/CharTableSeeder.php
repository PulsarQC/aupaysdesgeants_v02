<?php

use Illuminate\Database\Seeder;

class CharTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chars')->insert([
            'titre' => 'Père Noël',
            'img_url' => 'noel.jpg',
            'description' => '',
        ]);
    }
}
