<?php

namespace App\Http\Controllers;

use App\Models\Edificio;
use Illuminate\Http\Request;

class EdificioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $edificios;
    public $val;

    function __construct(){
        $this->edificios = Edificio::paginate(5);
        $this->val=[
            'nombreedificio'=>['required', 'min:3','max:100'],
            'nombrecorto'=>'required'
        ];
    }

    public function index()
    {
        return view("edificios/index", ["edificios"=>$this->edificios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $edificio = new Edificio;
        $pars =
         ["edificios"=>$this->edificios,
        "edificio"=>$edificio,
         "accion"=>"C",
         "des"=>"",
         "txtbtn"=>"INSERTAR"
        ];
        return view("edificios/frm",$pars);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validado=$request->validate($this->val);

        Edificio::create($validado);
        return redirect()->route("edificios.index")->with('mensaje','El registro se inserto correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Edificio $edificio)
    {
        $pars2 =
        ["edificios"=>$this->edificios,
        'edificio'=>$edificio,
        "accion"=>"S",
        "des"=>"disabled",
        "txtbtn"=>"ELIMINAR"
    ];

        return view("edificios/frm", $pars2 );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Edificio $edificio)
    {
        $pars3 =
        [
            "edificios"=>$this->edificios,
             "edificio"=>$edificio,
             "accion"=>"E",
             "des"=>"enabled",
             "txtbtn"=>"EDITAR"
        ];

        return view("edificios/frm", $pars3);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Edificio $edificio)
    {
        $validado=$request->validate($this->val);
        $edificio->update($validado);
        return redirect()->route("edificios.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Edificio $edificio)
    {
        $edificio->delete();
        return redirect()->route("edificios.index");
    }
}
