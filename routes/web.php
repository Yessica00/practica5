<?php

use App\Models\Plazas;
use App\Models\Periodo;
use App\Models\Reticula;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeptoController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\PlazasController;
use App\Http\Controllers\PuestoController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\PeriodoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReticulaController;

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


Route::get('/personal', function(){
    return view ('personal');
})->middleware("auth")->name("personal");

Route::get('/reticulas', function(){
    return view ('reticulas');
})->middleware("auth")->name("reticulas");
Route::get('/materias', function(){
    return view ('materias');
})->middleware("auth")->name("materias");

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
//////////////////////////////////////////////////////////////////////////
Route::get('/Deptos.index', [DeptoController::class, 'index'])->name('Deptos.index');    // INDEX
    
Route::get('/Deptos.create', [DeptoController::class, 'create'])->name('Deptos.create'); // CREATE
Route::post('/Deptos.store', [DeptoController::class, 'store'])->name('Deptos.store');       

Route::get('/Deptos.edit/{depto}', [DeptoController::class, 'edit'])->name('Deptos.edit');       // EDIT
Route::get('/Deptos.show/{depto}', [DeptoController::class, 'show'])->name('Deptos.show');       // VER

Route::post('/Deptos.destroy/{depto}', [DeptoController::class, 'destroy'])->name('Deptos.destroy');// DESRTOY
Route::post('/Deptos.update/{depto}', [DeptoController::class, 'update'])->name('Deptos.update');//UPDATE
//////////////////////////////////////////////////////////////////////////
Route::get('/Carreras.index', [CarreraController::class, 'index'])->name('Carreras.index');    // INDEX
    
Route::get('/Carreras.create', [CarreraController::class, 'create'])->name('Carreras.create'); // CREATE
Route::post('/Carreras.store', [CarreraController::class, 'store'])->name('Carreras.store');       

Route::get('/Carreras.edit/{carrera}', [CarreraController::class, 'edit'])->name('Carreras.edit');       // EDIT
Route::get('/Carreras.show/{carrera}', [CarreraController::class, 'show'])->name('Carreras.show');       // VER

Route::post('/Carreras.destroy/{carrera}', [CarreraController::class, 'destroy'])->name('Carreras.destroy');// DESRTOY
Route::post('/Carreras.update/{carrera}', [CarreraController::class, 'update'])->name('Carreras.update');//UPDATE
//////////////////////////////////////////////////////////////////////////
Route::get('/Reticulas.index', [ReticulaController::class, 'index'])->name('Reticulas.index');    // INDEX
    
Route::get('/Reticulas.create', [ReticulaController::class, 'create'])->name('Reticulas.create'); // CREATE
Route::post('/Reticulas.store', [ReticulaController::class, 'store'])->name('Reticulas.store');       

Route::get('/Reticulas.edit/{reticula}', [ReticulaController::class, 'edit'])->name('Reticulas.edit');       // EDIT
Route::get('/Reticulas.show/{reticula}', [ReticulaController::class, 'show'])->name('Reticulas.show');       // VER

Route::post('/Reticulas.destroy/{reticula}', [ReticulaController::class, 'destroy'])->name('Reticulas.destroy');// DESRTOY
Route::post('/Reticulas.update/{reticula}', [ReticulaController::class, 'update'])->name('Reticulas.update');//UPDATE
//////////////////////////////////////////////////////////////////////////
Route::get('/Materias.index', [MateriaController::class, 'index'])->name('Materias.index');    // INDEX
    
Route::get('/Materias.create', [MateriaController::class, 'create'])->name('Materias.create'); // CREATE
Route::post('/Materias.store', [MateriaController::class, 'store'])->name('Materias.store');       

Route::get('/Materias.edit/{materia}', [MateriaController::class, 'edit'])->name('Materias.edit');       // EDIT
Route::get('/Materias.show/{materia}', [MateriaController::class, 'show'])->name('Materias.show');       // VER

Route::post('/Materias.destroy/{materia}', [MateriaController::class, 'destroy'])->name('Materias.destroy');// DESRTOY
Route::post('/Materias.update/{materia}', [MateriaController::class, 'update'])->name('Materias.update');//UPDATE
//////////////////////////////////////////////////////////////////////////
Route::get('/Periodos.index', [PeriodoController::class, 'index'])->name('Periodos.index');    // INDEX
    
Route::get('/Periodos.create', [PeriodoController::class, 'create'])->name('Periodos.create'); // CREATE
Route::post('/Periodos.store', [PeriodoController::class, 'store'])->name('Periodos.store');       

Route::get('/Periodos.edit/{periodo}', [PeriodoController::class, 'edit'])->name('Periodos.edit');       // EDIT
Route::get('/Periodos.show/{periodo}', [PeriodoController::class, 'show'])->name('Periodos.show');       // VER

Route::post('/Periodos.destroy/{periodo}', [PeriodoController::class, 'destroy'])->name('Periodos.destroy');// DESRTOY
Route::post('/MPeriodos.update/{periodo}', [PeriodoController::class, 'update'])->name('Periodos.update');//UPDATE
//////////////////////////////////////////////////////////////////////////




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
