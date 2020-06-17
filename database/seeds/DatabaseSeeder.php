<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EventSeeder::class);
        $this->call(PerusahaanSeeder::class);
        factory(App\Karyawan::class, 100)->create();
        
    }
}
