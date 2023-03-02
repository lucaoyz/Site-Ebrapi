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
            Route::put('/atualizar', [App\Http\Controllers\ContatoController::class, 'atualizarContato'])->name('contato.atualizarContato');

        });

        /*Painel adm Missao*/
        Route::prefix('missao')->group(function(){

            Route::get('/', [App\Http\Controllers\SobreController::class, 'indexPainelAdm'])->name('missao');
            Route::put('/atualizar', [App\Http\Controllers\SobreController::class, 'atualizarMissao'])->name('missao.atualizarMissao');

        });

        /*Painel adm Parceiros*/
        Route::prefix('parceiros')->group(function(){

            Route::get('/', function () {
                return view('parceiros');
            })->name('parceiros');

        });

        /*Painel adm Noticias*/
        Route::prefix('noticias')->group(function(){

            Route::get('/', [App\Http\Controllers\NoticiaController::class, 'indexPainelAdm'])->name('noticias');
            Route::get('/create', [App\Http\Controllers\NoticiaController::class, 'createNoticias'])->name('noticias.createNoticias');
            Route::post('/store', [App\Http\Controllers\NoticiaController::class, 'storeNoticias'])->name('noticias.storeNoticias');
            Route::get('/editar/{noticia}', [App\Http\Controllers\NoticiaController::class, 'editarNoticias'])->name('noticias.editarNoticias');
            Route::put('/atualizar/{noticia}', [App\Http\Controllers\NoticiaController::class, 'atualizarNoticias'])->name('noticias.atualizarNoticias');
            Route::delete('/delete/{noticia}', [App\Http\Controllers\NoticiaController::class, 'deleteNoticias'])->name('noticias.deleteNoticias');

            Route::get('/{noticia}/imagens/', [App\Http\Controllers\NoticiaController::class, 'fotoNoticiaIndex'])->name('noticias.fotoNoticia');
            Route::get('/{noticia}/imagens/create/', [App\Http\Controllers\NoticiaController::class, 'createFotoNoticias'])->name('noticias.create.fotoNoticias');
            Route::post('/{noticia}/imagens/store/', [App\Http\Controllers\NoticiaController::class, 'storeFotoNoticias'])->name('noticias.store.fotoNoticias');
            Route::get('/{noticia}/imagens/editar/{foto_noticia}', [App\Http\Controllers\NoticiaController::class, 'editarFotoNoticias'])->name('noticias.editar.fotoNoticias');
            Route::put('/{noticia}/imagens/atualizar/{foto_noticia}', [App\Http\Controllers\NoticiaController::class, 'atualizarFotoNoticias'])->name('noticias.atualizar.fotoNoticias');
            Route::delete('/{noticia}/imagens/delete/{foto_noticia}', [App\Http\Controllers\NoticiaController::class, 'deleteFotoNoticias'])->name('noticias.delete.fotoNoticias');

            Route::get('/categoria', [App\Http\Controllers\CategoriaController::class, 'indexPainelAdm'])->name('categoria');
            Route::post('/categoria/store', [App\Http\Controllers\CategoriaController::class, 'storeCategoria'])->name('categoria.storeCategoria');
            Route::put('/categoria/atualizar/{categoria}', [App\Http\Controllers\CategoriaController::class, 'atualizarCategoria'])->name('categoria.atualizarCategoria');
            Route::delete('/categoria/delete/{categoria}', [App\Http\Controllers\CategoriaController::class, 'deleteCategoria'])->name('categoria.deleteCategoria');
            Route::any('/categoria/search', [App\Http\Controllers\CategoriaController::class, 'searchCategoria'])->name('categoria.searchCategoria');

        });

        /*Painel adm produtos*/
        Route::prefix('produtos')->group(function(){

            Route::get('/', function () {
                return view('produtos');
            })->name('produtos');

        });
    });
});

    Route::get('/', [App\Http\Controllers\IndexController::class, 'indexSite'])->name('site.index');

    Route::get('/404', [App\Http\Controllers\IndexController::class, 'erroSite'])->name('site.404');

    Route::get('/sobre', [App\Http\Controllers\SobreController::class, 'indexSite'])->name('site.sobre');

    Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'indexSite'])->name('site.contato');

    Route::get('/historico', [App\Http\Controllers\HistoricoController::class, 'indexSite'])->name('site.historico');

    Route::prefix('produtos')->group(function(){

        Route::get('/', [App\Http\Controllers\ProdutosController::class, 'indexSite'])->name('site.produtos');

        Route::get('/defensivos', [App\Http\Controllers\ProdutosController::class, 'defensivosSite'])->name('site.defensivos');

        Route::get('/fertilizantes', [App\Http\Controllers\ProdutosController::class, 'fertilizantesSite'])->name('site.fertilizantes');

        Route::get('/biologicos', [App\Http\Controllers\ProdutosController::class, 'biologicosSite'])->name('site.biologicos');

        Route::get('/sementes', [App\Http\Controllers\ProdutosController::class, 'sementesSite'])->name('site.sementes');

    });

    Route::get('/servicos', [App\Http\Controllers\ServicosController::class, 'servicosSite'])->name('site.servicos');

    Route::get('/time', [App\Http\Controllers\TimeController::class, 'timeSite'])->name('site.time');

    Route::get('/noticias', [App\Http\Controllers\NoticiaController::class, 'noticiasSite'])->name('site.noticias');

    Route::get('/quemsomoseziquiel', function () {
		return view('qrcode.index');
	})->name('site.qrcode');

require __DIR__.'/auth.php';
