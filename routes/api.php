<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('medico/registrar', 'MedicoController@registrarMedico');

Route::post('/aceptarpaciente', 'MedicoController@aceptarpaciente');
Route::post('/rechazarpaciente', 'MedicoController@rechazarpaciente');


Route::post('/aceptarmedico', 'MedicoController@aceptarmedico');
Route::post('/rechazarmedico', 'MedicoController@rechazarmedico');

// Route::post('medico/registrar', 'MedicoController@loginMedico');
