<?php

class Cuenta extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function micuenta() {

        $this->view->title = "Mi Cuenta";

        $idUsuario = $_SESSION['usuario']['id'];
        $this->view->datos = $this->model->misdatos($idUsuario);
        $this->view->public_css = array("assets/css/vendor/bootstrap-datetimepicker.min.css");
        $this->view->public_js = array("assets/js/vendor/moment.min.js", "assets/js/vendor/bootstrap-datetimepicker.min.js");
        $this->view->render('header');
        $this->view->render('cuenta/micuenta');
        $this->view->render('footer');
    }

    public function modificarDatos() {
        $nombre = utf8_decode($this->helper->cleanInput($_POST['nombre']));
        $apellido = utf8_decode($this->helper->cleanInput($_POST['apellido']));
        $datos = array(
            'nombre' => $nombre,
            'apellido' => $apellido
        );
        $this->model->modificarDatos($datos);
        header('Location:' . URL . 'cuenta/micuenta');
    }

    public function modificarContrasena() {
        $pass1 = utf8_decode($this->helper->cleanInput($_POST['contrasena']));
        $pass2 = utf8_decode($this->helper->cleanInput($_POST['contrasena2']));
        $datos = array(
            'pass1' => $pass1,
            'pass2' => $pass2
        );
        $this->model->modificarContrasena($datos);
        header('Location:' . URL . 'cuenta/micuenta');
    }

}
