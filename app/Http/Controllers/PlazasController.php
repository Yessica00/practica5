<?php

namespace App\Http\Controllers;


use App\Models\Plazas;
use Illuminate\Http\Request;

class PlazasController extends Controller
{
    public $val;

    public function __construct(){
        $this->val=[
            // 'idPlaza'    =>['required','min:3'],
            'nombre'    =>['required','min:3']
        ];
    }
    
    public function index()
    {
        $plazas= Plazas::paginate(5);
        return view("plazas/index",compact("plazas"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $plazas= Plazas::paginate(5); 
        $plaza=new Plazas;
        $accion='C';
        $txtbtn='Guardar';
        $des='';
        return view("plazas/frm", compact("plazas","plaza","accion",'txtbtn','des'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val= $request->validate($this->val);
        Plazas::create($val);
        return redirect()->route('plazas.index')->with("mensaje",'se inserto correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Plazas $plaza)
    {
        $plazas=Plazas::Paginate(5);
        $accion='D';
        $txtbtn='confirmar la eliminacion';
        $des='disabled';
        return view("plazas.show",compact('plazas','plaza','accion','txtbtn','des'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plazas $plaza)
    {
        $plazas=Plazas::Paginate(5);
        $accion='E';
        $txtbtn='actualizar';
        $des='';
        return view("plazas.frm",compact('plazas','plaza','accion','txtbtn','des'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plazas $plaza)
    {
        $val= $request->validate($this->val);
        $plaza->update($val);
        return redirect()->route('plazas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plazas $plaza)
    {
        $plaza->delete();
        return redirect()->route("plazas.index");
    }
}
