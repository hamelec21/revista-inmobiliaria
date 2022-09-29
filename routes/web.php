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
//rutas publicas

Route::get('/', function () {
    return view('home');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/noticias', function () {
    return view('noticias');
});

Route::get('/contacto', function () {
    return view('contacto');
});



Route::get('contactanos', [\App\Http\Controllers\ContactanosController::class,'index'])->name('contactanos.index');
Route::post('contactanos', [\App\Http\Controllers\ContactanosController::class,'store'])->name('contactanos.store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//rutas del panel administrativo

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/panel/noticia/show-noticias',\App\Http\Livewire\Panel\Noticia\ShowNoticias::class)->name('show-noticias');
});


