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
        // factory(App\Product::class, 50)->create();
        factory(App\Order::class, 100)->create();
        // factory(App\User::class, 5)->create();
        // $this->call(UserSeeder::class);
    }
}
