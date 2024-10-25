<?php

namespace App\Http\Controllers;

use App\Models\Depto;
use Illuminate\Http\Request;

class DeptoController extends Controller
{
    public $deptos;
    public $val;

    function __construct(){
        $this->deptos = Depto::paginate(5);
        $this->val=[
            'iddepto'=>'required',
            'nombredepto'=>['required', 'min:3','max:100'],
            'nombremediano'=>'required',
            'nombrecorto'=>'required',
        ];
     }
    public function index()
    {
        return view("deptos/index", ["deptos"=>$this->deptos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $depto = new Depto;
        $pars =
         ["deptos"=>$this->deptos,
        "depto"=>$depto,
         "accion"=>"C",
         "des"=>"",
         "txtbtn"=>"INSERTAR"
        ];
        return view("deptos/frm",$pars);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validado=$request->validate($this->val);

        Depto::create($validado);
        return redirect()->route("deptos.index")->with('mensaje','El registro se inserto correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Depto $depto)
    {
        $pars2 =
        ["deptos"=>$this->deptos,
        'depto'=>$depto,
        "accion"=>"S",
        "des"=>"disabled",
        "txtbtn"=>"ELIMINAR"
    ];

        return view("deptos/frm", $pars2 );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Depto $depto)
    {
        $pars3 =
        [
            "deptos"=>$this->deptos,
             "depto"=>$depto,
             "accion"=>"E",
             "des"=>"enabled",
             "txtbtn"=>"EDITAR"
        ];

        return view("deptos/frm", $pars3);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Depto $depto)
    {
        $validado=$request->validate($this->val);
        $depto->update($validado);
        return redirect()->route("deptos.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Depto $depto)
    {
        $depto->delete();
        return redirect()->route("deptos.index");
    }
}
