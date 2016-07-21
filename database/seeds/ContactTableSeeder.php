<?php

use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact')->insert([
            'titre' => 'Nous rejoindre',
            'courrielgeneral' => 'info@aupaysdesgeants.com',
            'courrielguy' => 'guy@aupaysdesgeants.com',
            'courrieldenise' => 'denise@aupaysdesgeants.com',
            'telephone' => '450 222-3888',
            'sansfrais' => '1 855 851-3072'
        ]);
    }
}
