<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;
use App\Models\Book;

class AuthorSeeder extends Seeder
{

    public function run()
    {
        # Se crea el seeder para autor, y poder concatenar con el seeder de libros
        Author::create([
            'name' => 'Dante Alighieri',
            'email' => 'dante@gmail.com',
            'birth_day' => '1265-05-21',
        ]);
        Author::create([
            'name' => 'George Orwell',
            'email' => 'george@gmail.com',
            'birth_day' => '1903-06-25',
        ]);
    }
}