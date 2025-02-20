<?php

use App\Livewire\Home;
use App\Livewire\SignupForm;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',Home::class)->name('home');
Route::get('/register',SignupForm::class)->name('register');
