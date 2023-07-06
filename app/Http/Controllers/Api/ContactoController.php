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
}