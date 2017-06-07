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
                                                (select pa.descripcion from post_archivo pa where pa.id_post = p.id and pa.img_principal = 1 and pa.estado = 1 and pa.id_tipo_archivo = 1) as img
                                        FROM post p
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
                                <img src="assets/img/logo_white.png" class="logo" alt="Logo">
                                <p class="m-site-descr">Multipurpose Portfolio</p>
                            </div>
                        </header>
                    </div>';
        return $content;
    }

}
