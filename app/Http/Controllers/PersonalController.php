<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $personals;
    public $val;

    function __construct(){
        $this->personals = Personal::paginate(5);
    //$this->personals = Personal::paginate(5);
    $this->val=[
        'RFC'=>'required',
        'nombres'=>['required', 'min:3','max:50'],
        'apellidop'=>'required',
        'apellidom'=>'required',
        'licenciatura'=>'required',
        'lictit'=>'required',
        'especializacion'=>'required',
        'esptit'=>'required',
        'maestria'=>'required',
        'maetit'=>'required',
        'doctorado'=>'required',
        'doctit'=>'required',
        'fechaingsep'=>'required',
        'fechaingins'=>'required'
    ];
 }

    public function index()
    {
        return view("personals/index", ["personals"=>$this->personals]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $personal = new Personal;
        $pars =
         ["personals"=>$this->personals,
        "personal"=>$personal,
         "accion"=>"C",
         "des"=>"",
         "txtbtn"=>"INSERTAR"
        ];
        return view("personals/frm",$pars);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validado=$request->validate($this->val);

        Personal::create($validado);
        return redirect()->route("personals.index")->with('mensaje','El registro se inserto correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Personal $personal)
    {
        $pars2 =
        ["personals"=>$this->personals,
        'personal'=>$personal,
        "accion"=>"S",
        "des"=>"disabled",
        "txtbtn"=>"ELIMINAR"
    ];

        return view("personals/frm", $pars2 );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personal $personal)
    {
        $pars3 =
        [
            "personals"=>$this->personals,
             "personal"=>$personal,
             "accion"=>"E",
             "des"=>"enabled",
             "txtbtn"=>"EDITAR"
        ];

        return view("personals/frm", $pars3);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Personal $personal)
    {
        $validado=$request->validate($this->val);
        $personal->update($validado);
        return redirect()->route("personals.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personal $personal)
    {
        $personal->delete();
        return redirect()->route("personals.index");
    }
}
