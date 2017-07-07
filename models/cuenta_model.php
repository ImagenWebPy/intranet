<?php

class Cuenta_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function misdatos($idUsuario) {
        $usuario = $this->db->select("select * from usuario where id = $idUsuario");
        $data = array(
            'usuario' => $usuario[0]['usuario'],
            'nombre' => $usuario[0]['nombre'],
            'apellido' => $usuario[0]['apellido'],
            'fecha_nacimiento' => $usuario[0]['fecha_nacimiento'],
            'imagen' => $usuario[0]['imagen']
        );
        return $data;
    }

    public function modificarDatos($datos) {
        $id_usuario = $_SESSION['usuario']['id'];
        $this->db->update('usuario', $datos, "`id` = $id_usuario");
    }

    public function modificarContrasena($datos) {
        if ($datos['pass1'] == $datos['pass2']) {
            $id_usuario = $_SESSION['usuario']['id'];
            $data = array(
                'contrasena' => $datos['pass1']
            );
            $this->db->update('usuario', $datos, "`id` = $id_usuario");
        }
    }

}
