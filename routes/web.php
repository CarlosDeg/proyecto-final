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




//ruta para crear Administradores editar,mostrar y eliminar

Route::get("/RegistroAdministrativo","AdministrativosC@index");
Route::post("RegistroAdministrativo","AdministrativosC@store");
Route::post("/admin/RegistroAdministrativo/{idAdminitrativo}/update","AdministrativosC@update")->name('admin.RegistroAdministrativo.update');
Route::delete("/admin/RegistroAdministrativo/{idAdminitrativo}/destroy","AdministrativosC@destroy")->name('admin.RegistroAdministrativo.destroy');


//-->ruta para registrar ALUMNOS editar,mostrar y eliminar//
Route::get("/RegistroAlumnos","RegistroAlumnoC@index");
Route::post("RegistroAlumnos","RegistroAlumnoC@store");
Route::post("/admin/RegistroAlumnos/{idMatricula}/update","RegistroAlumnoC@update")->name('admin.RegistroAlumnos.update');
Route::delete("/admin/RegistroAlumnos/{idMatricula}/destroy","RegistroAlumnoC@destroy")->name('admin.RegistroAlumnos.destroy');


//-->ruta para registrar Docentes editar,mostrar y eliminar//
Route::get("/RegistroDocente","DocenteC@index");
Route::post("RegistroDocente","DocenteC@store");
Route::post("/admin/RegistroDocente/{idMatricula}/update","DocenteC@update")->name('admin.RegistroDocente.update');
Route::delete("/admin/RegistroDocente/{idMatricula}/destroy","DocenteC@destroy")->name('admin.RegistroDocente.destroy');

//-->ruta para registrar Personal editar,mostrar y eliminar//
Route::get("/RegistroPersonal","PersonalC@index");
Route::post("RegistroPersonal","PersonalC@store");

Route::post("/admin/RegistroPersonal/{idPersonal}/update","PersonalC@update")->name('admin.RegistroPersonal.update');
Route::delete("/admin/RegistroPersonal/{idPersonal}/destroy","PersonalC@destroy")->name('admin.RegistroPersonal.destroy');

//-->ruta para registrar Materias editar,mostrar y eliminar//
Route::get("/Materias","MateriasC@index");
Route::post("Materias","MateriasC@store");
Route::post("/admin/Materias/{idMateria}/update","MateriasC@update")->name('admin.Materias.update');
Route::delete("/admin/Materias/{idMateria}/destroy","MateriasC@destroy")->name('admin.Materias.destroy');

//-->ruta para registrar Semestre editar,mostrar y eliminar//
Route::get("/Semestre","SemestreC@index");
Route::post("Semestre","SemestreC@store");
Route::post("/admin/Semestre/{idSemestre}/update","SemestreC@update")->name('admin.Semestre.update');
Route::delete("/admin/Semestre/{idSemestre}/destroy","SemestreC@destroy")->name('admin.Semestre.destroy');


//-->ruta para registrar Carreras editar,mostrar y eliminar//
Route::get("/Carreras","CarrerasC@index");
Route::post("Carreras","CarrerasC@store");
Route::post("/admin/Carreras/{idCarrera}/update","CarrerasC@update")->name('admin.Carreras.update');
Route::delete("/admin/Carreras/{idCarrera}/destroy","CarrerasC@destroy")->name('admin.Carreras.destroy');

//-->ruta para registrar Grupos editar,mostrar y eliminar//
Route::get("/Grupo","GrupoC@index");
Route::post("Grupo","GrupoC@store");
Route::post("/admin/Grupo/{idGrupo}/update","GrupoC@update")->name('admin.Grupo.update');
Route::delete("/admin/Grupo/{idGrupo}/destroy","GrupoC@destroy")->name('admin.Grupo.destroy');

//-->ruta para registrar Graduados editar,mostrar y eliminar//
Route::get("/Graduado","GraduadosC@index");
Route::post("Graduado","GraduadosC@store");
Route::post("/admin/Graduado/{idGraduado}/update","GraduadosC@update")->name('admin.Graduado.update');
Route::delete("/admin/Graduado/{idGraduado}/destroy","GraduadosC@destroy")->name('admin.Graduado.destroy');

//-->ruta para registrar Castigos editar,mostrar y eliminar//
Route::get("/Reportes","CastigosC@index");
Route::post("Reportes","CastigosC@store");
Route::post("/admin/Reportes/{idGrupo}/update","CastigosC@update")->name('admin.Reportes.update');
Route::delete("/admin/Reportes/{idGrupo}/destroy","CastigosC@destroy")->name('admin.Reportes.destroy');


