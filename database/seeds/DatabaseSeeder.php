<?php

use Illuminate\Database\Seeder;
use PlaceTabvleSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(PlaceTableSeeder::class);
    }
}
