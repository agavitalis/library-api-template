<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

    Route::get('/book', [BookController::class, 'getBooks']);

    Route::post('/book', [BookController::class, 'createBook']);

    Route::patch('/book', [BookController::class, 'updateBook']);

    Route::get('/book/{id}', [BookController::class, 'getBook']);

    Route::delete('/book/{id}', [BookController::class, 'deleteBook']);

    Route::get('/restricted-route', [BookController::class, 'getBooks']);

    Route::get('/custom-route', [BookController::class, 'getBooks']);





