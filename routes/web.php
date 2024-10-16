<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
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
Route::get('/plazas', function(){
    return view ('plazas');
})->middleware("auth")->name("plazas");
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
 


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
