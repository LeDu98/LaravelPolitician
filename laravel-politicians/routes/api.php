<?php

use App\Http\Controllers\rest\PoliticalPartyRestController;
use App\Http\Controllers\rest\PoliticianRestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Politician;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\PoliticianController;
use App\Http\Resources\PoliticianResource;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
    GET /politicians - vrati mi sve politicare iz baze - metoda index iz kontrolera
    GET /politicians/{id} - vrati politicara sa datim id - jem - show iz kontrolera
    POST /politicians - kreiraj novog politicara podacima iz tela zavteva - store
    PUT /politicians/{id} - izmeni politicara sa datim id - jem podacima iz tela zavteva - update
    DELETE /politicians/{id} - obrisi politicara sa datim id - jem iz baze - destroy
*/


Route::post('/register', [AuthController::class, 'register']);


Route::post('/login', [AuthController::class, 'login']);



///////

Route::resource('politician', PoliticianController::class);




Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profile', function (Request $request) {
        return auth()->user();
    });

    Route::resource('politician', PoliticianController::class);

    Route::post('/logout', [AuthController::class, 'logout']);
});