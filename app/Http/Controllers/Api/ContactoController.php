<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Contacto;


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

public function update(Request $request){


    $idContacto = $request->query("id");

    $contacto= new Contacto();

    $contactoParticular = $contacto->find($idContacto);

    $contactoParticular->nombre = $request->input("nombre");
    $contactoParticular->apellidos = $request->input("apellidos");
    $contactoParticular->telefono = $request->input("telefono");
    $contactoParticular->email = $request->input("email");
    $contactoParticular->requerimiento = $request->input("requerimiento");


    $contactoParticular->save();

    $message=[
        "message" => "Actualización Exitosa!!",
        "idContacto" => $request->query("id"),
        "nombre"=>$contactoParticular->nombre
    ];

    return $message;
}

public function delete(Request $request){


    $idContacto = $request->query("id");

    $contacto= new Contacto();

    $contacto = $contacto->find($idContacto);

    $contacto->nombre = $request->input("nombre");
    $contacto->apellidos = $request->input("apellidos");
    $contacto->telefono = $request->input("telefono");
    $contacto->email = $request->input("email");
    $contacto->requerimiento = $request->input("requerimiento");


    $contacto->delete();

    $message=[
        "message" => "Contacto Borrado!!",
        "idContacto" => $request->query("id"),
        
    ];

    return $message;
}

}