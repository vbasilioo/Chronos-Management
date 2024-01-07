<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [UserController::class, 'index']);

Route::post('/autenticar', [UserController::class, 'authenticateUser'])->name('autenticar');

Route::get('/esqueci-minha-senha', [UserController::class, 'showLinkRequestForm'])->name('esqueci-minha-senha');

Route::post('/recuperar-conta', [UserController::class, 'sendResetPasswordEmail'])->name('recuperar-conta');

Route::get('/dashboard', function() {
    return view('dashboard.index');
});