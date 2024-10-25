<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public $materias;
    public $val;

    function __construct(){
        $this->materias = Materia::paginate(5);
        $this->val=[
            'idmateria'=>'required',
            'nombremateria'=>['required', 'min:3','max:200'],
            'nivel'=>'required',
            'nombremediano'=>'required',
            'nombrecorto'=>'required',
            'modalidad'=>'required',
        ];
    }

    public function index()
    {
        return view("materias/index", ["materias"=>$this->materias]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $materia = new Materia;
        $pars =
         ["materias"=>$this->materias,
        "materia"=>$materia,
         "accion"=>"C",
         "des"=>"",
         "txtbtn"=>"INSERTAR"
        ];
        return view("materias/frm",$pars);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validado=$request->validate($this->val);

        Materia::create($validado);
        return redirect()->route("materias.index")->with('mensaje','El registro se inserto correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Materia $materia)
    {
        $pars2 =
        ["materias"=>$this->materias,
        'materia'=>$materia,
        "accion"=>"S",
        "des"=>"disabled",
        "txtbtn"=>"ELIMINAR"
    ];

        return view("materias/frm", $pars2 );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Materia $materia)
    {
        $pars3 =
        [
            "materias"=>$this->materias,
             "materia"=>$materia,
             "accion"=>"E",
             "des"=>"enabled",
             "txtbtn"=>"EDITAR"
        ];

        return view("materias/frm", $pars3);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Materia $materia)
    {
        $validado=$request->validate($this->val);
        $materia->update($validado);
        return redirect()->route("materias.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Materia $materia)
    {
        $materia->delete();
        return redirect()->route("materias.index");
    }
}
