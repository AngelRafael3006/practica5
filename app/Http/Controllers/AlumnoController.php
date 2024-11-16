<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public $alumnos;
    public $val;

    function __construct(){
        if( request("txtbuscar")){
            $txtbuscar = request("txtbuscar");
        } else{
            $txtbuscar = "";
        }
         $this->alumnos = Alumno::with('carrera.depto')->where("nombrealumno","like","$txtbuscar%")->paginate(5);


        //$this->alumnos = Alumno::paginate(5);
        $this->val=[
            'noctrl'=>'required',
            'nombrealumno'=>['required', 'min:3','max:50','regex:/^[\p{L}\s]+$/u'],
            'apellidopaterno'=>'required',
            'apellidomaterno'=>'required',
            'sexo'=>'required'
        ];
     }

    public function index()
    {
        return view("alumnos/index", ["alumnos"=>$this->alumnos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $alumno = new Alumno;
        $pars =
         ["alumnos"=>$this->alumnos,
        "alumno"=>$alumno,
         "accion"=>"C",
         "des"=>"",
         "txtbtn"=>"INSERTAR"
        ];
        return view("alumnos/frm",$pars);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validado=$request->validate($this->val);

        Alumno::create($validado);
        return redirect()->route("alumnos.index")->with('mensaje','El registro se inserto correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        $pars2 =
        ["alumnos"=>$this->alumnos,
        'alumno'=>$alumno,
        "accion"=>"S",
        "des"=>"disabled",
        "txtbtn"=>"ELIMINAR"
    ];

        return view("alumnos/frm", $pars2 );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        $pars3 =
        [
            "alumnos"=>$this->alumnos,
             "alumno"=>$alumno,
             "accion"=>"E",
             "des"=>"enabled",
             "txtbtn"=>"EDITAR"
        ];

        return view("alumnos/frm", $pars3);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumno $alumno)
    {
        $validado=$request->validate($this->val);
        $alumno->update($validado);
        return redirect()->route("alumnos.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route("alumnos.index");
    }
}
