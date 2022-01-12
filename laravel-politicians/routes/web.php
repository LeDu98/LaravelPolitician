<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\PoliticalPartyController;
use App\Http\Controllers\PoliticianController;
use App\Models\Politician;
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
    return redirect('/politician');
});
Route::get('/politician',[PoliticianController::class,'all']);
Route::get('/political_parties',[PoliticalPartyController::class,'all']);
Route::get('/search',[PoliticalPartyController::class,'search']);

Route::post('/politician',[PoliticianController::class,'create']);
Route::post('/political_parties',[PoliticalPartyController::class,'create']);

Route::get('/politician/{id}',[PoliticianController::class,'edit']);
Route::get('/political_party/{id}',[PoliticalPartyController::class,'edit']);

Route::post('/political_party/{id}',[PoliticalPartyController::class,'update']);

Route::post('/politician/{id}/delete',[PoliticianController::class,'delete']);
Route::post('/political_party/{id}/delete',[PoliticalPartyController::class,'delete']);

Route::post('/politician/{id}',[PoliticianController::class,'update']);
Route::post('/political_parties/{id}',[PoliticalPartyController::class,'update']);
