<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\menuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registroController;
use App\Http\Controllers\contactanosControllers;

        use App\Mail\contactanosMailable;
        use Illuminate\Support\Facades\Mail;

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

Route::get('/', homeController::class)->name('home');
Route::resource('registro', registroController::class)->parameters(['registro'=>'menu']);

Route::get('contactanos', [contactanosControllers::class, 'index'])->name('contactanos.index');
Route::post('contactanos', [contactanosControllers::class, 'store'])->name('contactanos.store');

Route::post('menu',[menuController::class, 'store'])->name('menu.store');

Route::get('desayuno', [menuController::class, 'desayuno'])->name('menu.desayuno');
Route::get('comida', [menuController::class, 'comida'])->name('menu.comida');
Route::get('postres', [menuController::class, 'postres'])->name('menu.postres');
Route::get('bebidas', [menuController::class, 'bebidas'])->name('menu.bebidas');


