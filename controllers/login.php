<?php

class Login extends Controller {

    function __construct() {
        parent::__construct();
        //echo Hash::create('sha256', 'garden2017', HASH_PASSWORD_KEY);
    }

    public function index() {

        #cargamos la vista
        $this->view->title = 'Login';
        $this->view->render('login/inc/header');
        $this->view->render('login/index');
        $this->view->render('login/inc/footer');

        if (!isset($_SESSION))
            unset($_SESSION['message']);
    }

    public function iniciar() {
        $datos = array(
            'usuario' => $this->helper->cleanInput($_POST['usuario']),
            'contrasena' => $this->helper->cleanInput($_POST['contrasena']),
        );
        $this->model->iniciar($datos);
    }

    public function salir() {
        session_destroy();
        Auth::handleLogin();
    }

    public function mostrarFormOlvidaste() {
        header('Content-Type: application/json');
        $form = $this->model->mostrarFormOlvidaste();
        echo json_encode($form);
    }
    
    public function mostrarFormSolicitar() {
        header('Content-Type: application/json');
        $form = $this->model->mostrarFormSolicitar();
        echo json_encode($form);
    }

    public function resetUserPass() {
        header('Content-Type: application/json');
        $data = array(
            'usuario' => $this->helper->cleanInput($_POST['email'])
        );
        $datos = $this->model->resetUserPass($data);
        echo json_encode($datos);
    }

}
