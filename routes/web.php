<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ContactController::class, 'index']);

Route::post('/addcontact', [ContactController::class, 'add']);

Route::get('/edit/{id}', [ContactController::class, 'edit']);

Route::post('/update/{id}', [ContactController::class, 'update']);

Route::get('/delete/{id}', [ContactController::class, 'delete']);

Route::resource('categories', CategoryController::class);