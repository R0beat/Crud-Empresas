<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;


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


Route::get('/empleados', function () {
    return view('welcome');
});


Auth::routes();


Route::resource('empleados', App\Http\Controllers\EmpleadoController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/reporte-xml', function () {
    $empleados = App\Models\Empleado::all();
    return response()->xml(['empleados'=>$empleados->toArray()]);
    }
);