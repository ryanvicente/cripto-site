<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BinanceController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('landing');
});
Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', [UserController::class, 'store'])->name('guardar_usuario');

Route::get('/login', function () {
    return view('login');
})-> name('login');
Route::post('/login',[UserController::class, 'login'])->name('login_usuario');

Route::get('/painel', function () {
    return view('painel');
})-> name('painel');

Route::get('/carteira', function () {
    return view('carteira');
})-> name('carteira');

Route::get('/trancactions', function () {
    return view('transacao');
})-> name('transacao');

Route::get('/relatorios', function () {
    return view('reporte');
})-> name('relatorio');

Route::get('/configuracao', function () {
    return view('configuracoes');
})-> name('configuracoes');

Route::middleware(['auth'])->group(function () {
    Route::get('/binance/form', [BinanceController::class, 'showForm'])->name('binance_form');
    Route::post('/binance/save', [BinanceController::class, 'saveKeys'])->name('binance_saveKeys');
});
Route::get('/binance/sincronizar', [BinanceController::class, 'sincronizarSaldo'])->name('binance_sincronizar');