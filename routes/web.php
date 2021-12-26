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
    return view('index');
});

//proyecto
Route::get('login','AccesoController@login')->name('login');
Route::POST('/valida','AccesoController@valida')->name('valida');
Route::get('recuperar','AccesoController@recuperar')->name('recuperar');
Route::post('restaurar', 'AccesoController@restaurar')->name('restaurar');

Route::get('/cerrarsesion','AccesoController@cerrarsesion')->name('cerrarsesion');
Route::get('/principal','AccesoController@principal')->name('principal');

  Route::get('/clear-cache', function() {
        $run = Artisan::call('config:clear');
        $run = Artisan::call('cache:clear');
        $run = Artisan::call('config:cache');
        return 'FINISHED';
    });

Route::name('/')->get('/','InicioController@INDEX');


Route::name('consultausu')->get('/consultausu','UsuariosController@consultausu');
Route::name('consultausu2')->get('/consultausu2/{idusuario}','UsuariosController@consultausu2');

Route::name('altausu')->get('/altausu','UsuariosController@altausu');
Route::name('nuevo')->post('/nuevo','UsuariosController@nuevousuario');

Route::name('modificausu')->get('/modificausu/{idusuario}/editar','UsuariosController@editarusu');
Route::name('modificausu2')->put('/modificausu2/{idusuario}','UsuariosController@updateusu');
Route::name('eliminausu')->delete('/eliminausu/{idusuario}','UsuariosController@deleteusu');

//*******************+ Cliente

Route::name('consultacli')->get('/consultacli','ClientesController@consultacli');
Route::name('consultacli2')->get('/consultacli2/{id}','ClientesController@consultacli2');

Route::name('altacli')->get('/altacli','ClientesController@altacli');
Route::name('nuevocli')->post('/nuevocli','ClientesController@nuevoCliente');

Route::name('modificacli')->get('/modificacli/{id}/editar','ClientesController@editarcli');
Route::name('modificacli2')->put('/modificacli2/{id}','ClientesController@updatecli');
Route::name('eliminacli')->delete('/eliminacli/{id}','ClientesController@deletecli');

//*********************** Empleados

Route::name('consultaemp')->get('/consultaemp','EmpleadosController@consultaemp');
Route::name('consultaemp2')->get('/consultaemp2/{idemp}','EmpleadosController@consultaemp2');

Route::name('altaemp')->get('/altaemp','EmpleadosController@altaemp');
Route::name('nuevoemp')->post('/nuevoemp','EmpleadosController@nuevoEmpleado');

Route::name('modificaemp')->get('/modificaemp/{idemp}/editar','EmpleadosController@editaremp');
Route::name('modificaemp2')->put('/modificaemp2/{idemp}','EmpleadosController@updateemp');
Route::name('eliminaemp')->delete('/eliminaemp/{idemp}','EmpleadosController@deleteemp');

//************************ Productos

Route::name('consultapro')->get('/consultapro','ProductosController@consultapro');
Route::name('consultapro2')->get('/consultapro2/{id}','ProductosController@consultapro2');

Route::name('altapro')->get('/altapro','ProductosController@altapro');
Route::name('nuevopro')->post('/nuevopro','ProductosController@nuevoProducto');

Route::name('modificapro')->get('/modificapro/{id}/editar','ProductosController@editarpro');
Route::name('modificapro2')->put('/modificapro2/{id}','ProductosController@updatepro');
Route::name('eliminapro')->delete('/eliminapro/{id}','ProductosController@deletepro');

//*********************** Ventas

Route::name('consultaven')->get('/consultaven','VentasController@consultaven');
Route::name('consultaven2')->get('/consultaven2/{id}','VentasController@consultaven2');

Route::name('altaven')->get('/altaven','VentasController@altaven');
Route::name('nuevoven')->post('/nuevoven','VentasController@nuevoVenta');

Route::name('modificaven')->get('/modificaven/{id}/editar','VentasController@editarven');
Route::name('modificaven2')->put('/modificaven2/{id}','VentasController@updateemp');
Route::name('eliminaven')->delete('/eliminaven/{id}','VentasController@deleteven');

// PDF Y EXCEL Usuarios ///
Route::get('pdfusuarios', 'UsuariosController@pdfusuarios')->name('pdfusuarios');
Route::get('excelusuarios', 'UsuariosController@excelusuarios')->name('excelusuarios');


// PDF Y EXCEL DE clientes ///
Route::get('pdfclientes', 'ClientesController@pdfclientes')->name('pdfclientes');
Route::get('excelclientes', 'ClientesController@excelclientes')->name('excelclientes');


/// PDF Y EXCEL de empleados ///
Route::get('pdfempleados', 'EmpleadosController@pdfempleados')->name('pdfempleados');
Route::get('excelempleados', 'EmpleadosController@excelempleados')->name('excelempleados');


/// PDF y EXCEL de productos //
Route::get('pdfproductos', 'ProductosController@pdfproductos')->name('pdfproductos');
Route::get('excelproductos', 'ProductosController@excelproductos')->name('excelproductos');


/// PDF Y EXCEL de ventas //
Route::get('pdfventas', 'VentasController@pdfventas')->name('pdfventas');
Route::get('excelventas', 'VentasController@excelventas')->name('excelventas');
