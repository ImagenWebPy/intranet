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

    public function loadMore($data) {
        $fecha = $data['fecha'];
        $items_per_page = $data['items'];
        $sql = $this->db->select("SELECT  p.id,
                                          p.titulo,
                                          p.contenido,
                                          (select pa.descripcion from post_archivo pa where pa.id_post = p.id and pa.img_principal = 1 and pa.estado = 1 and pa.id_tipo_archivo = 1) as img,
                                          te.descripcion as evento,
                                          p.fecha
                                FROM post p
                                LEFT JOIN post_tipo pt on pt.id_post = p.id
                                LEFT JOIN tipo_evento te on te.id = pt.id_tipo_evento
                                where p.estado = 1
                                and p.fecha < '$fecha'
                                ORDER BY p.fecha DESC
                                LIMIT $items_per_page");
        $lista = '';
        $fechaUltimoPost = '';
        foreach ($sql as $contenido) {
            $tituloPost = (strlen($contenido['titulo']) > 35) ? substr(utf8_encode($contenido['titulo']), 0, 35) . '...' : utf8_encode($contenido['titulo']);
            $fechaPost = $this->helper->mesEspanol(date('F', strtotime($contenido['fecha']))) . '-' . date('Y', strtotime($contenido['fecha']));
            $contenidoResumido = (strlen($contenido['contenido']) > 180) ? substr(utf8_encode($contenido['contenido']), 0, 180) . '...' : utf8_encode($contenido['contenido']);
            $lista .= '<li class="gl-item gl-fixed-ratio-item gl-loading" data-category="' . $this->helper->getTagsPost($contenido['id']) . '">
                        <a href="#">
                            <figure>
                                <img src="' . URL . 'public/archivos/' . $contenido['img'] . '" alt="">
                                <figcaption>
                                    <div class="middle"><div class="middle-inner">
                                            <p class="gl-item-title sourcePro">' . utf8_encode($contenido['titulo']) . '</p>
                                        </div></div>
                                </figcaption>

                            </figure>
                            <div class="divTitulosPost">
                                <p class="tipoEvento">' . utf8_encode($contenido['evento']) . '</p>
                                <p class="tituloPost">' . $tituloPost . '</p>
                                <p class="fechaPost">' . $fechaPost . '</p>
                            </div>
                        </a>
                        <div class="gl-preview" style="diplay:none;" data-category="' . $this->helper->getTagsPost($contenido['id']) . '">
                            <span class="glp-arrow"></span>
                            <a href="#" class="glp-close"></a>
                            <div class="row gl-preview-container">';
            $archivos = $this->helper->getArchivosPOst($contenido['id']);
            if ($archivos['tipo'] == 'imagen') {
                $lista .= '         <div class="col-sm-8">
                                        <div id="carousel-gallery-1" class="carousel slide" data-ride="carousel" data-interval="false">
                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner">';
                foreach ($archivos['imagenes'] as $item) {
                    $lista .= '                 <div class="item ' . ($item['principal'] == 1) ? 'active' : '' . '">
                                                    <img src="' . URL . 'public/archivos/' . $item['imagen'] . '" alt="slide">
                                                </div>';
                }
                $lista .= '                 </div>
                                            <ol class="carousel-indicators">';
                for ($i = 0; $i <= (count($archivos['imagenes']) - 1); $i++) {
                    $lista .= '                 <li data-target="#carousel-gallery-1" data-slide-to="' . $i . '"></li>';
                }
                $lista .= '                 </ol>
                                            <!-- Controls -->
                                            <a class="left carousel-control" href="#carousel-post-1" data-slide="prev">
                                                <span></span>
                                            </a>
                                            <a class="right carousel-control" href="#carousel-post-1" data-slide="next">
                                                <span></span>
                                            </a>
                                        </div> <!-- carousel -->
                                    </div>';
            } else {
                $imgVideo = '';
                foreach ($archivos['imagenes'] as $item) {
                    if ($item['principal'] == 1) {
                        $imgVideo = utf8_encode($item['imagen']);
                    }
                }
                $lista .= ' <div class="col-sm-8">
                                        <div class="glp-video">
                                            <video class="video-js vjs-default-skin vjs-mental-skin" width="100%" height="100%" controls preload="none"
                                                   poster="' . URL . 'public/archivos/' . $imgVideo . '"
                                                   data-setup="{}">';
                foreach ($archivos['video'] as $item) {
                    $lista .= ' <source src="' . URL . '/public/archivos/' . utf8_encode($item['archivo']) . '" type="' . $item['type'] . '" />';
                }
                $lista .= '</video>
                                        </div>
                                    </div>';
            }
            $lista .= '<div class="col-sm-4 lg-preview-descr sourcePro">
                                    <h4>' . utf8_encode($contenido['titulo']) . '</h4>
                                    ' . $contenidoResumido . '
                                    <a href="' . URL . 'post/contenido/' . $contenido['id'] . '/' . $this->helper->getPostTitle($contenido['id'])['url'] . '" class="btn btn-primary glp-readmore linkWhite">Leer màs</a>
                                </div>
                            </div>
                        </div> <!-- gl-preview -->
                    </li>';
            $fechaUltimoPost = $contenido['fecha'];
        }
        $datos = array(
            'lista' => $lista,
            'fecha_ultimo_post' => $fechaUltimoPost
        );
        return $datos;
    }

}
