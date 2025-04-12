<?php

use App\Http\Controllers\Admin\ManifestacoesController as AdminManifestacoesController;
use App\Http\Controllers\ManifestacoesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(ManifestacoesController::class)->prefix("manifestacoes")->group(function(){
    Route::get('/form',"create");
    Route::get('/{codigo_rastreio}', "show" )->name("manifestacoes.listar-por-codigo");
    Route::post('/','store')->name('manifestacao.criar');
});

Route::controller(AdminManifestacoesController::class)->prefix('manifestacoes')->group(function(){
    Route::get('/', 'index')->name('admin.manifestacoes.listar');
    Route::put('/{id}', 'update')->name('manifestacao.update');
    Route::delete('/{id}', 'delete')->name('manifestacao.delete'); 
});
