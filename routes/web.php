<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Auth;
// apuntamos al controlador y al metodo index 
// con name le especificamos el nombre de la ruta
Route::get('/books',[BookController::class,'index'])->name('books.index');
Route::delete('/books/{id}',[BookController::class,'destroy'])->name('books.destroy');
Route::get('/books/{id}', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books/{id}', [BookController::class, 'update'])->name('books.update');
Route::post('/books', [BookController::class, 'store'])->name('books.store');

// Rutas con los autores
Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
Route::delete('/authors/{id}', [AuthorController::class, 'destroy'])->name('authors.destroy');
Route::get('/authors/{id}', [AuthorController::class, 'edit'])->name('authors.edit');
Route::put('/authors/{id}', [AuthorController::class, 'update'])->name('authors.update');
Route::post('/authors', [AuthorController::class, 'store'])->name('authors.store');

Route::middleware(['auth', 'role:adminstrador'])->group(function(){
  Route::get('/admin', function(){
    return view('home');
  })->middleware('role');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');