<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call(categoriaSeeder::class);
        $this->call(sucursalSeeder::class);
        $this->call(perfilSeeder::class);
    }
}
