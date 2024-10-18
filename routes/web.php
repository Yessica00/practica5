<?php

use App\Models\Plazas;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\PlazasController;
use App\Http\Controllers\PuestoController;
use App\Http\Controllers\ProfileController;

//menu1
Route::get('/dashboard', function () {
    // return view('dashboard');
    return view('inicio2');
 })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', function(){
    return view ('inicio');
})->name("inicio");
//menu1
Route::get('/acerca', function(){
    return view ('acerca');
})->name("acerca");
Route::get('/sobre', function(){
    return view ('sobre');
})->name("sobre");
Route::get('/ayuda', function(){
    return view ('ayuda');
})->name("ayuda");
//menu2
Route::get('/periodos', function(){
    return view ('periodos');
})->middleware("auth")->name("periodos");

Route::get('/puestos', function(){
    return view ('puestos');
})->middleware("auth")->name("puestos");

Route::get('/personal', function(){
    return view ('personal');
})->middleware("auth")->name("personal");

Route::get('/deptos', function(){
    return view ('deptos');
})->middleware("auth")->name("deptos");
Route::get('/carreras', function(){
    return view ('carreras');
})->middleware("auth")->name("carreras");
Route::get('/reticulas', function(){
    return view ('reticulas');
})->middleware("auth")->name("reticulas");
Route::get('/materias', function(){
    return view ('materias');
})->middleware("auth")->name("materias");
Route::get('/alumno', function(){
    return view ('alumno');
})->middleware("auth")->name("alumno");
Route::get('/docentes', function(){
    return view ('docentes');
})->middleware("auth")->name("docentes");

///////////
Route::get('/asesorias', function(){
    return view ('asesorias');
})->middleware("auth")->name("asesorias");
Route::get('/capacitacion', function(){
    return view ('capacitacion');
})->middleware("auth")->name("capacitacion");
Route::get('/proyectos', function(){
    return view ('proyectos');
})->middleware("auth")->name("proyectos");
Route::get('/materiald', function(){
    return view ('materiald');
})->middleware("auth")->name("materiald");
Route::get('/docenciaein', function(){
    return view ('docenciaein');
})->middleware("auth")->name("docenciaein");
Route::get('/asesoriae', function(){
    return view ('asesoriae');
})->middleware("auth")->name("asesoriae");
Route::get('/asesoriass', function(){
    return view ('asesoriass');
})->middleware("auth")->name("asesoriass");
Route::get('/instrumentacion', function(){
    return view ('instrumentacion');
})->middleware("auth")->name("instrumentacion");
Route::get('/tutorias', function(){
    return view ('tutorias');
})->middleware("auth")->name("tutorias");
Route::get('/dashboard', function () {
    // return view('dashboard');
    return view('inicio2');
 })->middleware(['auth', 'verified'])->name('dashboard');
 /////////////////////////////////
 Route::get('/alumnos.index', [AlumnoController::class, 'index'])->name('alumnos.index');
 Route::get('/alumnos.create', [AlumnoController::class, 'create'])->name('alumnos.create');
 Route::post('/alumnos.store', [AlumnoController::class, 'store'])->name('alumnos.store');
 Route::get('/alumnos.edit/{alumno}', [AlumnoController::class, 'edit'])->name('alumnos.edit');
 Route::post('/alumnos.destroy/{alumno}' , [AlumnoController::class, 'destroy'])->name('alumnos.destroy');
 Route::get('/alumnos.show/{alumno}', [AlumnoController::class, 'show'])->name('alumnos.show');
 Route::post('/alumnos.update/{alumno}', [AlumnoController::class, 'update'])->name('alumnos.update');
////////////////////////////////////////////////////////////////////////
Route::get('/plazas.index', [PlazasController::class, 'index'])->name('plazas.index');    // INDEX
    
    Route::get('/plazas.create', [PlazasController::class, 'create'])->name('plazas.create'); // CREATE
    Route::post('/plazas.store', [PlazasController::class, 'store'])->name('plazas.store');       
    
    Route::get('/plazas.edit/{plaza}', [PlazasController::class, 'edit'])->name('plazas.edit');       // EDIT
    Route::get('/plazas.show/{plaza}', [PlazasController::class, 'show'])->name('plazas.show');       // VER
    
    Route::post('/plazas.destroy/{plaza}', [PlazasController::class, 'destroy'])->name('plazas.destroy');// DESRTOY
    Route::post('/plazas.update/{plaza}', [PlazasController::class, 'update'])->name('plazas.update');//UPDATE
////////////////////////////////////////////////////
Route::get('/Puestos.index', [PuestoController::class, 'index'])->name('Puestos.index');    // INDEX
    
Route::get('/Puestos.create', [PuestoController::class, 'create'])->name('Puestos.create'); // CREATE
Route::post('/Puestos.store', [PuestoController::class, 'store'])->name('Puestos.store');       

Route::get('/Puestos.edit/{puesto}', [PuestoController::class, 'edit'])->name('Puestos.edit');       // EDIT
Route::get('/Puestos.show/{puesto}', [PuestoController::class, 'show'])->name('Puestos.show');       // VER

Route::post('/Puestos.destroy/{puesto}', [PuestoController::class, 'destroy'])->name('Puestos.destroy');// DESRTOY
Route::post('/Puestos.update/{puesto}', [PuestoController::class, 'update'])->name('Puestos.update');//UPDATE
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
