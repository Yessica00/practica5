<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Carrera;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public $val;
    public function __construct(){
        $this->val=[
            'noctrl'=>'required',
            'nombre'=>['required','min:3'],
            'apellidop'=>'required',
            'apellidom'=>'required',
            'sexo'=>'required',
            'carrera_id' => ['required', 'exists:carreras,id']
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos= Alumno::with('carrera')->paginate(5);
        //return view("alumnos/index" , ['alumnos' =>$alumnos]);
        return view("alumnos2/index" , compact('alumnos'));
    }

    public function create()
    {
        $carreras = Carrera::all();
        $alumnos= Alumno::paginate(15); 
        $alumno= new Alumno;
        $accion='C';
        $txtbtn='Guardar';
        $des="";
        return view("alumnos2/form", compact('alumnos', 'carreras','alumno','accion',
        'txtbtn','des'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // Validar los datos
       $val = $request->validate($this->val);

       // Crear un nuevo alumno
       Alumno::create([
           'noctrl' => $request->noctrl,
           'nombre' => $request->nombre,
           'apellidop' => $request->apellidop,
           'apellidom' => $request->apellidom,
           'sexo' => $request->sexo,
           'carrera_id' => $request->carrera_id, // Asigna la carrera seleccionada
       ]);
        return redirect()->route("alumnos.index")->with('mensaje',"Insertado de manera segura");
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        $carreras=Carrera::all();
        $alumnos= Alumno::paginate(15); 
        $accion="D";
        $txtbtn='Confirmar Eliminacion';
        $des='disabled';

        return view("alumnos2.form", compact('carreras','alumnos','alumno','accion',
        'txtbtn','des'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        $carreras = Carrera::all(); 
        $alumnos= Alumno::paginate(15); 
       $accion='E';
       $txtbtn='Actualizar';
       $des="";
        return view("alumnos2/form" , compact('alumnos', 'alumno','carreras', 'accion','txtbtn','des'));
    }

    /**
     * 'Update the specified resource in storage.
     */
    public function update(Request $request, Alumno $alumno)
    {
        $val=$request->validate($this->val);

        $alumno->update($val);
        return redirect()->route('alumnos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route("alumnos.index");
    }
}
