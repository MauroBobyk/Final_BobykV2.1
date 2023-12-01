<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PacientesController;
use App\Http\Controllers\MedicoController;



Route::get('/', function () {
    return view('welcome');
});

Route::view('Inicio',"welcome")->name('welcome');
Route::view('OpcionPacientes',"Pacientes/OpcionPacientes")->middleware('auth')->name('OpcionPacientes');
Route::view('PanelUsuario',"PanelUsuario")->middleware('auth')->name('PanelUsuario');
//para ver como mierda va la vista para registar
Route::view('register',"register")->name('registro');
//se supone que aca es para el tema del registro y del login

Route::view('PanelPacientes',"Pacientes/PanelPacientes")->name('PanelPacientes');
Route::post('/pacientes.create', [PacientesController::class, 'create'])->name('pacientes.create');
Route::post('/pacientes.store', [PacientesController::class, 'store'])->name('pacientes.store');

Route::get('/medicos/create', [MedicoController::class, 'create'])->name('medicos.create');
Route::post('/medicos', [MedicoController::class, 'store']);

Route::view('PanelMedicos',"Medicos/PanelMedico")->middleware('auth')->name('PanelMedico');
Route::view('OpcionMedico',"Medicos/OpcionMedico")->middleware('auth')->name('OpcionMedico');

Route::view('turnos',"turnos")->middleware('auth')->name('turnos');




//Login y registro
Route::post('/validar-registro', [LoginController::class,'register'])->name('validar-registro'); 
Route::post('/login', [LoginController::class,'login'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');



