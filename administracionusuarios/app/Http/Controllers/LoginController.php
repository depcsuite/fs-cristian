<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class LoginController extends Controller
{
    public function index() {
        $titulo = "Login";
        return view('sistema.login', compact('titulo'));
    }
    public function entrar(Request $request) {
        $usuarioIngresado = ($request->input('txtUsuario'));
        $contrasenaIngresada = ($request->input('txtClave'));
        $usuario = new Usuario();
        $lstUser = $usuario->validarUsuario($usuarioIngresado);
        if(count($lstUser)>0) {
            // Acá vamos a validar la clave, los permisos, etcétera.
        }
        else {
            $titulo = "Acceso denegado";
            $msg["ESTADO"] = "ERROR";
            $msg["MSG"] = "Datos de login inválidos";
            return view('sistema.login', compact('titulo', 'msg'));
        }

    }
    //
}
