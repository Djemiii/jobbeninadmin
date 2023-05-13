<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





//ADMIN
Route::get('/ ', 'App\Http\Controllers\Admin1Controller@index');

Route::get('admin/', function () {
  return view('Admin/tableaudebord');
});
Route::get('/nouvelpub', 'App\Http\Controllers\Admin2Controller@offresNonPubliees')->name('admin.nouvelpub');

Route::get('/detailnouvelpub/{id_user}/{id_offre}', 'App\Http\Controllers\Admin2Controller@show')->name('admin.detailnouvelpub');

Route::get('/detailnouvelpub/{id_user}/{id_offre}/rejeter', 'App\Http\Controllers\Admin2Controller@rejeterpub')->name('admin.rejeter');
    
Route::get('/detailnouvelpub/{id_user}/{id_offre}/valider', 'App\Http\Controllers\Admin2Controller@validerpub')->name('admin.valider');
    
   
Route::get('/offremodif', 'App\Http\Controllers\Admin2Controller@offremodif')->name('admin.offremodif');
 Route::get('/detailoffremodif/{id_user}/{id_offre}', 'App\Http\Controllers\Admin2Controller@show2')->name('admin.detailoffremodif');
    Route::get('/detailoffremodif/{id_user}/{id_offre}/valideroffremodif', 'App\Http\Controllers\Admin2Controller@valideroffremodif')->name('admin.valideroffremodif');
    Route::get('/detailoffremodif/{id_user}/{id_offre}/rejeter', 'App\Http\Controllers\Admin2Controller@rejetermodifpub')->name('admin.rejetermodif');
  
   
    Route::get('/ offresignal', function () {
      return view('Admin/offresignal');
    });

Route::get('/transaction', function () {
  return view('Admin/transaction');
});

Route::get('/offre/{id}', 'App\Http\Controllers\OffreController@show')->name('detail_offre');


Route::get('recruteur ', 'App\Http\Controllers\Admin1Controller@recruteur')->name('recruteur');
Route::get('postulant ', 'App\Http\Controllers\Admin1Controller@postulant')->name('postulant');
Route::get('freelancera ', 'App\Http\Controllers\Admin1Controller@freelancer')->name('freelancera');
Route::get('recruteur/{id}/desactiver', 'App\Http\Controllers\Admin1Controller@desactiverrecruteur')->name('desactiver.recruteur');
Route::get('recruteur/{id}/activer', 'App\Http\Controllers\Admin1Controller@activerrecruteur')->name('activer.recruteur');

Route::get('postulant/{id}/desactiver', 'App\Http\Controllers\Admin1Controller@desactiverpostulant')->name('desactiver.postulant');
Route::get('postulant/{id}/activer', 'App\Http\Controllers\Admin1Controller@activerpostulant')->name('activer.postulant');
Route::get('freelancer/{id}/desactiver', 'App\Http\Controllers\Admin1Controller@desactiverfreelancer')->name('desactiver.freelancer');
Route::get('freelancer/{id}/activer', 'App\Http\Controllers\Admin1Controller@activerfreelancer')->name('activer.freelancer');

Route::get('/addadmin', 'App\Http\Controllers\Admin1Controller@addadmin');
Route::post('/addadmin', 'App\Http\Controllers\Admin1Controller@inscriptionadmin');


Route::get('connexionadmin', function () {
  return view('Admin/connexionadmin');
});
Route::post('connexionadmin ', 'App\Http\Controllers\Admin1Controller@connexionadmin');
Route::get('adminj ', 'App\Http\Controllers\Admin1Controller@adminj')->name('adminj');



Route::get('/touteslesoffres', 'App\Http\Controllers\Admin2Controller@touteslesoffres')
->name('admin.touteslesoffres');



Route::get('/detailoffres/{id}/', 'App\Http\Controllers\Admin2Controller@show3')
->name('admin.detailoffres');
Route::get('/recruteur/{id}/detail', 'App\Http\Controllers\Admin1Controller@detailrecruteur')->name('detailrecruteur');
Route::get('/freelancera/{id}/detail', 'App\Http\Controllers\Admin1Controller@detailfreelancer')->name('detailfreelancer');
Route::get('/recruteur',  'App\Http\Controllers\Admin1Controller@searchrecruteur')->name('recruteurs.search');
