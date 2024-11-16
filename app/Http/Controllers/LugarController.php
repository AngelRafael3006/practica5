<?php

namespace App\Http\Controllers;

use App\Models\Lugar;
use Illuminate\Http\Request;

class LugarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $lugares;
    public $val;

    function __construct(){
        $this->lugares = Lugar::paginate(5);
        $this->val=[
            'nombrelugar'=>['required', 'min:3','max:100'],
            'nombrecorto'=>'required'
        ];
    }

    public function index()
    {
        return view("lugares/index", ["lugares"=>$this->lugares]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lugar = new Lugar;
        $pars =
         ["lugares"=>$this->lugares,
        "lugar"=>$lugar,
         "accion"=>"C",
         "des"=>"",
         "txtbtn"=>"INSERTAR"
        ];
        return view("lugares/frm",$pars);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validado=$request->validate($this->val);

        Lugar::create($validado);
        return redirect()->route("lugares.index")->with('mensaje','El registro se inserto correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lugar $lugar)
    {
        $pars2 =
        ["lugares"=>$this->lugares,
        'lugar'=>$lugar,
        "accion"=>"S",
        "des"=>"disabled",
        "txtbtn"=>"ELIMINAR"
    ];
    return view("lugares/frm", $pars2 );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lugar $lugar)
    {
        $pars3 =
        [
            "lugares"=>$this->lugares,
             "lugar"=>$lugar,
             "accion"=>"E",
             "des"=>"enabled",
             "txtbtn"=>"EDITAR"
        ];

        return view("lugares/frm", $pars3);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lugar $lugar)
    {
        $validado=$request->validate($this->val);
        $lugar->update($validado);
        return redirect()->route("lugares.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lugar $lugar)
    {
        $lugar->delete();
        return redirect()->route("lugares.index");
    }
}
