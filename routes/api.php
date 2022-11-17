<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/controle_ar',function () {
    $api_retorno = json_decode(file_get_contents('https://api.waqi.info/feed/here/?token=77491dfc4cb9b1a0867aa232a6a2279fb28849d7'), true); // Recebe os dados da API
    return $api_retorno;
});
