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

    Route::prefix('painel')->group(function(){

        Route::get('/', function () {
            return view('painel-adm.dashboard');
        })->name('dashboard');

        /* Perfil */
        Route::prefix('perfil')->group(function(){

            Route::get('/', [App\Http\Controllers\PerfilController::class, 'index'])->name('perfil');
            Route::put('/{user}', [App\Http\Controllers\PerfilController::class, 'atualizarPerfil'])->name('perfil.atualizarPerfil');
            Route::get('/alterar-senha', [App\Http\Controllers\PerfilController::class, 'alterarSenha'])->name('perfil.alterar-senha');
            Route::post('/change-password', [App\Http\Controllers\PerfilController::class, 'changePassword'])->name('perfil.changePassword');

        });

        Route::get('gerenciador-paginas', function () {
            return view('painel-adm.gerenciador-paginas');
        })->name('gerenciador-paginas');


        /*Painel adm Contato*/
        Route::prefix('contato')->group(function(){

            Route::get('/', [App\Http\Controllers\ContatoController::class, 'indexPainelAdm'])->name('contato');

        });

        /*Painel adm Missao*/
        Route::prefix('missao')->group(function(){

            Route::get('/', function () {
                return view('missao');
            })->name('missao');

        });

        /*Painel adm Parceiros*/
        Route::prefix('parceiros')->group(function(){

            Route::get('/', function () {
                return view('parceiros');
            })->name('parceiros');

        });

        /*Painel adm Noticias*/
        Route::prefix('noticias')->group(function(){

            Route::get('/', function () {
                return view('noticias');
            })->name('noticias');

        });

        /*Painel adm produtos*/
        Route::prefix('produtos')->group(function(){

            Route::get('/', function () {
                return view('produtos');
            })->name('produtos');

        });
    });
});

    Route::get('/', function () {
        return view('index');
    })->name('site.index');

    Route::get('/404', function () {
		return view('site.404');
	})->name('site.404');

    Route::get('/sobre', function () {
		return view('site.sobre');
	})->name('site.sobre');

    Route::get('/contato', function () {
		return view('site.contato');
	})->name('site.contato');

    Route::get('/feature', function () {
		return view('site.feature');
	})->name('site.feature');

    Route::get('/galeria', function () {
		return view('site.galeria');
	})->name('site.galeria');

    Route::get('/produtos', function () {
		return view('site.produtos');
	})->name('site.produtos');

    Route::get('/defensivos', function () {
		return view('site.defensivos');
	})->name('defensivos');

    Route::get('/fertilizantes', function () {
		return view('site.fertilizantes');
	})->name('fertilizantes');

    Route::get('/biologicos', function () {
		return view('site.biologicos');
	})->name('biologicos');

    Route::get('/sementes', function () {
		return view('site.sementes');
	})->name('sementes');

    Route::get('/servicos', function () {
		return view('site.servicos');
	})->name('site.servicos');

    Route::get('/testimonial', function () {
		return view('site.testimonial');
	})->name('site.testimonial');

    Route::get('/time', function () {
		return view('site.time');
	})->name('site.time');

    Route::get('/quemsomoseziquiel', function () {
		return view('qrcode.index');
	})->name('site.qrcode');

require __DIR__.'/auth.php';
