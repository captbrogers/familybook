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
        $this->call(TimezonesTableSeeder::class);
        $this->call(UsersTableSeeder::class);

        // fake
        $this->call(TestPostsSeeder::class);
    }
}
