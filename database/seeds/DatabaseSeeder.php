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
        $this->call([
                ApartmentSeeder::class,
                ServiceSeeder::class,
                SponsorSeeder::class,
                ImageSeeder::class,
                ViewsSeeder::class,
            ]
        );
    }
}
