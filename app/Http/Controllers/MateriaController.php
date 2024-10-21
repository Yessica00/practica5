<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use App\Models\Reticula;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public $val;

    public function __construct(){
        // Validaciones para los campos
        $this->val = [
            'nombremateria' => ['required', 'min:3'],
            'nivel'         => ['required'],
            'nombremediano' => ['required'],
            'nombrecorto'   => ['required', 'max:5'],
            'reticula_id'   => ['required', 'exists:reticulas,id'], // Verifica que exista la retícula
        ];
    }

    // Mostrar todas las materias
    public function index()
    {
        $materias = Materia::with('reticula')->paginate(10); // Paginación de las materias con la relación de retícula
        return view('Materias/index', compact('materias'));
    }

    // Mostrar el formulario para crear una nueva materia
    public function create()
    {
        $reticulas = Reticula::all(); // Obtener todas las retículas
        $materias = Materia::paginate(5); 
        $materia = new Materia; 
        $accion = 'C'; // Acción de crear
        $txtbtn = 'Guardar';
        $des = '';
        return view('Materias/frm', compact('materia','materias', 'reticulas', 'accion', 'txtbtn', 'des'));
    }

    // Almacenar una nueva materia en la base de datos
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $val = $request->validate($this->val);

        // Crear una nueva materia
        Materia::create([
            'nombremateria' => $request->nombremateria,
            'nivel'         => $request->nivel,
            'nombremediano' => $request->nombremediano,
            'nombrecorto'   => $request->nombrecorto,
            'modalidad'   => $request->modalidad,
            'reticula_id'   => $request->reticula_id, // Relacionar con la retícula seleccionada
        ]);

        return redirect()->route('Materias.index')->with('mensaje', 'Materia creada correctamente.');
    }

    // Mostrar una materia específica
    public function show(Materia $materia)
    {
        $reticulas = Reticula::all();
        $materias = Materia::paginate(5); 
        $accion = 'D'; // Acción de mostrar
        $txtbtn = 'Confirmar eliminación';
        $des = 'disabled'; // Deshabilitar campos para solo lectura
        return view('Materias/frm', compact('materia','materias', 'reticulas', 'accion', 'txtbtn', 'des'));
    }

    // Mostrar el formulario para editar una materia
    public function edit(Materia $materia)
    {
        $reticulas = Reticula::all(); // Obtener todas las retículas
        $materias = Materia::paginate(5); 
        $accion = 'E'; // Acción de editar
        $txtbtn = 'Actualizar';
        $des = '';
        return view('Materias/frm', compact('materia','materias', 'reticulas', 'accion', 'txtbtn', 'des'));
    }

    // Actualizar una materia existente
    public function update(Request $request, Materia $materia)
    {
        // Validar los datos del formulario
        $val = $request->validate($this->val);

        // Actualizar la materia con los nuevos datos
        $materia->update([
            'nombremateria' => $request->nombremateria,
            'nivel'         => $request->nivel,
            'nombremediano' => $request->nombremediano,
            'nombrecorto'   => $request->nombrecorto,
            'modalidad'   => $request->modalidad,
            'reticula_id'   => $request->reticula_id, // Relacionar con la retícula seleccionada
        ]);

        return redirect()->route('Materias.index')->with('mensaje', 'Materia actualizada correctamente.');
    }

    // Eliminar una materia
    public function destroy(Materia $materia)
    {
        $materia->delete(); // Eliminar la materia
        return redirect()->route('Materias.index')->with('mensaje', 'Materia eliminada correctamente.');
    }
}