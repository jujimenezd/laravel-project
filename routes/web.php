<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

// apuntamos al controlador y al metodo index 
// con name le especificamos el nombre de la ruta
Route::get('/books',[BookController::class,'index'])->name('books.index');
Route::delete('/books/{id}',[BookController::class,'destroy'])->name('books.destroy');
Route::get('/books/{id}', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books/{id}', [BookController::class, 'update'])->name('books.update');
Route::post('/books', [BookController::class, 'store'])->name('books.store');