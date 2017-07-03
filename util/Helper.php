<?php

//require 'libs/Database.php';

/**
 * Archivo helper.php
 * Funciones complementarias para utilzar en todo el sistema
 */
class Helper {

    function __construct() {
        $this->db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
    }

    /**
     * Funcion para limpiar un string
     * @param strig $String a quitar caracteres especiales y espacios
     * @return string formateado
     */
    public function cleanUrl($String) {
        $String = str_replace(array('á', 'à', 'â', 'ã', 'ª', 'ä'), "a", $String);
        $String = str_replace(array('Á', 'À', 'Â', 'Ã', 'Ä'), "A", $String);
        $String = str_replace(array('Í', 'Ì', 'Î', 'Ï'), "I", $String);
        $String = str_replace(array('í', 'ì', 'î', 'ï'), "i", $String);
        $String = str_replace(array('é', 'è', 'ê', 'ë'), "e", $String);
        $String = str_replace(array('É', 'È', 'Ê', 'Ë'), "E", $String);
        $String = str_replace(array('ó', 'ò', 'ô', 'õ', 'ö', 'º'), "o", $String);
        $String = str_replace(array('Ó', 'Ò', 'Ô', 'Õ', 'Ö'), "O", $String);
        $String = str_replace(array('ú', 'ù', 'û', 'ü'), "u", $String);
        $String = str_replace(array('Ú', 'Ù', 'Û', 'Ü'), "U", $String);
        $String = str_replace(array('?', '[', '^', '´', '`', '¨', '~', ']', '¿', '!', '¡'), "", $String);
        $String = str_replace("ç", "c", $String);
        $String = str_replace("Ç", "C", $String);
        $String = str_replace("ñ", "n", $String);
        $String = str_replace("Ñ", "N", $String);
        $String = str_replace("Ý", "Y", $String);
        $String = str_replace("ý", "y", $String);

        $String = str_replace("'", "", $String);
        $String = str_replace(".", "_", $String);
        $String = str_replace(" ", "_", $String);
        $String = str_replace("/", "_", $String);

        $String = str_replace("&aacute;", "a", $String);
        $String = str_replace("&Aacute;", "A", $String);
        $String = str_replace("&eacute;", "e", $String);
        $String = str_replace("&Eacute;", "E", $String);
        $String = str_replace("&iacute;", "i", $String);
        $String = str_replace("&Iacute;", "I", $String);
        $String = str_replace("&oacute;", "o", $String);
        $String = str_replace("&Oacute;", "O", $String);
        $String = str_replace("&uacute;", "u", $String);
        $String = str_replace("&Uacute;", "U", $String);
        return $String;
    }

    /**
     * Funcion para limpiar un input antes de enviarlo por post
     * @param type $data
     * @return type
     */
    public function cleanInput($data) {
        $data = trim($data);
        $data = str_replace("'", "\'", $data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);

        return $data;
    }

    /**
     * Funcion para mostrar mensajes de alerta
     * @param string $type (success - info - warning - error)
     * @param string $message (mensaje a mostrar)
     * @return string
     */
    public function messageAlert($type, $message) {
        $alert = "";
        switch ($type) {
            case 'success':
                $alert .= '<div class="alert alert-success" role="alert">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            ' . $message . '
                        </div>';
                break;
            case 'info':
                $alert .= '<div class="alert alert-info" role="alert">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            ' . $message . '
                        </div>';
                break;
            case 'warning':
                $alert .= '<div class="alert alert-warning" role="alert">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            ' . $message . '
                        </div>';
                break;
            case 'error':
                $alert .= '<div class="alert alert-danger" role="alert">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            ' . $message . '
                        </div>';
                break;
        }
        return $alert;
    }

    /**
     * 
     * @return string url anterior del sitio
     */
    public function getUrlAnterior() {
        $url = (!empty($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : '';
        return $url;
    }

    /**
     * Funcion que retorna la url actual en forma de array
     * @return array url
     */
    public function getUrl() {
        $url = $_GET['url'];
        $url = explode('/', $url);
        return $url;
    }

    /**
     * Funcion que lista las opciones del campo enum de una tabla
     * @param string $table
     * @param string $field
     * @return array con las opciones del campo enum
     */
    public function getEnumOptions($table, $field) {
        $finalResult = array();
        if (strlen(trim($table)) < 1)
            return false;
        $query = $this->db->select("show columns from $table");
        foreach ($query as $row) {
            if ($field != $row["Field"])
                continue;
            //check if enum type 
            if (preg_match('/enum.(.*)./', $row['Type'], $match)) {
                $opts = explode(',', $match[1]);
                foreach ($opts as $item)
                    $finalResult[] = substr($item, 1, strlen($item) - 2);
            } else
                return false;
        }
        return $finalResult;
    }

    /**
     * Funcion para obtener las paginas donde nos encontramos
     * @return array
     */
    public function getPage() {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $pagina = (explode('/', $url));
        return $pagina;
    }

    /**
     * Devuelve la ip del visitante
     * @return string IP
     */
    public function getReal_ip() {
        if (isset($_SERVER["HTTP_CLIENT_IP"])) {
            return $_SERVER["HTTP_CLIENT_IP"];
        } elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {
            return $_SERVER["HTTP_X_FORWARDED_FOR"];
        } elseif (isset($_SERVER["HTTP_X_FORWARDED"])) {
            return $_SERVER["HTTP_X_FORWARDED"];
        } elseif (isset($_SERVER["HTTP_FORWARDED_FOR"])) {
            return $_SERVER["HTTP_FORWARDED_FOR"];
        } elseif (isset($_SERVER["HTTP_FORWARDED"])) {
            return $_SERVER["HTTP_FORWARDED"];
        } else {
            return $_SERVER['REMOTE_ADDR'];
        }
    }

    /**
     * Funcion que obtiene el listado de las categorias
     * @return array
     */
    public function listadoCategorias() {
        $sqlListado = $this->db->select("select c.id,c.descripcion,c.tag from categoria c where c.estado =1");
        return $sqlListado;
    }

    /**
     * Funcion que obtiene el HOST actual
     * @return string
     */
    public function getHost() {
        $host = $_SERVER['HTTP_HOST'];
        return $host;
    }

    /**
     * Funcion que envia un correo a travez de la funcion mail de PHP.
     * @param string $para
     * @param string $asunto
     * @param string $mensaje
     */
    public function sendMail($para, $asunto, $mensaje) {
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: Garden Intranet <noresponder@garden.com.py>' . "\r\n";
        $headers .= 'Reply-To: noresponder@garden.com.py' . "\r\n";
        mail($para, $asunto, $mensaje, $headers);
    }

    public function getContenidoPrincipal() {
        $contenido = $this->db->select("SELECT  p.id,
                                                p.titulo,
                                                p.contenido,
                                                (select pa.descripcion from post_archivo pa where pa.id_post = p.id and pa.img_principal = 1 and pa.estado = 1 and pa.id_tipo_archivo = 1) as img,
                                                te.descripcion as evento,
                                                p.fecha
                                        FROM post p
                                        LEFT JOIN post_tipo pt on pt.id_post = p.id
                                        LEFT JOIN tipo_evento te on te.id = pt.id_tipo_evento
                                        where p.estado = 1
                                        ORDER BY p.fecha DESC
                                        LIMIT 20");
        return $contenido;
    }

    public function getArchivosPOst($idPost) {
        $contenido = $this->db->select("SELECT pa.descripcion,
                                                pa.img_principal,
                                                ta.descripcion as tipoArchivo
                                        FROM post_archivo pa 
                                        LEFT JOIN tipo_archivo ta on ta.id = pa.id_tipo_archivo
                                        WHERE pa.id_post = $idPost;");
        #verificamos que dentro de los archivos no haya ningun video
        $video = false;
        foreach ($contenido as $item) {
            if ($item['tipoArchivo'] == 'Video') {
                $video = true;
            }
        }
        $data = array(
            'tipo' => '',
            'video' => array(),
            'imagenes' => array()
        );
        if ($video == true) {
            $data['tipo'] = 'video';
            foreach ($contenido as $item) {
                if ($item['tipoArchivo'] == 'Video') {
                    $extension = strstr($item['descripcion'], '.', FALSE);
                    $extension = str_replace('.', '', $extension);
                    if ($extension == 'mp4') {
                        $type = 'video/mp4';
                    } else {
                        $type = 'video/ogg';
                    }
                    array_push($data['video'], array('archivo' => $item['descripcion'], 'type' => $type));
                } else {
                    array_push($data['imagenes'], array('imagen' => $item['descripcion'], 'principal' => $item['img_principal']));
                }
            }
        } else {
            $data['tipo'] = 'imagen';
            foreach ($contenido as $item) {
                if ($item['tipoArchivo'] != 'video')
                    array_push($data['imagenes'], array('imagen' => $item['descripcion'], 'principal' => $item['img_principal']));
            }
        }
        return $data;
    }

    public function getTagsPost($idPost) {
        $tags = array();
        $categoria = $this->db->select("SELECT c.descripcion,c.tag FROM post_categoria pc
                                        LEFT JOIN categoria c on c.id = pc.id_categoria
                                        where pc.id_post = $idPost");
        $tipo = $this->db->select("select te.descripcion, te.tag from post_tipo pt
                                    LEFT JOIN tipo_evento te on te.id = pt.id_tipo_evento
                                    where pt.id_post = $idPost;");
        foreach ($categoria as $item) {
            array_push($tags, $item['tag']);
        }
        foreach ($tipo as $item) {
            array_push($tags, $item['tag']);
        }
        $tags = implode(',', $tags);
        return $tags;
    }

    public function getTiposEventos() {
        $eventos = $this->db->select("select te.descripcion,te.tag from tipo_evento te;");
        return $eventos;
    }

    public function getPostTitle($idPost) {
        $sql = $this->db->select("select titulo from post where id = $idPost");
        $data = array(
            'url' => $this->cleanUrl(utf8_encode($sql[0]['titulo'])),
            'titulo' => utf8_encode($sql[0]['titulo'])
        );
        return $data;
    }

    public function mostrarMobileLogo() {
        $content = '<div id="header-mobile" class="visible-xs">
                        <header>
                            <div class="m-header-body">
                                <img src="' . URL . 'public/assets/img/logo-garden.png" class="logo" alt="Logo">
                                <p class="m-site-descr">Hola ' . $_SESSION['usuario']['nombre'] . ' ' . $_SESSION['usuario']['apellido'] . '</p>
                            </div>
                        </header>
                    </div>';
        return $content;
    }

    public function mesEspanol($month) {
        switch (strtolower($month)) {
            case 'january':
                $mes = 'Enero';
                break;
            case 'february  ':
                $mes = 'Febrero';
                break;
            case 'march':
                $mes = 'Marzo';
                break;
            case 'april':
                $mes = 'Abril';
                break;
            case 'may':
                $mes = 'Mayo';
                break;
            case 'june':
                $mes = 'Junio';
                break;
            case 'july':
                $mes = 'Julio';
                break;
            case 'september':
                $mes = 'Septiembre';
                break;
            case 'october':
                $mes = 'Octubre';
                break;
            case 'november':
                $mes = 'Noviembre';
                break;
            case 'december':
                $mes = 'Diciembre';
                break;
        }
        return $mes;
    }

    public function get_ip_address() {
        $ip_keys = array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR');
        foreach ($ip_keys as $key) {
            if (array_key_exists($key, $_SERVER) === true) {
                foreach (explode(',', $_SERVER[$key]) as $ip) {
                    // trim for safety measures
                    $ip = trim($ip);
                    // attempt to validate IP
                    if ($this->validate_ip($ip)) {
                        return $ip;
                    }
                }
            }
        }
        return isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : false;
    }

    /**
     * Ensures an ip address is both a valid IP and does not fall within
     * a private network range.
     */
    private function validate_ip($ip) {
        if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 | FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) === false) {
            return false;
        }
        return true;
    }

    public function getCategorias() {
        $sql = $this->db->select("select * from categoria");
        return $sql;
    }

    public function getTipoEventos() {
        $sql = $this->db->select("select * from tipo_evento");
        return $sql;
    }

    /**
     * Funcion que retorna los archivos relacionados un post
     * @param int $idPost
     * @param int $tipoArchivo (Imagen = 1,Video = 2)
     * @return array
     */
    public function getFilesPost($idPost, $tipoArchivo) {
        $sql = $this->db->select("select pa.id,
                                        pa.descripcion,
                                        pa.img_principal,
                                        pa.estado
                                from post_archivo pa 
                                where pa.id_post = $idPost 
                                and pa.id_tipo_archivo = $tipoArchivo");
        return $sql;
    }

    public function loadGalleryImage($id, $tipo) {
        $imagenes = $this->getFilesPost($id, $tipo);
        $contenido = '';
        foreach ($imagenes as $item) {
            $id = $item['id'];
            if ($item['img_principal'] == 1) {
                $img_principal = '<a class="pointer btnImgPrincipal" id="imgPrincipal' . $id . '" data-id="' . $id . '"><span class="label label-success">Principal</span></a>';
                $imgPrincipal = utf8_encode($item['descripcion']);
            } else {
                $img_principal = '<a class="pointer btnImgPrincipal" id="imgPrincipal' . $id . '" data-id="' . $id . '"><span class="label label-warning">Principal</span></a>';
            }
            if ($item['estado'] == 1) {
                $mostrar = '<a class="pointer btnMostrarImg" id="mostrarImg' . $id . '" data-id="' . $id . '"><span class="label label-success">Visible</span></a>';
            } else {
                $mostrar = '<a class="pointer btnMostrarImg" id="mostrarImg' . $id . '" data-id="' . $id . '"><span class="label label-danger">Oculta</span></a>';
            }
            $contenido .= '     <div class="col-sm-3" id="imagenGaleria' . $id . '">
                                    <img class="img-responsive" src="' . ARCHIVOS . utf8_encode($item['descripcion']) . '" alt="Photo">
                                    <p>' . $img_principal . ' | ' . $mostrar . ' | <a class="pointer btnEliminarImg" data-id="' . $id . '" id="eliminarImg' . $id . '"><span class="label label-danger">Eliminar</span></a></p>
                                </div>
                                <!-- /.col -->';
        }
        return $contenido;
    }

    public function loadImage($id) {
        $item = $this->getImage($id);
        $id = $item[0]['id'];
        $img_principal = '<a class="pointer btnImgPrincipal" id="imgPrincipal' . $id . '" data-id="' . $id . '"><span class="label label-warning">Principal</span></a>';
        $mostrar = '<a class="pointer btnMostrarImg" id="mostrarImg' . $id . '" data-id="' . $id . '"><span class="label label-success">Visible</span></a>';
        $contenido = '<div class="col-sm-3" id="imagenGaleria' . $id . '">
                        <img class="img-responsive" src="' . ARCHIVOS . utf8_encode($item[0]['descripcion']) . '" alt="Photo">
                        <p>' . $img_principal . ' | ' . $mostrar . ' | <a class="pointer btnEliminarImg" data-id="' . $id . '" id="eliminarImg' . $id . '"><span class="label label-danger">Eliminar</span></a></p>
                      </div>
                      <!-- /.col -->';
        return $contenido;
    }

    public function getImage($id) {
        $item = $this->db->select("select pa.id, 
                                        pa.descripcion,
                                        pa.img_principal,
                                        pa.estado,
                                        pa.id_post
                                from post_archivo pa 
                                where pa.id = $id");
        return $item;
    }

    public function loadVideo($id) {
        $video = $this->getFilesPost($id, 2);
        $videos = $this->getArchivosPOst($id);
        $imgVideo = '';
        foreach ($videos['imagenes'] as $item) {
            if ($item['principal'] == 1) {
                $imgVideo = utf8_encode($item['imagen']);
            }
        }
        $contenido = '     <video class="video-js vjs-default-skin vjs-mental-skin" width="100%" height="100%" controls preload="none"
                                    poster=' . URL . 'public/archivos/' . $imgVideo . '
                                    data-setup="{}">
                                    <source src="' . URL . '/public/archivos/' . utf8_encode($videos['video'][0]['archivo']) . '" type="' . $videos['video'][0]['type'] . '" />
                                </video>';
        return $contenido;
    }

}
