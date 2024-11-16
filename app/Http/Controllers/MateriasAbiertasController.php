<?php

namespace App\Http\Controllers;

use App\Models\MateriasAbiertas;
use App\Models\Carrera;
use App\Models\Periodo;
use Illuminate\Http\Request;

class MateriasAbiertasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $carrera;
    public $ma;
    public $periodo_id;
    public $carrera_id;

     function __construct()
     {
        if (request()->idperiodo) {
            $this->periodo_id = request()->idperiodo;
            session(['periodo_id' => request()->idperiodo]);
        } else {
            $this->periodo_id = (session()->exists('periodo_id') ? session('periodo_id') : "-1");
        }

        if (request()->idcarrera) {
            $this->carrera_id = request()->idcarrera;
            session(['carrera_id' => request()->idcarrera]);
        } else {
            $this->carrera_id = (session()->exists('carrera_id') ? session('carrera_id') : "-1");
        }




        $this->carrera = Carrera::with("reticulas.materias")->where('id', $this->carrera_id)->get();   //cargar la carrera pero a la vez las materias

        $this->ma = MateriasAbiertas::where('periodo_id', $this->periodo_id)
        ->where('carrera_id', $this->carrera_id)
        ->get();
     }


    public function index()
    {$carreras=Carrera::get();//para el select
        $periodos = Periodo::get();
        return view("
        materiasabiertas/index",
        [
            'carreras' => $carreras,
            'periodos' => $periodos,
            'carrera' => $this->carrera,
            'ma' =>$this->ma

        ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $request;
        foreach ($request->all() as $key => $value) {
            if(substr($key,0,1) == 'm') {
                $existe = $this->ma->firstWhere('materia_id', $request->$key);
                if (is_null($existe) and $this->periodo_id != "-1" and $this->carrera_id != "-1"){
                MateriasAbiertas::create([
                    'periodo_id' =>request('idperiodo'),
                    'carrera_id' =>request('idcarrera'),
                    'materia_id' =>$value
                ]);
            }
        }
    }
    return redirect()->route('materiasa.index');
}

    /**
     * Display the specified resource.
     */
    public function show(MateriasAbiertas $materiasAbiertas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MateriasAbiertas $materiasAbiertas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MateriasAbiertas $materiasAbiertas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MateriasAbiertas $materiasAbiertas)
    {
        //
    }
}
