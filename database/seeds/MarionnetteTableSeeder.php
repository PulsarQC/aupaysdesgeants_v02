<?php

use Illuminate\Database\Seeder;

class MarionnetteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marionnettes')->insert([
            'titre' => 'Père Noël',
            'img_url' => 'noel.jpg',
            'description' => '',
        ]);
    }
}
