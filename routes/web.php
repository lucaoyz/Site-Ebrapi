<?php

use Illuminate\Support\Facades\Route;
use App\Models\Contato;

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

            Route::get('/', [App\Http\Controllers\ParceiroController::class, 'indexPainelAdm'])->name('parceiros');
            Route::get('/create', [App\Http\Controllers\ParceiroController::class, 'createParceiros'])->name('parceiros.create');
            Route::post('/store', [App\Http\Controllers\ParceiroController::class, 'storeParceiros'])->name('parceiros.store');
            Route::put('/atualizar/{parceiro}', [App\Http\Controllers\ParceiroController::class, 'atualizarParceiros'])->name('parceiros.atualizar');
            Route::delete('/delete/{parceiro}', [App\Http\Controllers\ParceiroController::class, 'deleteParceiros'])->name('parceiros.delete');

        });

        /*Painel adm Noticias*/
        Route::prefix('noticias')->group(function(){

            Route::get('/', [App\Http\Controllers\NoticiaController::class, 'indexPainelAdm'])->name('noticias');
            Route::get('/create', [App\Http\Controllers\NoticiaController::class, 'createNoticias'])->name('noticias.createNoticias');
            Route::post('/store', [App\Http\Controllers\NoticiaController::class, 'storeNoticias'])->name('noticias.storeNoticias');
            Route::put('/atualizar/{noticia}', [App\Http\Controllers\NoticiaController::class, 'atualizarNoticias'])->name('noticias.atualizarNoticias');
            Route::delete('/delete/{noticia}', [App\Http\Controllers\NoticiaController::class, 'deleteNoticias'])->name('noticias.deleteNoticias');
            Route::delete('/limpar/{noticia}', [App\Http\Controllers\NoticiaController::class, 'limparFotoNoticias'])->name('noticias.limparFotoNoticias');

            Route::get('/{noticia}/imagens/', [App\Http\Controllers\NoticiaController::class, 'fotoNoticiaIndex'])->name('noticias.fotoNoticia');
            Route::get('/{noticia}/imagens/create/', [App\Http\Controllers\NoticiaController::class, 'createFotoNoticias'])->name('noticias.create.fotoNoticias');
            Route::post('/{noticia}/imagens/store/', [App\Http\Controllers\NoticiaController::class, 'storeFotoNoticias'])->name('noticias.store.fotoNoticias');
            Route::put('/{noticia}/imagens/atualizar/{FotoNoticia}', [App\Http\Controllers\NoticiaController::class, 'atualizarFotoNoticias'])->name('noticias.atualizar.fotoNoticias');
            Route::delete('/{noticia}/imagens/delete/{FotoNoticia}', [App\Http\Controllers\NoticiaController::class, 'deleteFotoNoticias'])->name('noticias.delete.fotoNoticias');

        });

        /*Painel adm categoria*/
        Route::prefix('categoria')->group(function(){

            Route::get('/', [App\Http\Controllers\CategoriaController::class, 'indexPainelAdm'])->name('categoria');
            Route::post('/store', [App\Http\Controllers\CategoriaController::class, 'storeCategoria'])->name('categoria.storeCategoria');
            Route::put('/atualizar/{categoria}', [App\Http\Controllers\CategoriaController::class, 'atualizarCategoria'])->name('categoria.atualizarCategoria');
            Route::delete('/delete/{categoria}', [App\Http\Controllers\CategoriaController::class, 'deleteCategoria'])->name('categoria.deleteCategoria');

            Route::get('/{categoria}/subcategoria/', [App\Http\Controllers\CategoriaController::class, 'SubCategoria'])->name('subcategoria');
            Route::post('/{categoria}/subcategoria/store', [App\Http\Controllers\CategoriaController::class, 'storeSubCategoria'])->name('SubCategoria.storeSubCategoria');
            Route::put('/{categoria}/subcategoria/atualizar/{subcategoria}', [App\Http\Controllers\CategoriaController::class, 'atualizarSubCategoria'])->name('SubCategoria.atualizarSubCategoria');
            Route::delete('/{categoria}/subcategoria/delete/{subcategoria}', [App\Http\Controllers\CategoriaController::class, 'deleteSubCategoria'])->name('SubCategoria.deleteSubCategoria');

        });

        /*Painel adm produtos*/
        Route::prefix('produtos')->group(function(){

            Route::get('/', [App\Http\Controllers\ProdutoController::class, 'indexPainelAdm'])->name('produtos');
            Route::get('/create', [App\Http\Controllers\ProdutoController::class, 'createProdutos'])->name('produtos.create');
            Route::post('/store', [App\Http\Controllers\ProdutoController::class, 'storeProdutos'])->name('produtos.store');
            Route::put('/atualizar/{produto}', [App\Http\Controllers\ProdutoController::class, 'atualizarProdutos'])->name('produtos.atualizar');
            Route::delete('/delete/{produto}', [App\Http\Controllers\ProdutoController::class, 'deleteProdutos'])->name('produtos.delete');

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

        Route::get('/linhaorganica', [App\Http\Controllers\ProdutosController::class, 'linhaorganicaSite'])->name('site.linhaorganica');

        Route::get('/arroz', [App\Http\Controllers\ProdutosController::class, 'arrozSite'])->name('site.arroz');

        Route::get('/milho', [App\Http\Controllers\ProdutosController::class, 'milhoSite'])->name('site.milho');

        Route::get('/feijao', [App\Http\Controllers\ProdutosController::class, 'feijaoSite'])->name('site.feijao');

        Route::get('/soja', [App\Http\Controllers\ProdutosController::class, 'sojaSite'])->name('site.soja');

        Route::get('/sorgo', [App\Http\Controllers\ProdutosController::class, 'sorgoSite'])->name('site.sorgo');

        Route::get('/trigo', [App\Http\Controllers\ProdutosController::class, 'trigoSite'])->name('site.trigo');

        Route::get('/gramineas', [App\Http\Controllers\ProdutosController::class, 'gramineasSite'])->name('site.gramineas');

        Route::get('/leguminosas', [App\Http\Controllers\ProdutosController::class, 'leguminosasSite'])->name('site.leguminosas');

    });

    Route::get('/servicos', [App\Http\Controllers\ServicosController::class, 'servicosSite'])->name('site.servicos');

    Route::get('/time', [App\Http\Controllers\TimeController::class, 'timeSite'])->name('site.time');

    Route::get('/politicapriv', [App\Http\Controllers\IndexController::class, 'politicaprivSite'])->name('site.politicapriv');

    Route::get('/noticia/{noticia}', [App\Http\Controllers\NoticiaController::class, 'noticiaSite'])->name('site.noticia');

    Route::get('/noticias', [App\Http\Controllers\NoticiaController::class, 'noticiasSite'])->name('site.noticias');

    Route::get('/quemsomoseziquiel', function () {
		return view('qrcode.index');
	})->name('site.qrcode');

    Route::fallback(function(){
        $contato = Contato::all()->first();

        return view('site.404',[
            'contato' => $contato,
        ]);
    });



require __DIR__.'/auth.php';
