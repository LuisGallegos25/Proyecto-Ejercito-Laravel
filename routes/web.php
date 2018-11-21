<?php



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
Route::get('/persona', function () {
    return 'welcome';
});

/*Route::get('/usuarios/{id}', function ($id) {
    return "Mostrando datos del usuario: {$id}";
})->where('id','[0-9]+');

Route::get('/usuaririos/nuevo', function () {
    return 'Crear nuevo usaurio';
});*/

//Route::resource('persona/nuevo','PersonasController'); 
//Route::resource('persona/create','PersonasController'); 
Route::resource('soldado','SoldadoController');
//Route::get('/soldado/editar/{id_Soldado}','SoldadoController@show');  
//Route::post('/soldado/editarr/{id_Soldado}','SoldadoController@update'); 

//Route::resource('persona/update','PersonasController'); 




