<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\Reticula;
use Illuminate\Http\Request;

class ReticulaController extends Controller
{
    public $val;

    public function __construct(){
        $this->val = [
            'descripcion' => ['required', 'min:3'],
            'fechav' => ['required', 'date'],  // Aseguramos que es una fecha
            'carrera_id' => ['required', 'exists:carreras,id']
        ];
    }

    public function index()
    {
        $reticulas = Reticula::with('carrera')->paginate(5);
        return view("Reticulas/index", compact("reticulas"));
    }

    public function create()
    {
        $carreras = Carrera::all();
        $reticulas = Reticula::paginate(5); 
        $reticula = new Reticula;
        $accion = 'C';
        $txtbtn = 'Guardar';
        $des = '';
        return view("Reticulas/frm", compact("reticulas", 'reticula', 'carreras', "accion", 'txtbtn', 'des'));
    }

    public function store(Request $request)
    {
        $val = $request->validate($this->val);

        // Crear una nueva retícula
        Reticula::create([
            'descripcion' => $request->descripcion,
            'fechav' => $request->fechav,  // Corregido: ahora toma la fecha correctamente
            'carrera_id' => $request->carrera_id, // Asigna la carrera seleccionada
        ]);
    
        // Redirigir o mostrar un mensaje de éxito
        return redirect()->route('Reticulas.index')->with("mensaje", 'Se insertó correctamente.');
    }

  public function show(Reticula $reticula)
{
    $carreras = Carrera::all();  // Obtener todas las carreras
    $reticulas = Reticula::paginate(5); 
    $accion = 'D';
    $txtbtn = 'confirmar la eliminacion';
    $des = 'disabled';
    return view("Reticulas.frm", compact('reticulas', 'reticula', 'carreras', 'accion', 'txtbtn', 'des'));
}

    public function edit(Reticula $reticula)
    {
        $carreras = Carrera::all();  // Obtener todas las carreras
        $reticulas = Reticula::paginate(5); 
        $accion = 'E';
        $txtbtn = 'actualizar';
        $des = '';
        return view("Reticulas.frm", compact('reticulas', 'reticula', 'carreras', 'accion', 'txtbtn', 'des'));
    }

    public function update(Request $request, Reticula $reticula)
    {
        $val = $request->validate($this->val);
        
        $reticula->update($val);  // Actualizamos usando los valores validados
        return redirect()->route('Reticulas.index');
    }

    public function destroy(Reticula $reticula)
    {
        $reticula->delete();
        return redirect()->route('Reticulas.index')->with('mensaje', 'Se eliminó correctamente.');
    }
}

