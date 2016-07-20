<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        Model::unguard();
        $this->call(AccueilTableSeeder::class);
        $this->call(CharTableSeeder::class);
        $this->call(ContactTableSeeder::class);
        $this->call(CostumeTableSeeder::class);
        $this->call(GeantTableSeeder::class);
        $this->call(HistoireTableSeeder::class);
        $this->call(MarionnetteTableSeeder::class);
    }
}
