<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::inertia('/', 'Index');

Route::inertia('/login', 'Login');

Route::inertia('/users', 'User/Index');

Route::get('/santri/{id}', function ($id) {
    return Inertia::render('Santri', [
        'id' => $id
    ]);
});
