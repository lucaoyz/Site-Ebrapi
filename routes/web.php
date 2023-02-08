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

    /* Perfil */
    route::prefix('perfil')->group(function(){

        Route::get('/', [App\Http\Controllers\PerfilController::class, 'index'])->name('perfil');
        Route::put('/{user}', [App\Http\Controllers\PerfilController::class, 'atualizarPerfil'])->name('perfil.atualizarPerfil');
        Route::get('/alterar-senha', [App\Http\Controllers\PerfilController::class, 'alterarSenha'])->name('perfil.alterar-senha');
        Route::post('/change-password', [App\Http\Controllers\PerfilController::class, 'changePassword'])->name('perfil.changePassword');

    });

	Route::get('gerenciador-paginas', function () {
		return view('painel-adm.gerenciador-paginas');
	})->name('gerenciador-paginas');



	Route::get('contato', function () {
		return view('painel-adm.tables');
	})->name('contato');

});

Route::group(['middleware' => 'guest'], function () {

    Route::get('/', function () {
		return view('index');
	})->name('index');

    Route::get('/404', function () {
		return view('site.404');
	})->name('404');

    Route::get('/sobre', function () {
		return view('site.sobre');
	})->name('sobre');

    Route::get('/contato', function () {
		return view('site.contato');
	})->name('contato');

    Route::get('/feature', function () {
		return view('site.feature');
	})->name('feature');

    Route::get('/galeria', function () {
		return view('site.galeria');
	})->name('galeria');

    Route::get('/produtos', function () {
		return view('site.produtos');
	})->name('produtos');

    Route::get('/servicos', function () {
		return view('site.servicos');
	})->name('servicos');

    Route::get('/testimonial', function () {
		return view('site.testimonial');
	})->name('testimonial');

    Route::get('/time', function () {
		return view('site.time');
	})->name('time');

    Route::get('/quemsomoseziquiel', function () {
		return view('qrcode.index');
	})->name('qrcode');

});

require __DIR__.'/auth.php';
