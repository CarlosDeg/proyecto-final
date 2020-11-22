<?php

use Illuminate\Support\Facades\Route;

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
Route::get('inicio', function () {
    return view('inicio');
});

//Administradores rutas
////////////////////////////////////////////////////////////////////
Route::get('admin', function () {
    return view('admin.principal');
});





//ruta para crear Administradores

Route::get("/RegistroAdministrativo","AdministrativosC@index");
Route::post("RegistroAdministrativo","AdministrativosC@store");

//-->ruta para registrar ALUMNOS//
Route::get("/RegistroAlumnos","RegistroAlumnoC@index");
Route::post("RegistroAlumnos","RegistroAlumnoC@store");

//-->ruta para registrar Docentes//
Route::get("/RegistroDocente","DocenteC@index");
Route::post("RegistroDocente","DocenteC@store");

//-->ruta para registrar Personal//
Route::get("/RegistroPersonal","PersonalC@index");
Route::post("RegistroPersonal","PersonalC@store");

//-->ruta para registrar Materias//
Route::get("/Materias","MateriasC@index");
Route::post("Materias","MateriasC@store");

//-->ruta para registrar Semestre//
Route::get("/Semestre","SemestreC@index");
Route::post("Semestre","SemestreC@store");

//-->ruta para registrar Carreras//


Route::resource('Carreras', 'CarrerasC');




//-->ruta para registrar Grupos//
Route::get("/Grupo","GrupoC@index");
Route::post("Grupo","GrupoC@store");

//-->ruta para registrar Graduados//
Route::get("/Graduado","GraduadosC@index");
Route::post("Graduado","GraduadosC@store");
//-->ruta para registrar Graduados//
Route::get("/Reportes","CastigosC@index");
Route::post("Reportes","CastigosC@store");

