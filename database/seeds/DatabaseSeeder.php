<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *s
     * @return void
     */
    public function run()
    {
        factory(\App\Movie::class, 10)->create();
        factory(\App\Comment::class, 10)->create();
    }
}
