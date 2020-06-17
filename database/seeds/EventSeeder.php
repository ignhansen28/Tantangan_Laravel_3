<?php

use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'nama_event' => 'BNCC Techno Talk',
            'tanggal_event'=> '2020-06-15'
        ]);
        DB::table('events')->insert([
            'nama_event' => 'BNCC Techno Scape',
            'tanggal_event'=> '2020-06-15'
        ]);
        DB::table('events')->insert([
            'nama_event' => 'BNCC Idea Competition',
            'tanggal_event'=> '2020-06-15'
        ]);
        DB::table('events')->insert([
            'nama_event' => 'Skill Knowledge Atitude',
            'tanggal_event'=> '2020-06-15'
        ]);
        DB::table('events')->insert([
            'nama_event' => 'Company Visit',
            'tanggal_event'=> '2020-06-15'
        ]);
    }
}
