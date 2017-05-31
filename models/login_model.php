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
                'nombre' => utf8_encode($data['nombre']),
                'apellido' => utf8_encode($data['apellido']),
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
        $sql = $this->db->select("select id, nombre, usuario from usuario where usuario = '$email' and estado = 1");
        #si existe email regeneramos la contraseña
        if (!empty($sql)) {
            $idUser = $sql[0]['id'];
            $usuario = $sql[0]['usuario'];
            $nombre = utf8_encode($sql[0]['nombre']);
            #regeneramos la contraseña
            $newPass = Hash::create('sha256', PASS_REGENERAR, HASH_PASSWORD_KEY);
            $updatePass = array(
                'contrasena' => $newPass
            );
            $this->db->update('usuario', $updatePass, "`id` = $idUser");
            #enviamos el email
            $para = $email;
            $asunto = 'Nueva acceso generado - Intranet | Garden';
            $mensaje = '<table width="800" align="center" border="0" cellspacing="0" cellpadding="5">
                            <tr>
                                <td colspan="2">Hola, ' . $nombre . ':</td>
                            </tr>
                            <tr>
                                <td colspan="2">Tu contraseña para la intranet ha sido restablecida.</td>
                            </tr>
                            <tr>
                                <td colspan="2">Contraseña restablecida en fecha: ' . date('d-m-Y H:i:s') . '</td>
                            </tr>
                            <tr>
                                <td width="155" align="right"><strong>Usuario:</strong></td>
                                <td width="625">' . $usuario . '</td>
                            </tr>
                            <tr>
                                <td width="155" align="right"><strong>Contraseña:</strong></td>
                                <td width="625">' . PASS_REGENERAR . '</td>
                            </tr>
                            <tr>
                                <td colspan="2">Para proteger tu cuenta, te recomendamos que cambies esta contraseña lo antes posible.</td>
                            </tr>
                        </table>';
            $this->helper->sendMail($para, $asunto, $mensaje);
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
                    #creamos la cuenta
                    $pass = Hash::create('sha256', PASS_REGENERAR, HASH_PASSWORD_KEY);
                    $this->db->insert('usuario', array(
                        'usuario' => $usuario,
                        'contrasena' => $pass,
                        'nombre' => utf8_decode($nombre),
                        'apellido' => utf8_decode($apellido),
                        'estado' => 1,
                    ));
                    #Enviamos el email
                    $para = $usuario;
                    $asunto = 'Intranet - Garden Automotores';
                    $mensaje = '<table width="800" align="center" border="0" cellspacing="0" cellpadding="5">
                            <tr>
                                <td colspan="2">Hola, ' . $nombre . ':</td>
                            </tr>
                            <tr>
                                <td colspan="2">Tu cuenta para la intranet ha sido creada.</td>
                            </tr>
                            <tr>
                                <td colspan="2">Tus datos para ingresar:</td>
                            </tr>
                            <tr>
                                <td width="155" align="right"><strong>Usuario:</strong></td>
                                <td width="625">' . $usuario . '</td>
                            </tr>
                            <tr>
                                <td width="155" align="right"><strong>Contraseña:</strong></td>
                                <td width="625">' . PASS_REGENERAR . '</td>
                            </tr>
                            <tr>
                                <td colspan="2">Para proteger tu cuenta, te recomendamos que cambies esta contraseña lo antes posible.</td>
                            </tr>
                        </table>';
                    $this->helper->sendMail($para, $asunto, $mensaje);
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
                    'mensaje' => 'Lo sentimos, pero la cuenta que esta intentando registrar no pertenece a Garden,Tema o Nissan. Si el problema persiste contacte con raul.ramirez@garden.com.py'));
                break;
        }
        return true;
    }

}
