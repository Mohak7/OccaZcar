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

// Route::get('/', function () {
//     return view('welcome');
// });

 Route::get('/','App\Http\Controllers\HomepagesController@index')->name('homepage');
 Route::get('about','App\Http\Controllers\HomepagesController@about')->name('aboutpage');
 Route::get('voiture/{id}','App\Http\Controllers\HomepagesController@cardetail')->name('cardetailpage');
 Route::get('contact','App\Http\Controllers\HomepagesController@contact')->name('contactpage');


Route::get('Admin','App\Http\Controllers\DashboardController@index')->name('adminpage');

//debut les routes de Couleur
Route::resource('couleur', 'App\Http\Controllers\CouleurController')->names([
    'index'=> 'listecolor',
    'create'=> 'newcolor',
    'store'=> 'insertcolor',
    'edit'=>'editcolor',
    'update'=> 'updeditcolor',
    'destroy'=> 'delcolor'
]);
//comme nous utilisons un softdelete de ce  fait nous allons creer une autre commande pour restaurer ou supression Totla
Route::get('/delcouleur','App\Http\Controllers\CouleurController@sofderestore')->name('listedelcolor');
Route::get('/restorecolor/{id}','App\Http\Controllers\CouleurController@restoredestroy')->name('restorecolor');
Route::delete('/destorecolor/{id}','App\Http\Controllers\CouleurController@destoredefinitely')->name('deletecompletecolor');

//fin les routes de Couleur

//debut les routes de Nombre de vitesse
Route::resource('nbrevitesse', 'App\Http\Controllers\NbrevitesseController')->names([
    'index'=> 'listenbrv',
    'create'=> 'newnbrv',
    'store'=> 'insertnbrv',
    'edit'=>'editnbrv',
    'update'=> 'updeditnbrv',
    'destroy'=> 'delnbrv'
]);
//comme nous utilisons un softdelete de ce  fait nous allons creer une autre commande pour restaurer ou supression Totla
Route::get('/delnbrv','App\Http\Controllers\NbrevitesseController@sofderestore')->name('listedelnbrv');
Route::get('/restorenbrv/{id}','App\Http\Controllers\NbrevitesseController@restoredestroy')->name('restorenbrv');
Route::delete('/destorenbrv/{id}','App\Http\Controllers\NbrevitesseController@destoredefinitely')->name('deletecompletenbrv');

//fin les routes de Nombre de vitesse


//debut les routes de Nombre de Carburant
Route::resource('carburant', 'App\Http\Controllers\CarburantController')->names([
    'index'=> 'listecarbure',
    'create'=> 'newcarbure',
    'store'=> 'insertcarbure',
    'edit'=>'editcarbure',
    'update'=> 'updeditcarbure',
    'destroy'=> 'delcarbure'
]);
//comme nous utilisons un softdelete de ce  fait nous allons creer une autre commande pour restaurer ou supression Totla
Route::get('/delcarbure','App\Http\Controllers\CarburantController@sofderestore')->name('listedelcarbure');
Route::get('/restorecarbure/{id}','App\Http\Controllers\CarburantController@restoredestroy')->name('restorecarbure');
Route::delete('/destorecarbure/{id}','App\Http\Controllers\CarburantController@destoredefinitely')->name('deletecompletecarbure');

//fin les routes de Nombre de Carburant






//debut les routes de Transmission
Route::resource('transmission', 'App\Http\Controllers\TransmissionController')->names([
    'index'=> 'listetranz',
    'create'=> 'newtranz',
    'store'=> 'inserttranz',
    'edit'=>'edittranz',
    'update'=> 'updedittranz',
    'destroy'=> 'deltranz'
]);
//comme nous utilisons un softdelete de ce  fait nous allons creer une autre commande pour restaurer ou supression Totla
Route::get('/deltranz','App\Http\Controllers\TransmissionController@sofderestore')->name('listedeltranz');
Route::get('/restoretranz/{id}','App\Http\Controllers\TransmissionController@restoredestroy')->name('restoretranz');
Route::delete('/destoretranz/{id}','App\Http\Controllers\TransmissionController@destoredefinitely')->name('deletecompletetranz');

//fin les routes de Transmission

//debut les routes de marque
Route::resource('marque', 'App\Http\Controllers\MarqueController')->names([
    'index'=> 'listemarque',
    'create'=> 'newmarque',
    'store'=> 'insertmarque',
    'edit'=>'editmarque',
    'update'=> 'updeditmarque',
    'destroy'=> 'delmarque'
]);
//comme nous utilisons un softdelete de ce  fait nous allons creer une autre commande pour restaurer ou supression Totla
Route::get('/delmarque','App\Http\Controllers\MarqueController@sofderestore')->name('listedelmarque');
Route::get('/restoremarque/{id}','App\Http\Controllers\MarqueController@restoredestroy')->name('restoremarque');
Route::delete('/destoremarque/{id}','App\Http\Controllers\MarqueController@destoredefinitely')->name('deletecompletemarque');

//fin les routes de marque




//debut les routes de Modele de voiture
Route::resource('modele', 'App\Http\Controllers\ModelecarController')->names([
    'index'=> 'listemodele',
    'create'=> 'newmodele',
    'store'=> 'insertmodele',
    'edit'=>'editmodele',
    'update'=> 'updeditmodele',
    'destroy'=> 'delmodele'
]);
//comme nous utilisons un softdelete de ce  fait nous allons creer une autre commande pour restaurer ou supression Totla
Route::get('/delmodele','App\Http\Controllers\ModelecarController@sofderestore')->name('listedelmodele');
Route::get('/restoremodele/{id}','App\Http\Controllers\ModelecarController@restoredestroy')->name('restoremodele');
Route::delete('/destoremodele/{id}','App\Http\Controllers\ModelecarController@destoredefinitely')->name('deletecompletemodele');

//fin les routes de Modele de voiture





//debut les routes de categorie
Route::resource('category', 'App\Http\Controllers\CategoryController')->names([
    'index'=> 'listecate',
    'show'=> 'showcate',
    'create'=> 'newcate',
    'store'=> 'insertcate',
    'edit'=>'editcate',
    'update'=> 'updeditcate',
    'destroy'=> 'delcate'
]);

Route::get('/delcategory','App\Http\Controllers\CategoryController@sofderestore')->name('listedelcate');
Route::get('/restoredestroy/{id}','App\Http\Controllers\CategoryController@restoredestroy')->name('restoredelecate');
Route::delete('/destoredefinitely/{id}','App\Http\Controllers\CategoryController@destoredefinitely')->name('deletecompletecate');
//fin les routes de categorie

//debut les routes de Nombre d Annonce
Route::resource('annonce', 'App\Http\Controllers\AnnonceController')->names([
    'index'=> 'listeannonce',
    'create'=> 'newannonce',
    'store'=> 'insertannonce',
    'edit'=>'editannonce',
    'update'=> 'updeditannonce',
    'destroy'=> 'delannonce'
]);
//comme nous utilisons un softdelete de ce  fait nous allons creer une autre commande pour restaurer ou supression Totla
Route::get('/delannonce','App\Http\Controllers\AnnonceController@sofderestore')->name('listedelannonce');
Route::get('/restoreannonce/{id}','App\Http\Controllers\AnnonceController@restoredestroy')->name('restoreannonce');
Route::delete('/destoreannonce/{id}','App\Http\Controllers\AnnonceController@destoredefinitely')->name('deletecompleteannonce');

//fin les routes de Nombre de Annonce














//debut les routes de produits
Route::resource('produits', 'App\Http\Controllers\ProduitsController')->names([
    'index'=> 'listeprod',
    'show'=> 'showprod',
    'create'=> 'newprod',
    'store'=> 'insertprod',
    'edit'=>'editprod',
    'update'=> 'updeditprod',
    'destroy'=> 'delprod'
]);

//fin les routes de produits


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
