<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\facades\Http;

class EmpleadosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('can:admin.empleados.index')->only('index');
        $this->middleware('can:admin.empleados.create')->only('create', 'store');
        $this->middleware('can:admin.empleados.edit')->only('edit', 'update');
        $this->middleware('can:admin.empleados.show')->only('show', 'destroy');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $response = Http::get("http://localhost:3000/api/empleados");
        $empleados = json_decode($response->getBody());

        return view('admin.empleado.index', ['empleados' => $empleados]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $response = Http::get("http://localhost:3000/api/personasemp");
        $personas = json_decode($response->getBody());

        return view('admin.empleado.create', ['personas' => $personas]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = Http::post('http://localhost:3000/api/empleados/',[
            "cod_persona" => $request['cod_persona'],
            "estado_empleado" => $request['estado_empleado'],
            "tipo_empleado" => $request['tipo_empleado'],
            "hrstrab_emp" => $request['hrstrab_emp'],
            "des_contrato" => $request['des_contrato'],
            "fec_ini_contrato" => $request['fec_ini_contrato'],
            "fec_fin_contrato" => $request['fec_fin_contrato'],
            "usr_registro" => auth()->user()->name
        ]);

        return redirect()->route('admin.empleados.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($empleado)
    {
        $response = Http::get("http://localhost:3000/api/empleados/".$empleado);
        $empleados = json_decode($response->getBody()->getContents())[0];

        $data = [];
        $data['empleado'] = $empleado;

        return view('admin.empleado.edit',['empleados' =>$empleados]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $empleado)
    {
        $response = Http::put('http://localhost:3000/api/empleados/'. $empleado, [
            "estado_empleado" => $request['estado_empleado'],
            "tipo_empleado" => $request['tipo_empleado'],
            "hrstrab_emp" => $request['hrstrab_emp'],
            "des_contrato" => $request['des_contrato'],
            "fec_ini_contrato" => $request['fec_ini_contrato'],
            "fec_fin_contrato" => $request['fec_fin_contrato'],
            "usr_registro" => auth()->user()->name
        ]);

        return redirect()->route('admin.empleados.index');
    }


     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($empleado)
    {
        $response = Http::get("http://localhost:3000/api/empleados/".$empleado);
        $empleados = json_decode($response->getBody()->getContents())[0];

        $data = [];
        $data['empleado'] = $empleado;

        return view('admin.empleado.show', ['empleados' =>$empleados]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($empleado)
    {
        $response = Http::delete('http://localhost:3000/api/empleados/'.$empleado,[
            "usr_registro" => auth()->user()->name
        ]);

        return redirect()->route('admin.empleados.index');
    }
}
