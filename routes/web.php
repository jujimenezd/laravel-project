<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

// apuntamos al controlador y al metodo index 
Route::get('/books',[BookController::class,'index']);