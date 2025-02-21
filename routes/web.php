<?php

use App\Livewire\Home;
use App\Livewire\Login;
use App\Livewire\SignupForm;
use App\Livewire\UserDashboard;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',Home::class)->name('home');
Route::get('/register',SignupForm::class)->name('register');
Route::get('/login', Login::class)->name('login');
Route::get('/user', UserDashboard::class)->name('user.dashboard');
