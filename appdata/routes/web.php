<?php

use App\Http\Controllers\ecriture;
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

// Route::get('/', function () {
//     return view('welcome');
// });

 Route::get('/','App\Http\Controllers\HomepagesController@index')->name('homepage');
 Route::get('about','App\Http\Controllers\HomepagesController@about')->name('aboutpage');
 Route::get('voiture/{id}','App\Http\Controllers\HomepagesController@cardetail')->name('cardetailpage');
 Route::get('contact','App\Http\Controllers\HomepagesController@contact')->name('contactpage');


Route::get('Admin','App\Http\Controllers\DashboardController@index')->name('adminpage');

//debut des routes de categorie
Route::resource('category', 'App\Http\Controllers\CategoryController')->names([
    'index'=> 'listecate',
    'show'=> 'showcate',
    'create'=> 'newcate',
    'store'=> 'insertcate',
    'edit'=>'editcate',
    'update'=> 'updeditcate',
    'destroy'=> 'delcate'
]);

Route::get('/delcategory','App\Http\Controllers\CategoryController@sofderestore')->name('restaudelete');
Route::get('/restoredestroy/{id}','App\Http\Controllers\CategoryController@restoredestroy')->name('restoredelecate');
Route::delete('/destoredefinitely/{id}','App\Http\Controllers\CategoryController@destoredefinitely')->name('deletecompletecate');
//fin des routes de categorie

//debut des routes de produits
Route::resource('produits', 'App\Http\Controllers\ProduitsController')->names([
    'index'=> 'listeprod',
    'show'=> 'showprod',
    'create'=> 'newprod',
    'store'=> 'insertprod',
    'edit'=>'editprod',
    'update'=> 'updeditprod',
    'destroy'=> 'delprod'
]);

//fin des routes de produits


//debut les routes de prix produits
Route::resource('prixprod', 'App\Http\Controllers\PriceController')->names([
    'index'=> 'listepriceprod',
    'show'=> 'showpriceprod',
    'create'=> 'newpriceprod',
    'store'=> 'insertpriceprod',
    'edit'=>'editpriceprod',
    'update'=> 'updeditpriceprod',
    'destroy'=> 'delpriceprod'
]);

//fin les routes de prix produits

Route::get('/test', [ecriture::class, 'teste']);

