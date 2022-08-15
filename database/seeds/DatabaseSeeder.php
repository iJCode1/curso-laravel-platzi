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
        // $this->call(UserSeeder::class);
        // Laravel 9:  \App\Models\Post::factory(80)->create();
        factory(App\Models\User::class, 1)->create();
        factory(App\Models\Post::class, 80)->create();
    }
}
