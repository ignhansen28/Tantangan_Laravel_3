<?php

use Illuminate\Database\Seeder;

class PerusahaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perusahaans')->insert([
            'event_id' => 1,
            'nama_perusahaan'=> 'Tokopedia'
        ]);
        DB::table('perusahaans')->insert([
            'event_id' => 2,
            'nama_perusahaan'=> 'Gojek'
        ]);
        DB::table('perusahaans')->insert([
            'event_id' => 3,
            'nama_perusahaan'=> 'Grab'
        ]);
        DB::table('perusahaans')->insert([
            'event_id' => 4,
            'nama_perusahaan'=> 'Blibli.com'
        ]);
        DB::table('perusahaans')->insert([
            'event_id' => 5,
            'nama_perusahaan'=> 'Shopee'
        ]);
    }
}
