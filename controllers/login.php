<?php

class Login extends Controller {

    function __construct() {
        parent::__construct();
        //echo Hash::create('sha256', '3771001', HASH_PASSWORD_KEY);
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
        $helper = new Helper();
        $datos = array(
            'usuario' => $helper->cleanInput($_POST['login']['usuario']),
            'contrasena' => $helper->cleanInput($_POST['login']['password']),
        );
        $this->model->iniciar($datos);
    }

    

    public function salir() {
        session_destroy();
        Auth::handleLogin();
    }

}