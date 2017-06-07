<?php

class Post_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function getPostContent($idPost) {
        $sql = $this->db->select("select id, titulo, contenido, fecha, tags from post where id = $idPost");
        #configuramos los tags
        $enlaces = explode(',', utf8_encode($sql[0]['tags']));
        $tags = '';
        foreach ($enlaces as $item) {
            $tags .= '<a href="#">' . $item . '</a>,';
        }
        $tags = substr($tags, 0, -1);
        $data = array(
            'id' => utf8_encode($sql[0]['id']),
            'titulo' => utf8_encode($sql[0]['titulo']),
            'contenido' => utf8_encode($sql[0]['contenido']),
            'fecha' => date('d-m-Y', strtotime($sql[0]['fecha'])),
            'tags' => $tags
        );
        return $data;
    }

}
