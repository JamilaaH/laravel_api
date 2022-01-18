<?php

use App\Http\Controllers\PanierController;
use App\Http\Controllers\ShopController;
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

Route::get('/', [ShopController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::middleware(['auth'])->group(function() {
    Route::get('/dashboard/monshop', [ShopController::class, 'monshop'])->name("monshop.index");
    Route::get('/dashboard/panier', [ShopController::class, 'panier'])->name("panier.index");
    Route::get('/dashboard/commandes', [ShopController::class, 'commandes'])->name("commandes.index");
    Route::post('/achat/{id}', [PanierController::class, 'achat'])->name('achat');
});

require __DIR__.'/auth.php';
