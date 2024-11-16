<?php

namespace App\Http\Controllers;

use App\Models\Hora;
use Illuminate\Http\Request;

class HoraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $horas;
    public $val;

    function __construct(){
        $this->horas = Hora::paginate(5);
        $this->val=[
            'hora_ini'=>['required', 'min:3','max:100'],
            'hora_fin'=>'required'
        ];
    }

    public function index()
    {
        return view("horas/index", ["horas"=>$this->horas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hora = new Hora;
        $pars =
         ["horas"=>$this->horas,
        "hora"=>$hora,
         "accion"=>"C",
         "des"=>"",
         "txtbtn"=>"INSERTAR"
        ];
        return view("horas/frm",$pars);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validado=$request->validate($this->val);

        Hora::create($validado);
        return redirect()->route("horas.index")->with('mensaje','El registro se inserto correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Hora $hora)
    {
        $pars2 =
        ["horas"=>$this->horas,
        'hora'=>$hora,
        "accion"=>"S",
        "des"=>"disabled",
        "txtbtn"=>"ELIMINAR"
    ];
    return view("horas/frm", $pars2 );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hora $hora)
    {
        $pars3 =
        [
            "horas"=>$this->horas,
             "hora"=>$hora,
             "accion"=>"E",
             "des"=>"enabled",
             "txtbtn"=>"EDITAR"
        ];

        return view("horas/frm", $pars3);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hora $hora)
    {
        $validado=$request->validate($this->val);
        $hora->update($validado);
        return redirect()->route("horas.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hora $hora)
    {
        $hora->delete();
        return redirect()->route("horas.index");
    }
}
