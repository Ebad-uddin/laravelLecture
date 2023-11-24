<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customController;
use App\Http\Controllers\second;
use App\Http\Controllers\singleAction;


// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/',[customController::class, 'index'])->name('home');
// Route::get('/about',[customController::class, 'about'])->name('about');

Route::controller(customController::class)->group(function(){
Route::get('/', 'index')->name('home');
Route::get('/about', 'about')->name('about');
// Route::get('/contact', 'contact')->name('contact');
});
Route::get('/contact',singleAction::class)->name('contact');