<?php

class Login_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    /**
     * Funcion para iniciar session
     * @param int $data
     */
    public function iniciar($data) {
        $user = $data['usuario'];
        $pass = trim(Hash::create('sha256', $data['contrasena'], HASH_PASSWORD_KEY));
        $helper = new Helper();
        $sth = $this->db->prepare("select u.id,
                                        u.nombre,
                                        u.apellido,
                                        u.imagen,
                                        u.usuario
                                from usuario u
                                where u.usuario = :usuario
                                and u.contrasena = :contrasena
                                and estado = 1");
        $sth->execute(array(
            ':usuario' => $user,
            ':contrasena' => $pass
        ));
        $data = $sth->fetch();
        $count = $sth->rowCount();
        if ($count > 0) {
            // login
            Session::set('usuario', array(
                'id' => $data['id'],
                'nombre' => $data['nombre'],
                'apellido' => $data['apellido'],
                'fecha_nacimiento' => $data['fecha_nacimiento'],
                'usuario' => $data['usuario'], //email
                'imagen' => $data['imagen']));
            header('location: ' . URL);
        } else {
            Session::set('message', array(
                'type' => 'error',
                'mensaje' => 'El usuario ingresado no existe o la contraseña ingresada no coincide'));
            header('location: ' . URL . 'login/');
        }
    }

    public function mostrarFormOlvidaste() {
        $data = '<p>Ingrese su dirección de Email para recuperar su contraseña</p>
                <div class="form-group">
                    <label for="exampleInputEmail1">E-mail:</label>
                    <input type="email" class="form-control inputMailForgot" placeholder="Email">
                  </div>';
        return $data;
    }

    public function mostrarFormSolicitar() {
        $data = '<p>Completa los siguientes campos para solicitar su cuenta</p>
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input type="text" class="form-control inputNombre" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <label>Apellido:</label>
                        <input type="text" class="form-control inputApellido" placeholder="Apellido">
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" class="form-control inputEmail" placeholder="E-mail Corporativo">
                    </div>
                ';
        return $data;
    }

    public function resetUserPass($data) {
        #verificamos si existe el email
        $email = $data['usuario'];
        $sql = $this->db->select("select id, usuario from usuario where usuario = '$email' and estado = 1");
        #si existe email regeneramos la contraseña
        if (!empty($sql)) {
            Session::set('message', array(
                'type' => 'success',
                'mensaje' => 'Se ha generado una nueva contraseña para su cuenta. Verifique su correo electronico. Sí no ha recibido nada verifique su casilla de correo no deseado (SPAM).'));
        } else {
            Session::set('message', array(
                'type' => 'error',
                'mensaje' => 'El e-mail ingresado no existe o ha sido desactivado. Si el problema persiste contacte con raul.ramirez@garden.com.py'));
        }
        return true;
    }

    public function createUser($data) {
        #verificamos si existe el email
        $nombre = $data['nombre'];
        $apellido = $data['apellido'];
        $usuario = $data['usuario'];
        #verificamos que el email sea corporativo
        $valido = strstr($usuario, '@', FALSE);
        switch ($valido) {
            case '@garden.com.py':
            case '@tema.com.py':
            case '@nissan.com.py':
                #verificamos que la cuenta aún no se haya creado
                $existe = $this->db->select("select usuario from usuario where usuario = '$usuario'");
                if (empty($existe)) {
                    #generamos una contraseña para el nuevo usuario
                    $pass = Hash::create('sha256', 'garden2017', HASH_PASSWORD_KEY);
                    
                    Session::set('message', array(
                        'type' => 'success',
                        'mensaje' => 'Se ha generado su cuenta. Se le han enviado los datos de acceso a su email.Sí no ha recibido nada verifique su casilla de correo no deseado (SPAM).'));
                } else {
                    Session::set('message', array(
                        'type' => 'error',
                        'mensaje' => 'Lo sentimos, pero la cuenta que está intentando registrar ya existe en el sistema'));
                }
                break;
            default :
                Session::set('message', array(
                    'type' => 'error',
                    'mensaje' => 'Lo sentimos, pero la cuenta que esta intentando registrar no pertenece a Garden o Tema. Si el problema persiste contacte con raul.ramirez@garden.com.py'));
                break;
        }
        return true;
    }

}
