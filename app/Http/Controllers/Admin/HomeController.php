<?php

namespace App\Http\Controllers\Admin;

use auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{


    public function index(){


        //Peticiones del mode Users
         $estado = auth()->user()->est_user;
         $id = auth()->user()->id;

         //Peticiones a la Api
         $respueta = Http::get('http://localhost:3000/api/seguridad/');
         $respueta2 = Http::get('http://localhost:3000/api/users/fechaPass/'. $id);
         $respuesta3 = Http::get('http://localhost:3000/api/seguridad/1');

         //Asignaciones de la respuestas
         $seguridad = $respueta->json();
         $seguridad2 = $respueta2->json();
         $seguridad3 =  json_decode($respuesta3->getBody());

         //foreach de las respuestas

         foreach($seguridad as $seguri){
            $fecha_sistema = $seguri["fecha_sis"];
             break;
         }
         foreach($seguridad2 as $seguri){
            $fecha_pass = $seguri["fecha_pass"];
             break;
         }
         //dd($fecha_pass);
        if($fecha_sistema >= $fecha_pass){

            return view('admin.inactivo.pass', ['id' => $id])->with('seguridad3', $seguridad3);

        } else if ($estado) {
            return view('admin.index');
        } else {
            return view('admin.inactivo.index', ['id' => $id])->with('seguridad3', $seguridad3);
        }


    }
}
