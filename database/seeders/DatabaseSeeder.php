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
        # Registramos el seeder de libros y autores, importante el orden de ejecución, primero creamos los autores y luego los libros
        $this->call([
            AuthorSeeder::class,
            BookSeeder::class,
        ]);
    }
}