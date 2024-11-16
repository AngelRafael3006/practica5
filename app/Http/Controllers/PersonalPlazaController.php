<?php

namespace App\Http\Controllers;

use App\Models\PersonalPlaza;
use Illuminate\Http\Request;

class PersonalPlazaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $personalplazas;
    public $val;

    function __construct(){
        $this->personalplazas = PersonalPlaza::paginate(5);
    //$this->personals = Personal::paginate(5);
    $this->val=[
        'tiponombramiento'=>'required',
    ];
 }

    public function index()
    {
        return view("personalplazas/index", ["personalplazas"=>$this->personalplazas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $personalplaza = new PersonalPlaza;
        $pars =
         ["personalplazas"=>$this->personalplazas,
        "personalplaza"=>$personalplaza,
         "accion"=>"C",
         "des"=>"",
         "txtbtn"=>"INSERTAR"
        ];
        return view("personalplazas/frm",$pars);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validado=$request->validate($this->val);

        PersonalPlaza::create($validado);
        return redirect()->route("personalplazas.index")->with('mensaje','El registro se inserto correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(PersonalPlaza $personalPlaza)
    {
        $pars2 =
        ["personalplazas"=>$this->personalplazas,
        'personalplaza'=>$personalPlaza,
        "accion"=>"S",
        "des"=>"disabled",
        "txtbtn"=>"ELIMINAR"
    ];

        return view("personalplazas/frm", $pars2 );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PersonalPlaza $personalPlaza)
    {
        $pars3 =
        [
            "personalplazas"=>$this->personalplazas,
             "personalplaza"=>$personalPlaza,
             "accion"=>"E",
             "des"=>"enabled",
             "txtbtn"=>"EDITAR"
        ];

        return view("personalplazas/frm", $pars3);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PersonalPlaza $personalPlaza)
    {
        $validado=$request->validate($this->val);
        $personalPlaza->update($validado);
        return redirect()->route("personalplazas.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PersonalPlaza $personalPlaza)
    {
        $personalPlaza->delete();
        return redirect()->route("personalplazas.index");
    }
}
