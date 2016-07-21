<?php

use Illuminate\Database\Seeder;

class CostumeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('costumes')->insert([
            'titre' => 'Père Noël',
            'img_url' => 'noel.jpg',
            'description' => '',
        ]);
    }
}
