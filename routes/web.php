<?php
use App\Mail\Bienvenida;
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
    return view('login/login');
});

Route::get('/register', function () {
    return view('login/register');
});

Route::get('/admin', function () {
    return view('admin/administrador');
});

Route::get('/medico', function () {
    return view('medico/medicos');
});

Route::get('/videollamada', function () {
    return view('videollamada/video');
});

Route::post('/login', 'LoginPropioController@login');

Route::get('/admin', 'HomeController@index');

Route::get('/medico', 'HomeController@index1');

Route::get('/solicitud', 'HomeController@index');
Route::get('/medicosaceptados', 'HomeController@MedicosAceptados');
Route::get('/medicosrechazados', 'HomeController@MedicosRechazados');

Route::get('/reservasaceptadas', 'HomeController@PacientesAceptados');
Route::get('/reservasrechazadas', 'HomeController@PacientesRechazados');

//Route::post('/login', 'HomeController@login');

// Route::get('/mail', function(){
//     return view('bienvenida');
// });


// Route::get('/enviar', function(){
//     Mail::to('unaprueba@gmail.com')->send(new Bienvenida);
//     return "mensaje enviado";
// });

// Route::get('/', function () {
//     return view('welcome');
// });
// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('user', 'UserController@index');
// Route::get('user', 'UserController@store');
// Route::get('/', 'MedicoController@registrarMedico')->name('login/login');
// Route::get('/login', 'MedicoController@registrarMedico');
