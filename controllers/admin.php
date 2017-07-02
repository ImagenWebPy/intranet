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

    public function guardarDatosPost() {
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id']),
            'titulo' => $this->helper->cleanInput($_POST['titulo']),
            'fecha' => $this->helper->cleanInput($_POST['fecha']),
            'categoria' => $this->helper->cleanInput($_POST['categoria']),
            'tipo_evento' => $this->helper->cleanInput($_POST['tipo_evento']),
            'estado' => $this->helper->cleanInput($_POST['estado']),
            'tags2' => $this->helper->cleanInput($_POST['tags2']),
            'contenido' => $this->helper->cleanInput($_POST['contenido'])
        );
        $this->model->guardarDatosPost($data);
        header('Location: ' . URL . 'admin/contenido');
    }

    public function uploadImage() {
        if (!empty($_POST)) {
            $idPost = $_POST['data']['id'];
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/archivos/';
            $serverdir = $dir;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $_POST['name'];
            $filename = $name . '.' . $extension;
            //$filename				= $file.'.'.substr(sha1(time()),0,6).'.'.$extension;

            $handle = fopen($serverdir . $filename, 'w');
            fwrite($handle, $file);
            fclose($handle);

            header('Content-type: application/json; charset=utf-8');
            $data = array(
                'id' => $idPost,
                'archivo' => $filename
            );
            $response = $this->model->uploadImage($data);
            echo json_encode($response);

            //echo json_encode(array('result'=>true));
        } else {
            $filename = basename($_SERVER['QUERY_STRING']);
            $file_url = '/public/archivos/' . $filename;
            header('Content-Type: 				application/octet-stream');
            header("Content-Transfer-Encoding: 	Binary");
            header("Content-disposition: 		attachment; filename=\"" . basename($file_url) . "\"");
            readfile($file_url);
            exit();
        }
    }
    
    public function uploadVideo() {
        if (!empty($_POST)) {
            $idPost = $_POST['data']['id'];
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/archivos/';
            $serverdir = $dir;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $_POST['name'];
            $filename = $name . '.' . $extension;
            //$filename				= $file.'.'.substr(sha1(time()),0,6).'.'.$extension;

            $handle = fopen($serverdir . $filename, 'w');
            fwrite($handle, $file);
            fclose($handle);

            header('Content-type: application/json; charset=utf-8');
            $data = array(
                'id' => $idPost,
                'archivo' => $filename
            );
            $response = $this->model->uploadVideo($data);
            echo json_encode($response);

            //echo json_encode(array('result'=>true));
        } else {
            $filename = basename($_SERVER['QUERY_STRING']);
            var_dump($filename);
            $file_url = '/public/archivos/' . $filename;
            header('Content-Type: 				application/octet-stream');
            header("Content-Transfer-Encoding: 	Binary");
            header("Content-disposition: 		attachment; filename=\"" . basename($file_url) . "\"");
            readfile($file_url);
            exit();
        }
    }

    public function mostrarImgBtn() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->mostrarImgBtn($data);
        echo json_encode($datos);
    }
    
    public function imgPrincipal() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->imgPrincipal($data);
        echo json_encode($datos);
    }
    
    public function eliminarIMG() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->eliminarIMG($data);
        echo json_encode($datos);
    }
    
    public function agregarContenido() {
        header('Content-type: application/json; charset=utf-8');
        $datos = $this->model->agregarContenido();
        echo json_encode($datos);
    }

}
