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

    public function fetch_pages() {
        //sanitize post value
        $page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
        //throw HTTP error if page number is not valid
        if (!is_numeric($page_number)) {
            header('HTTP/1.1 500 Invalid page number!');
            exit;
        }
        $data = array(
            'item_per_page' => 20,
            'page_number' => $page_number
        );
        $content = $this->model->fetch_pages($data);
        echo $content;
    }

    public function loadMore() {
        #obtenemos los datos mediante JSON
        $json = json_decode(file_get_contents('php://input'), true);
        $data = array(
            'fecha' => $this->helper->cleanInput($json['fecha']),
            'items' => $this->helper->cleanInput($json['items'])
        );
        header('Content-type: application/json; charset=utf-8');
        $datos = $this->model->loadMore($data);
        echo json_encode($datos);
    }

}
