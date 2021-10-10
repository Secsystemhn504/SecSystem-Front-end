<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\facades\Http;

class PersonasController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('can:admin.personas.index')->only('index');
        $this->middleware('can:admin.personas.create')->only('create', 'store');
        $this->middleware('can:admin.personas.edit')->only('edit', 'update');
        $this->middleware('can:admin.personas.show')->only('show', 'destroy');
    }

    public function index()
    {
        $response = Http::get("http://localhost:3000/api/personas");
        $personas = json_decode($response->getBody());

        return view('admin.persona.index', ['personas' => $personas]);
    }

    public function create()
    {
        return view('admin.persona.create');
    }

    public function store(Request $request)
    {
        $response = Http::post('http://localhost:3000/api/personas/',[
            "primer_nom" => $request['primer_nom'],
            "segundo_nom" => $request['segundo_nom'],
            "primer_apel" => $request['primer_apel'],
            "sexo" => $request['sexo'],
            "edad" => $request['edad'],
            "tipo_persona" => $request['tipo_persona'],
            "fec_nac_persona" => $request['fec_nac_persona'],
            "rtn_persona" => $request['rtn_persona'],
            "des_direc" => $request['des_direc'],
            "municipio" => $request['municipio'],
            "departamento" => $request['departamento'],
            "num_tel" => $request['num_tel'],
            "tipo_tel" => $request['tipo_tel'],
            "usr_registro" => auth()->user()->name
        ]);

        return redirect()->route('admin.personas.index');
    }

    public function edit($persona)
    {
        $response = Http::get("http://localhost:3000/api/personas/".$persona);
        $personas = json_decode($response->getBody()->getContents())[0];

        $data = [];
        $data['persona'] = $persona;

        return view('admin.persona.edit',['personas' =>$personas]);
    }

    public function update(Request $request, $persona)
    {
        $response = Http::put('http://localhost:3000/api/personas/'. $persona, [
            "primer_nom" => $request['primer_nom'],
            "segundo_nom" => $request['segundo_nom'],
            "primer_apel" => $request['primer_apel'],
            "sexo" => $request['sexo'],
            "edad" => $request['edad'],
            "tipo_persona" => $request['tipo_persona'],
            "fec_nac_persona" => $request['fec_nac_persona'],
            "rtn_persona" => $request['rtn_persona'],
            "des_direc" => $request['des_direc'],
            "municipio" => $request['municipio'],
            "departamento" => $request['departamento'],
            "num_tel" => $request['num_tel'],
            "tipo_tel" => $request['tipo_tel'],
            "usr_registro" => auth()->user()->name
        ]);

        return redirect()->route('admin.personas.index');
    }

    public function show($persona)
    {
        $response = Http::get("http://localhost:3000/api/personas/".$persona);
        $personas = json_decode($response->getBody()->getContents())[0];

        $data = [];
        $data['persona'] = $persona;


        return view('admin.persona.show', ['personas' =>$personas]);
    }

    public function destroy($persona)
    {
        $response = Http::delete('http://localhost:3000/api/personas/'.$persona,[
            "usr_registro" => auth()->user()->name
        ]);

        return redirect()->route('admin.personas.index');
    }
}
