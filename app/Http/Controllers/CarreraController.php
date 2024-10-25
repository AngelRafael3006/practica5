<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    public $carreras;
    public $val;

    function __construct(){
        $this->carreras = Carrera::paginate(5);
        $this->val=[
            'idcarrera'=>'required',
            'nombrecarrera'=>['required', 'min:3','max:200'],
            'nombremediano'=>'required',
            'nombrecorto'=>'required'
        ];
     }

    public function index()
    {
        return view("carreras/index", ["carreras"=>$this->carreras]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $carrera = new Carrera;
        $pars =
         ["carreras"=>$this->carreras,
        "carrera"=>$carrera,
         "accion"=>"C",
         "des"=>"",
         "txtbtn"=>"INSERTAR"
        ];
        return view("carreras/frm",$pars);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validado=$request->validate($this->val);

        Carrera::create($validado);
        return redirect()->route("carreras.index")->with('mensaje','El registro se inserto correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Carrera $carrera)
    {
        $pars2 =
        ["carreras"=>$this->carreras,
        'carrera'=>$carrera,
        "accion"=>"S",
        "des"=>"disabled",
        "txtbtn"=>"ELIMINAR"
    ];

        return view("carreras/frm", $pars2 );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carrera $carrera)
    {
        $pars3 =
        [
            "carreras"=>$this->carreras,
             "carrera"=>$carrera,
             "accion"=>"E",
             "des"=>"enabled",
             "txtbtn"=>"EDITAR"
        ];

        return view("carreras/frm", $pars3);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carrera $carrera)
    {
        $validado=$request->validate($this->val);
        $carrera->update($validado);
        return redirect()->route("carreras.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carrera $carrera)
    {
        $carrera->delete();
        return redirect()->route("carreras.index");
    }
}
