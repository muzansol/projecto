<?php
use App\Http\Controllers\ProducaoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EspecialidadeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EquipamentoController;
use App\Http\Controllers\DesenpenhoController;
use App\Http\Controllers\ParagemController;
use App\Http\Controllers\BlocoController;
use App\Http\Controllers\TipoTrabalhoController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\SectorController;
use App\Http\Controllers\PocoController;
use App\Http\Controllers\TrincheiraController;
use App\Http\Controllers\TipoParalizacaoController;
use App\Http\Controllers\RecolhaPocoController;
use App\Http\Controllers\PlanoController;
use App\Http\Controllers\RecolhaTrincheiraController;
use Illuminate\Support\Facades\Route;


Route::get('/', [EspecialidadeController::class, 'home'])->name('home');
 // ESPECIALIDADE
 Route::get('/index-especialidade', [EspecialidadeController::class, 'index'])->name('especialidade.index');
 Route::get('/create-especialidade', [EspecialidadeController::class, 'create'])->name('especialidade.create');
 Route::post('/store-especialidade', [EspecialidadeController::class, 'store'])->name('especialidade.store');
// Route::get('/show-especialidade/{id}', [EspecialidadeController::class, 'show'])->name('especialidade.show');
 Route::put('/update-especialidade/{id}', [EspecialidadeController::class, 'update'])->name('especialidade.update');
 Route::delete('/destroy-especialidade/{id}', [EspecialidadeController::class, 'destroy'])->name('especialidade.destroy');

 Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/show-profile', [ProfileController::class, 'show'])->name('profile.show');

    //Categorias

Route::get('/index-categoria', [CategoriaController::class, 'index'])->name('categoria.index');
Route::post('/store-categoria', [CategoriaController::class, 'store'])->name('categoria.store');
Route::put('/update-categoria/{id}', [CategoriaController::class, 'edit'])->name('categoria.update');
Route::delete('/destroy-categoria/{id}', [CategoriaController::class, 'delete'])->name('categoria.destroy');
//Route::get('/categoria-show/{id}', [CategoriaController::class, 'show'])->name('categoria.show');

    //Equipamentos

    Route::get('/index-equipamento', [EquipamentoController::class, 'index'])->name('equipamento.index');
    Route::post('/store-equipamento', [EquipamentoController::class, 'store'])->name('equipamento.store');
    Route::put('/update-equipamento/{id}', [EquipamentoController::class, 'edit'])->name('equipamento.update');
    Route::delete('/destroy-equipamento/{id}', [EquipamentoController::class, 'destroy'])->name('equipamento.destroy');

    
    //Desempenho

    Route::get('/index-desenpenho', [DesenpenhoController::class, 'index'])->name('desenpenho.index');
    Route::post('/store-desenpenho', [DesenpenhoController::class, 'store'])->name('desenpenho.store');
    Route::put('/update-desenpenho/{id}', [DesenpenhoController::class, 'edit'])->name('desenpenho.update');
    Route::delete('/destroy-desenpenho/{id}', [DesenpenhoController::class, 'destroy'])->name('desenpenho.destroy');

    //Paragens

    Route::get('/index-paragens', [ParagemController::class, 'index'])->name('paragens.index');
    Route::post('/store-paragens', [ParagemController::class, 'store'])->name('paragens.store');
    Route::put('/update-paragens/{id}', [ParagemController::class, 'edit'])->name('paragens.update');
    Route::delete('/destroy-paragens/{id}', [ParagemController::class, 'destroy'])->name('paragens.delete');

    //Blocos

    Route::get('/index-blocos', [BlocoController::class, 'index'])->name('blocos.index');
    Route::post('/store-blocos', [BlocoController::class, 'store'])->name('blocos.store');
    Route::put('/update-blocos/{id}', [BlocoController::class, 'edit'])->name('blocos.update');
    Route::delete('/destroy-blocos/{id}', [BlocoController::class, 'destroy'])->name('blocos.delete');

      //Poços

      Route::get('/index-poco', [PocoController::class, 'index'])->name('poco.index');
      Route::post('/store-poco', [PocoController::class, 'store'])->name('poco.store');
      Route::put('/update-poco/{id}', [PocoController::class, 'update'])->name('poco.update');
      Route::delete('/destroy-poco/{id}', [PocoController::class, 'destroy'])->name('poco.delete');

       //Trincheira

       Route::get('/index-trincheira', [TrincheiraController::class, 'index'])->name('trincheira.index');
       Route::post('/store-trincheira', [TrincheiraController::class, 'store'])->name('trincheira.store');
       Route::put('/update-trincheira/{id}', [TrincheiraController::class, 'edit'])->name('trincheira.update');
       Route::delete('/destroy-trincheira/{id}', [TrincheiraController::class, 'destroy'])->name('trincheira.delete');

        //Poco recolhidas

        Route::get('/index-pocoRecolhidos', [RecolhaPocoController::class, 'index'])->name('pocoRecolhidos.index');
        Route::post('/store-pocoRecolhidos', [RecolhaPocoController::class, 'store'])->name('pocoRecolhidos.store');
        Route::put('/update-pocoRecolhidos/{id}', [RecolhaPocoController::class, 'edit'])->name('pocoRecolhidos.update');
        Route::delete('/destroy-pocoRecolhidos/{id}', [RecolhaPocoController::class, 'destroy'])->name('pocoRecolhidos.delete');

        //Trincheira recolhidas

        Route::get('/index-trincheiraRecolhidos', [RecolhatrincheiraController::class, 'index'])->name('trincheiraRecolhidos.index');
        Route::post('/store-trincheiraRecolhidos', [RecolhatrincheiraController::class, 'store'])->name('trincheiraRecolhidos.store');
        Route::put('/update-trincheiraRecolhidos/{id}', [RecolhatrincheiraController::class, 'edit'])->name('trincheiraRecolhidos.update');
        Route::delete('/destroy-trincheiraRecolhidos/{id}', [RecolhatrincheiraController::class, 'destroy'])->name('trincheiraRecolhidos.delete');

       //Plano

       Route::get('/index-plano', [PlanoController::class, 'index'])->name('plano.index');
       Route::post('/store-plano', [PlanoController::class, 'store'])->name('plano.store');
       Route::put('/update-plano/{id}', [PlanoController::class, 'edit'])->name('plano.update');
       Route::delete('/destroy-plano/{id}', [PlanoController::class, 'destroy'])->name('plano.delete');

       // Tipos de trabalho

       Route::get('/index-tipotrabalho', [TipoTrabalhoController::class, 'index'])->name('tipotrabalho.index');
       Route::post('/store-tipotrabalho', [TipoTrabalhoController::class, 'store'])->name('tipotrabalho.store');
       Route::put('/update-tipotrabalho/{id}', [TipoTrabalhoController::class, 'edit'])->name('tipotrabalho.update');
       Route::delete('/destroy-tipotrabalho/{id}', [TipoTrabalhoController::class, 'destroy'])->name('tipotrabalho.delete');

       //Tipos Paralizações

       Route::get('/index-tiposparalizacoes', [TipoParalizacaoController::class, 'index'])->name('tiposparalizacoes.index');
       Route::post('/store-tiposparalizacoes', [TipoParalizacaoController::class, 'store'])->name('tiposparalizacoes.store');
       Route::put('/update-tiposparalizacoes/{id}', [TipoParalizacaoController::class, 'update'])->name('tiposparalizacoes.update');
       Route::delete('/destroy-tiposparalizacoes/{id}', [TipoParalizacaoController::class, 'destroy'])->name('tiposparalizacoes.delete');

       //Tabela Sectores

       Route::get('/index-sectore', [SectorController::class, 'index'])->name('sectore.index');
       Route::post('/store-sectore', [SectorController::class, 'store'])->name('sectore.store');
       Route::put('/update-sectore/{id}', [SectorController::class, 'edit'])->name('sectore.update');
       Route::delete('/destroy-sectore/{id}', [SectorController::class, 'destroy'])->name('sectore.delete');

       //Tabela Produtos

       Route::get('/index-produtos', [ProdutosController::class, 'index'])->name('produtos.index');
       Route::post('/store-produtos', [ProdutosController::class, 'store'])->name('produtos.store');
       Route::put('/update-produtos/{id}', [ProdutosController::class, 'edit'])->name('produtos.update');
       Route::delete('/destroy-produtos/{id}', [ProdutosController::class, 'destroy'])->name('produtos.delete');

       //Metalurgia

       Route::get('/index-metalurgia', [MetalurgiaController::class, 'index'])->name('metalurgia.index');
       Route::post('/store-metalurgia', [MetalurgiaController::class, 'store'])->name('metalurgia.store');
       Route::put('/update-metalurgia/{id}', [MetalurgiaController::class, 'edit'])->name('metalurgia.update');
       Route::delete('/destroy-metalurgia/{id}', [MetalurgiaController::class, 'delete'])->name('metalurgia.destroy');

       //Produção

       Route::get('/index-producao', [ProducaoController::class, 'index'])->name('producao.index');
       Route::post('/store-producao', [ProducaoController::class, 'store'])->name('producao.store');
       Route::put('/update-producao/{id}', [ProducaoController::class, 'edit'])->name('producao.update');
       Route::delete('/destroy-producao/{id}', [ProducaoController::class, 'delete'])->name('producao.destroy');



