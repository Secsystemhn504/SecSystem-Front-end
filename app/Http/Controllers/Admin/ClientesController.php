<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\facades\Http;

class ClientesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth');

        $this->middleware('can:admin.clientes.index')->only('index');
        $this->middleware('can:admin.clientes.create')->only('create', 'store');
        $this->middleware('can:admin.clientes.edit')->only('edit', 'update');
        $this->middleware('can:admin.clientes.show')->only('show', 'destroy');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $response = Http::get("http://localhost:3000/api/clientes");
        $clientes = json_decode($response->getBody());

        return view('admin.cliente.index', ['clientes' => $clientes]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $response = Http::get("http://localhost:3000/api/personascli");
        $personas = json_decode($response->getBody());

        return view('admin.cliente.create', ['personas' => $personas]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = Http::post('http://localhost:3000/api/clientes/',[
            "cod_persona" => $request['cod_persona'],
            "nom_empresa" => $request['nom_empresa'],
            "correo_electronico" => $request['correo_electronico'],
            "des_contrato" => $request['des_contrato'],
            "fec_ini_contrato" => $request['fec_ini_contrato'],
            "fec_fin_contrato" => $request['fec_fin_contrato'],
            "usr_registro" => auth()->user()->name
        ]);

        return redirect()->route('admin.clientes.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($cliente)
    {
        $response = Http::get("http://localhost:3000/api/clientes/".$cliente);
        $clientes = json_decode($response->getBody()->getContents())[0];

        $data = [];
        $data['cliente'] = $cliente;

        return view('admin.cliente.edit',['clientes' =>$clientes]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cliente)
    {
        $empleado = Http::put('http://localhost:3000/api/clientes/'. $cliente, [
            "nom_empresa" => $request['nom_empresa'],
            "correo_electronico" => $request['correo_electronico'],
            "des_contrato" => $request['des_contrato'],
            "fec_ini_contrato" => $request['fec_ini_contrato'],
            "fec_fin_contrato" => $request['fec_fin_contrato'],
            "usr_registro" => auth()->user()->name
        ]);

        return redirect()->route('admin.clientes.index');
    }


     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($cliente)
    {
        $response = Http::get("http://localhost:3000/api/clientes/".$cliente);
        $clientes = json_decode($response->getBody()->getContents())[0];

        $data = [];
        $data['cliente'] = $cliente;


        return view('admin.cliente.show', ['clientes' =>$clientes]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cliente)
    {
        $response = Http::delete('http://localhost:3000/api/clientes/'.$cliente,[
            "usr_registro" => auth()->user()->name
        ]);

        return redirect()->route('admin.clientes.index');
    }
}
