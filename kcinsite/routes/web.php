<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('/sobre-nos', [ApiController::class, 'showCompanyInfo'])->name('about');
Route::get('/servicos/edicao', [ApiController::class, 'showEditingServices'])->name('services.edition');
Route::get('/loja/box-surpresa', [ApiController::class, 'showBookBox'])->name('shop.box');
Route::get('/servicos/design-capa', [ApiController::class, 'showCoverDesignForm'])->name('services.cover');
Route::post('/servicos/design-capa', [ApiController::class, 'submitCoverDesignRequest'])->name('services.cover.submit');

