<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\PoliticalPartyController;
use App\Http\Controllers\PoliticianController;
use GuzzleHttp\Psr7\Request;
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
    return redirect('/login');
});


Route::get('/politician', [PoliticianController::class, 'all']);


Route::post('/politician', [PoliticianController::class, 'create']);

Route::get('/politician/{id}/edit', [PoliticianController::class, 'edit']);
Route::post('/politician/{id}/delete', [PoliticianController::class, 'delete']);
Route::post('/politician/{id}', [PoliticianController::class, 'update']);



Route::get('/political_parties', [PoliticalPartyController::class, 'all']);

Route::post('/political_parties',[PoliticalPartyController::class,'create']);

Route::get('/political_parties/{id}',[PoliticalPartyController::class,'edit']);

Route::post('/political_party/{id}',[PoliticalPartyController::class,'update']);

Route::post('/political_parties/{id}/delete',[PoliticalPartyController::class,'delete']);

Route::post('/political_parties/{id}',[PoliticalPartyController::class,'update']);

Route::get('/search', [PoliticalPartyController::class, 'search']);



Route::get('/login', [AuthController::class, 'loginView']);

Route::get('/register', [AuthController::class, 'registerView']);

Route::get('/logout', [AuthController::class, 'logout']);