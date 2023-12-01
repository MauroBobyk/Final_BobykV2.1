<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PacientesController;
use App\Http\Controllers\MedicoController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('Inicio',"welcome")->name('welcome');
Route::view('register',"register")->name('registro');
//se supone que aca es para el tema del registro y del login

//Login y registro
Route::post('/validar-registro', [LoginController::class,'register'])->name('validar-registro'); 
Route::post('/login', [LoginController::class,'login'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

//vista una vez entrado a la aplicacion
Route::view('PanelUsuario',"PanelUsuario")->middleware('auth')->name('PanelUsuario');
Route::view('OpcionPacientes',"Pacientes/OpcionPacientes")->middleware('auth')->name('OpcionPacientes');


//Todo lo que tiene que ver con paciente 
Route::view('EliminarPacientes',"Pacientes/EliminarPacientes")->middleware('auth')->name('EliminarPacientes');
Route::view('HistClinica',"Historia/HistClinica")->middleware('auth')->name('HistClinica');
Route::view('PanelPacientes',"Pacientes/PanelPacientes")->middleware('auth')->name('PanelPacientes');
Route::post('/pacientes.create', [PacientesController::class, 'create'])->name('pacientes.create');
Route::post('/pacientes.store', [PacientesController::class, 'store'])->name('pacientes.store');


//Todo lo que tiene que ver con medicos
Route::view('OpcionMedico',"Medicos/OpcionMedico")->middleware('auth')->name('OpcionMedico');
Route::view('PanelMedicos',"Medicos/PanelMedico")->middleware('auth')->name('PanelMedico');
Route::view('EliminarMedico',"Medicos/EliminarMedico")->middleware('auth')->name('EliminarMedico');
Route::get('/medicos/create', [MedicoController::class, 'create'])->name('medicos.create');
Route::post('/medicos', [MedicoController::class, 'store']);


//A terminar a futuro, no llego sino.
Route::view('turnos',"turnos")->middleware('auth')->name('turnos');







