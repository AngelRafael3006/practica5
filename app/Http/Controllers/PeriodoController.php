<?php

namespace App\Http\Controllers;

use App\Models\Periodo;
use Illuminate\Http\Request;

class PeriodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $periodos;
    public $val;

    function __construct(){
        $this->periodos = Periodo::paginate(5);
        $this->val=[
            'idperiodo'=>'required',
            'periodo'=>['required', 'min:3','max:100'],
            'desccorta'=>'required',
            'fechaini'=>'required',
            'fechafin'=>'required',
        ];
    }

    public function index()
    {
        return view("periodos/index", ["periodos"=>$this->periodos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $periodo = new Periodo;
        $pars =
         ["periodos"=>$this->periodos,
        "periodo"=>$periodo,
         "accion"=>"C",
         "des"=>"",
         "txtbtn"=>"INSERTAR"
        ];
        return view("periodos/frm",$pars);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validado=$request->validate($this->val);

        Periodo::create($validado);
        return redirect()->route("periodos.index")->with('mensaje','El registro se inserto correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Periodo $periodo)
    {
        $pars2 =
        ["periodos"=>$this->periodos,
        'periodo'=>$periodo,
        "accion"=>"S",
        "des"=>"disabled",
        "txtbtn"=>"ELIMINAR"
    ];

        return view("periodos/frm", $pars2 );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Periodo $periodo)
    {
        $pars3 =
        [
            "periodos"=>$this->periodos,
             "periodo"=>$periodo,
             "accion"=>"E",
             "des"=>"enabled",
             "txtbtn"=>"EDITAR"
        ];

        return view("periodos/frm", $pars3);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Periodo $periodo)
    {
        $validado=$request->validate($this->val);
        $periodo->update($validado);
        return redirect()->route("periodos.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Periodo $periodo)
    {
        $periodo->delete();
        return redirect()->route("periodos.index");
    }
}
