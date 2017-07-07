<?php

class Error extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    function index() {
        $this->view->title = '404 Error';
        $this->view->msg = 'La página que está intentando acceder no existe o ha sido cambiada.';
        $this->view->render('error/inc/header');
        $this->view->render('error/index');
        $this->view->render('error/inc/footer');
    }

}