<?php

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


Route::group(['middleware' => 'auth'], function () {

	Route::get('dashboard', function () {
		return view('painel-adm.dashboard');
	})->name('dashboard');

	Route::get('user-management', function () {
		return view('painel-adm.user-management');
	})->name('user-management');

    Route::get('perfil', function () {
		return view('painel-adm.perfil.perfil');
	})->name('perfil');

	Route::get('contato', function () {
		return view('painel-adm.tables');
	})->name('contato');

});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', function () {
		return view('index');
	})->name('index');
});

require __DIR__.'/auth.php';
