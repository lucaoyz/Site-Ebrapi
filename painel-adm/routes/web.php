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
		return view('dashboard');
	})->name('dashboard');

	Route::get('billing', function () {
		return view('billing');
	})->name('billing');

	Route::get('profile', function () {
		return view('profile');
	})->name('profile');

	Route::get('user-management', function () {
		return view('user-management');
	})->name('user-management');

    Route::get('user-profile', function () {
		return view('user-profile');
	})->name('user-profile');

	Route::get('contato', function () {
		return view('tables');
	})->name('contato');

});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', function () {
		return view('index');
	})->name('index');
});

require __DIR__.'/auth.php';
