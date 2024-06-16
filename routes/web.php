<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkshopsController;

Route::view('/', 'home')->name('home');
Route::view('/contact', 'contact')->name('contact');
Route::get('/people', [App\Http\Controllers\personasController::class, 'index'])->name('people');
Route::get('people/{id}', [App\Http\Controllers\personasController::class, 'show'])->name('people.show');
//Route::view('/program', 'programs')->name('programs');
//Route::view('/guidance', 'guidance')->name('guidance');
//Route::get('/workshops', [App\Http\Controllers\WorkshopsController::class, 'index'])->name('workshops');
//Route::view('/workshops/{category}', 'workshopsCategory')->name('workshopsCategory')
//														 ->where('category', '[A-Za-z]+');

