<?php

class Admin_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function iniciar($data) {
        $email = $data['email'];
        $password = trim(Hash::create('sha256', $data['password'], HASH_PASSWORD_KEY));
        $sth = $this->db->prepare("Select a.nombre,
                                           a.email
                                   FROM admin a
                                   WHERE a.email = :email
                                   AND a.password = :password
                                   AND estado = 1");
        $sth->execute(array(
            ':email' => $email,
            ':password' => $password
        ));
        $data = $sth->fetch();
        $count = $sth->rowCount();
        if ($count > 0) {
            // login
            Session::set('admin', array(
                'nombre' => $data['nombre'],
                'email' => $data['email']
            ));
            header('location: ' . URL . 'admin/');
        } else {
            Session::set('message', array(
                'type' => 'error',
                'mensaje' => 'El usuario ingresado no existe o la contraseña ingresada no coincide'));
            header('location: ' . URL . 'admin/');
        }
    }

    public function listadoPublicaciones($parametros) {
        
    }

}
