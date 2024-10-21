<?php

namespace App\Http\Controllers;

use App\Models\Periodo;
use Illuminate\Http\Request;

class PeriodoController extends Controller

{
    // Validación
    public $val = [
        'periodo' => 'required|string|max:200|unique:periodos',
        'descripcion' => 'required|string|max:50|unique:periodos',
        'fechaini' => 'required|string|max:50|unique:periodos',
        'fechafin' => 'required|string|max:50|unique:periodos',
    ];

    // Mostrar todos los periodos
    public function index()
    {
        $periodos = Periodo::paginate(10);
        return view('Periodos.index', compact('periodos'));
    }

    // Mostrar formulario de creación
    public function create()
    {
        $periodos =Periodo::paginate(5); 
        $periodo = new Periodo();
        $accion='C';
        $txtbtn='Guardar';
        $des='';
        return view('Periodos.frm', compact('periodo','periodos',"accion",'txtbtn','des'));
    }

    // Almacenar nuevo periodo
    public function store(Request $request)
    {
        $validated = $request->validate($this->val);

        Periodo::create($validated);

        return redirect()->route('Periodos.index')->with('mensaje', 'Periodo creado correctamente.');
    }

    // Mostrar un periodo específico
    public function show(Periodo $periodo)
    {
        $periodos=Periodo::Paginate(5);
        $accion='D';
        $txtbtn='confirmar la eliminacion';
        $des='disabled';
        return view("Periodos/frm",compact('periodos','periodo','accion','txtbtn','des'));
    }

    // Mostrar formulario para editar un periodo
    public function edit(Periodo $periodo)
    {
        $periodos=Periodo::Paginate(5);
        $accion='E';
        $txtbtn='actualizar';
        $des='';
        return view("Periodos.frm",compact('periodos','periodo','accion','txtbtn','des'));
    }

    // Actualizar un periodo
    public function update(Request $request, Periodo $periodo)
    {
        $periodo->update($request->all());
        return redirect()->route('Periodos.index');
    }

    // Eliminar un periodo
    public function destroy(Periodo $periodo)
    {
        $periodo->delete();
        return redirect()->route('Periodos.index');
       
    }
}