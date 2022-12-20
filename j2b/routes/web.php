<?php
use App\Http\Controllers\UserProfilController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\ShowentrepriseController;
use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;

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
    return view('welcome');
});
Route::get('/showprofil', function () {
    return view('showprofil');
});
Route::get('/showfacture', function () {
    return view('showfacture');
});
Route::get('/map', function () {
    return view('map');
});
Route::get('/add_formation', function () {
    return view('add_formation');
});

Route::get('/formations', function () {
    return view('formations');
});
Route::get('/add_entreprise', function () {
    return view('add_entreprise');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('/user_profil', function () {
    return view('user_profil');
});
Route::post('/user_profil',[UserProfilController::class,'add']) -> name('new-profil');

Route::get('/showprofil/{id}',[UserProfilController::class, 'index'])->name('profil.show');
Route::get('/showformation/{id}',[FormationController::class, 'showw'])->name('show.formation');
Route::get('/showfacture/{id}',[FactureController::class, 'index'])->name('show.facture');
Route::get('/showentreprise/{id}',[ShowentrepriseController::class, 'index2'])->name('show.entreprise');

//Route::resource('users',UpdateController::class);
Route::post('/showprofil', [UserProfilController::class,'update']);
Route::get('/users',[UserProfilController::class, 'ShowUserlist']);
//Route::get('/users',[FormationController::class, 'Showformationlist']);
Route::get('/delete/{id}fa',[UserProfilController::class, 'destroy'])->name('destroy-user');
Route::post('/add_formation',[FormationController::class,'add']) -> name('nouvelle-formation');
Route::get('/formations',[FormationController::class,'show']);
Route::post('updateFormation',[FormationController::class,'update'])->name('update-formation');
Route::post('/add_entreprise',[EntrepriseController::class,'add'])->name('nouvelle-entreprise');
Route::post('/pdf',[PdfController::class,'pdf'])->name('add-pdf');
//Route::post('/facture',[UserprofilController::class,'showw']);
Route::get('/facture',[FactureController::class, 'show']);
Route::post('/facture',[FactureController::class,'index1'])->name('add-facture');



//////
Route::get('/generate', function () {
    return 'test';
});
Route::get('/generate/{id}', [PdfController::class, 'generatePDF']);
Route::get('auto-complete', [GoogleController::class, 'index']);

