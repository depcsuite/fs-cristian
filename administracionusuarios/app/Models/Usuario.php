<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $timestamps = false;
    public function validarUsuario($usuario) {
        $sql = "SELECT * FROM usuarios WHERE nombre = '$usuario'";
        $resultado = \DB::select($sql);
        return $resultado;

    }
    public function encriptarClave($clave) {
        return password_hash($clave, PASSWORD_DEFAULT);
    }
    public function validarClave($claveIngresada, $claveBD) {
        return password_verify($claveIngresada, $claveBD);
    }


    use HasFactory;
}
