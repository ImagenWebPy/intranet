<?php

class Post extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function contenido() {
        $url = $_GET['url'];
        $url = explode('/', $url);
        $idPost = $url[2];

        $this->view->title = $this->helper->getPostTitle($idPost)['titulo'];
        $this->view->postContent = $this->model->getPostContent($idPost);
        $this->view->postArchivos = $this->helper->getArchivosPOst($idPost);

        $this->view->render('header');
        $this->view->render('post/contenido');
        $this->view->render('footer');
    }

}
