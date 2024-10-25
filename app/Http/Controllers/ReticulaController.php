<?php

namespace App\Http\Controllers;

use App\Models\Reticula;
use Illuminate\Http\Request;

class ReticulaController extends Controller
{
    public $reticulas;
    public $val;

    function __construct(){
        $this->reticulas = Reticula::paginate(5);
        $this->val=[
            'idreticula'=>'required',
            'descripcion'=>['required', 'min:3','max:200'],
            'fechaenvigor'=>'required',
        ];
    }

    public function index()
    {
        return view("reticulas/index", ["reticulas"=>$this->reticulas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $reticula = new Reticula;
        $pars =
         ["reticulas"=>$this->reticulas,
        "reticula"=>$reticula,
         "accion"=>"C",
         "des"=>"",
         "txtbtn"=>"INSERTAR"
        ];
        return view("reticulas/frm",$pars);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validado=$request->validate($this->val);

        Reticula::create($validado);
        return redirect()->route("reticulas.index")->with('mensaje','El registro se inserto correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reticula $reticula)
    {
        $pars2 =
        ["reticulas"=>$this->reticulas,
        'reticula'=>$reticula,
        "accion"=>"S",
        "des"=>"disabled",
        "txtbtn"=>"ELIMINAR"
    ];

        return view("reticulas/frm", $pars2 );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reticula $reticula)
    {
        $pars3 =
        [
            "reticulas"=>$this->reticulas,
             "reticula"=>$reticula,
             "accion"=>"E",
             "des"=>"enabled",
             "txtbtn"=>"EDITAR"
        ];

        return view("reticulas/frm", $pars3);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reticula $reticula)
    {
        $validado=$request->validate($this->val);
        $reticula->update($validado);
        return redirect()->route("reticulas.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reticula $reticula)
    {
        $reticula->delete();
        return redirect()->route("reticulas.index");
    }
}
