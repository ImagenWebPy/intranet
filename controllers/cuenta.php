<?php

class Cuenta extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function micuenta() {

        $this->view->title = "Mi Cuenta";

        $idUsuario = $_SESSION['usuario']['id'];
        $this->view->datos = $this->model->misdatos($idUsuario);
        $this->view->public_css = array("assets/css/bootstrap-datetimepicker.min.css");
        $this->view->public_js = array("assets/js/bootstrap-datetimepicker.min.js");
        $this->view->render('header');
        $this->view->render('cuenta/micuenta');
        $this->view->render('footer');
    }

}
