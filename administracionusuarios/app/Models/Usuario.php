<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $timestamps = false;
    protected $fillable = ['usuario','activo','created_at','ultimo_ingreso',
    'apellido','nombre','mail','clave'];
    public function validarUsuario($usuario) {
        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
        $resultado = \DB::select($sql);
        return $resultado;

    }
    public function encriptarClave($clave) {
        return password_hash($clave, PASSWORD_DEFAULT);
    }
    public function validarClave($claveIngresada, $claveBD) {
        return password_verify($claveIngresada, $claveBD);
    }
    public function actualizarFechaIngreso() {
        $fec = new \DateTime();
        $sql = "UPDATE usuarios SET ultimo_ingreso = ? WHERE id = ?";
        $query = \DB::update($sql, [$fec->format('Y-m-d H:i:s'), $this->id]);
    }


    use HasFactory;
}
