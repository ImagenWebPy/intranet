<?php

class Admin extends Controller {

    function __construct() {
        parent::__construct();
        //echo Hash::create('sha256', 'garden2017', HASH_PASSWORD_KEY);
    }

    public function index() {
        #Autenticacion
        Auth::handleLoginAdmin();
        $this->view->title = "Dashboard";

        $this->view->render('admin/header');
        $this->view->render('admin/dashboard/index');
        $this->view->render('admin/footer');

        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function login() {
        $this->view->title = "Inicie sesión";

        $this->view->render('admin/login/header');
        $this->view->render('admin/login/index');
        $this->view->render('admin/login/footer');

        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function iniciar() {
        $datos = array(
            'email' => $this->helper->cleanInput($_POST['email']),
            'password' => $this->helper->cleanInput($_POST['password']),
        );
        $this->model->iniciar($datos);
    }

    public function contenido() {
        $this->view->title = "Contenido";

        $this->view->render('admin/header');
        $this->view->render('admin/contenido/index');
        $this->view->render('admin/footer');

        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function listadoPublicaciones() {
        $parametros = array(
            'marca' => '',
            'categoria' => '',
            'tipo_evento' => '',
            'fecha_desde' => '',
            'fecha_hasta' => ''
        );
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->listadoPublicaciones($parametros);
        echo $data;
    }

    public function mostrarModalEditar() {
        $data = array(
            'id' => $this->helper->cleanInput($_POST['post'])
        );
        header('Content-type: application/json; charset=utf-8');
        $datos = $this->model->mostrarModalEditar($data);
        echo $datos;
    }

}
