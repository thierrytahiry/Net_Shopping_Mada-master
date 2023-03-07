<?php

use App\Http\Controllers\Chaussures\ChaussureController;
use App\Http\Controllers\Produits\ProduitController;
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

Route::get('/', function () {
    return view('sites.accueils.accueil');
})->name('app_accueil');

Route::get('/chaussure', [ChaussureController::class, 'chaussure'])->name('app_chaussure');

Route::get('/produits', function () {
    return view('sites.electroniques.produits');
})->name('app_produits');
Route::get('/catalogue', [ChaussureController::class, 'chaussure'])->name('app_catalogue');
Route::get('/legume', function () {
    return view('sites.legumes.legume');
})->name('app_legume');
Route::get('/veisselle', function () {
    return view('sites.veisselles.veisselle');
})->name('app_veisselle');
Route::get('/beaute', function () {
    return view('sites.beautes.beaute');
})->name('app_beaute');
Route::get('/salon', function () {
    return view('sites.meubles.salon');
})->name('app_salon');
Route::get('/contact', function () {
    return view('sites.contacts.contact');
})->name('app_contact');

Route::get('produit', [ProduitController::class, 'produit'])->name('produit');
Route::post('/store', [ProduitController::class, 'store'])->name('store');
Route::get('/fetchall', [ProduitController::class, 'fetchAll'])->name('fetchAll');
Route::delete('/delete', [ProduitController::class, 'delete'])->name('delete');
Route::get('/edit', [ProduitController::class, 'edit'])->name('edit');
Route::post('/update', [ProduitController::class, 'update'])->name('update');