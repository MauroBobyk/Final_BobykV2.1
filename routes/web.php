<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PacientesController;



Route::get('/', function () {
    return view('welcome');
});

Route::view('Inicio',"welcome")->name('welcome');
Route::view('OpcionPacientes',"Pacientes/OpcionPacientes")->middleware('auth')->name('OpcionPacientes');
Route::view('PanelUsuario',"PanelUsuario")->middleware('auth')->middleware('auth')->name('PanelUsuario');
//para ver como mierda va la vista para registar
Route::view('register',"register")->name('registro');
//se supone que aca es para el tema del registro y del login

Route::view('PanelPacientes',"Pacientes/PanelPacientes")->middleware('auth')->name('PanelPacientes');

Route::post('/pacientes.create', [PacientesController::class, 'create'])->name('pacientes.create');

Route::post('/pacientes.store', [PacientesController::class, 'store'])->name('pacientes.store');



Route::view('PanelMedicos',"Medicos/PanelMedico")->middleware('auth')->name('PanelMedico');

Route::view('turnos',"turnos")->middleware('auth')->name('turnos');







Route::post('/validar-registro', [LoginController::class,'register'])->name('validar-registro'); 

Route::post('/login', [LoginController::class,'login'])->name('login');

Route::get('/logout',[LoginController::class,'logout'])->name('logout');



