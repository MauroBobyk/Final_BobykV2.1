<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;



Route::get('/', function () {
    return view('welcome');
});

Route::view('Inicio',"welcome")->name('welcome');

Route::view('PanelUsuario',"PanelUsuario")->middleware('auth')->name('PanelUsuario');
//para ver como mierda va la vista para registar
Route::view('register',"register")->name('registro');
//se supone que aca es para el tema del registro y del login

Route::post('/validar-registro', [LoginController::class,'register'])->name('validar-registro'); 

Route::post('/login', [LoginController::class,'login'])->name('login');

Route::get('/logout',[LoginController::class,'logout'])->name('logout');



