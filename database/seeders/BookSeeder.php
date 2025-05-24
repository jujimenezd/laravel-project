<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run()
    {
        # Se crea el seeder para libro, importante el author_id para relacionar con el seeder de autores
        Book::create([
            'author_id' => 1,
            'author' => 'Dante Alighieri',
            'title' => 'Divina Comedia',
            'price' => 15.99,
        ]);
        Book::create([
            'author_id' => 2,
            'author' => 'George Orwell',
            'title' => '1984',
            'price' => 22.99,
        ]);
    }
}