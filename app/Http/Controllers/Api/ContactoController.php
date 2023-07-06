<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Contacto;
use App\Models\Creacion;

class ContactoController extends Controller
{
    public function read(Request $request){

        $usuario = new Contacto();

        if($request->query("id")){
            $peticion = $usuario->find($request->query("id"));
        }else{
            $peticion = $usuario->all();
        }

        return response()->json($peticion);
    }
   

    public function create(Request $request){

    $crea = new Contacto();

    $crea->nombre = $request->input("nombre");
    $crea->apellidos = $request->input("apellidos");
    $crea->telefono = $request->input("telefono");
    $crea->email = $request->input("email");
    $crea->requerimiento = $request->input("requerimiento");

    $crea->save();

    $message=["message" => "Resgistro Exitoso!!"];

    return response()->json($message,Response::HTTP_CREATED);
}
}