<?php

class Admin_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function iniciar($data) {
        $email = $data['email'];
        $password = trim(Hash::create('sha256', $data['password'], HASH_PASSWORD_KEY));
        $sth = $this->db->prepare("Select a.nombre,
                                           a.email
                                   FROM admin a
                                   WHERE a.email = :email
                                   AND a.password = :password
                                   AND estado = 1");
        $sth->execute(array(
            ':email' => $email,
            ':password' => $password
        ));
        $data = $sth->fetch();
        $count = $sth->rowCount();
        if ($count > 0) {
            // login
            Session::set('admin', array(
                'nombre' => $data['nombre'],
                'email' => $data['email']
            ));
            header('location: ' . URL . 'admin/');
        } else {
            Session::set('message', array(
                'type' => 'error',
                'mensaje' => 'El usuario ingresado no existe o la contraseña ingresada no coincide'));
            header('location: ' . URL . 'admin/');
        }
    }

    public function listadoPublicaciones($parametros) {
        $sql = $this->db->select("select p.id,
                                        p.fecha,
                                        p.titulo,
                                        p.estado,
                                        c.descripcion as categoria,
                                        te.descripcion as tipo_contenido
                                from post p 
                                LEFT JOIN post_categoria pc on pc.id_post = p.id
                                LEFT JOIN categoria c on c.id = pc.id_categoria
                                LEFT JOIN post_tipo pt on pt.id_post = p.id
                                LEFT JOIN tipo_evento te on te.id = pt.id_tipo_evento 
                                ORDER BY p.fecha DESC");
        $datos = array();
        foreach ($sql as $item) {
            $idPost = $item['id'];
            if ($item['estado'] == 1) {
                $estado = '<span><a class="pointer label label-success linkListaEstadoPost" data-post="' . $idPost . '">Visible</a></span>';
            } else {
                $estado = '<span><a class="pointer label label-danger linkListaEstadoPost" data-post="' . $idPost . '">Oculto</a></span>';
            }
            $acciones = '<a class="btn btn-sm btnEditPost" data-post="' . $idPost . '"><i class="fa fa-edit"></i>Editar</a> <a class="btn btn-sm btnDeletePost" data-post="' . $idPost . '"><i class="fa fa-trash"></i>Eliminar</a>';
            array_push($datos, array(
                'fecha' => date('d-m-Y', strtotime($item['fecha'])),
                'titulo' => utf8_encode($item['titulo']),
                'categoria' => utf8_encode($item['categoria']),
                'tipo_contenido' => utf8_encode($item['tipo_contenido']),
                'estado' => $estado,
                'acciones' => $acciones
            ));
        }
        $json = '{"data": ' . json_encode($datos) . '}';
        return $json;
    }

    public function mostrarModalEditar($data) {
        $id = $data['id'];
        $selectState1 = '';
        $selectState0 = '';
        $sql = $this->db->select("select p.titulo,
                                        p.contenido,
                                        p.tags,
                                        p.estado,
                                        p.fecha,
                                        pc.id_categoria,
                                        c.descripcion as categoria,
                                        pt.id_tipo_evento,
                                        te.descripcion as tipo_evento
                                from post p
                                LEFT JOIN post_categoria pc on pc.id_post = p.id
                                LEFT JOIN categoria c on c.id = pc.id_categoria
                                LEFT JOIN post_tipo pt on pt.id_post = p.id
                                LEFT JOIN tipo_evento te on te.id = pt.id_tipo_evento
                                where p.id = $id");
        if ($sql[0]['estado'] == 1) {
            $selectState1 = 'selected';
        } else {
            $selectState0 = 'selected';
        }
        $contenido = '<div class="box box-primary">
                        <div class="box-header with-border">
                          <h3 class="box-title">Editar Contenido</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form role="form" method="POST" action="' . URL . 'admin/guardarDatosPost" class="frmModificarPost">
                                <input type="hidden" value="' . $id . '" name="id">
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Título</label>
                                      <input type="text" class="form-control" placeholder="ingrese un título" value="' . utf8_encode($sql[0]['titulo']) . '" name="titulo">
                                    </div>
                                </div>
                                <div class="cold-md-6">
                                    <div class="form-group">
                                        <label>Fecha Evento:</label>
                                        <div class="input-group date">
                                          <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                          </div>
                                          <input type="text" class="form-control pull-right datepicker" value="' . date('d-m-Y', strtotime($sql[0]['fecha'])) . '" name="fecha">
                                        </div>
                                        <!-- /.input group -->
                                      </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Categoría</label>
                                        <select class="form-control" name="categoria">';
        foreach ($this->helper->getCategorias() as $item) {
            $actived = ($item['id'] == $sql[0]['id_categoria']) ? 'selected' : '';
            $contenido .= '<option value="' . $item['id'] . '" ' . $actived . '>' . utf8_encode($item['descripcion']) . '</option >';
        }
        $contenido .= '                 </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tipo Evento</label>
                                        <select class="form-control" name="tipo_evento">';
        foreach ($this->helper->getTipoEventos() as $item) {
            $actived = ($item['id'] == $sql[0]['id_tipo_evento']) ? 'selected' : '';
            $contenido .= '<option value="' . $item['id'] . '" ' . $actived . '>' . utf8_encode($item['descripcion']) . '</option >';
        }
        $contenido .= '                 </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Estado</label>
                                        <select class="form-control" name="estado">
                                          <option value="1" ' . $selectState1 . '>Activo</option>
                                          <option value="0" ' . $selectState0 . '>Inactivo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Tags</label>
                                      <input type="text" class="form-control" id="tags" placeholder="Ingrese los tags separados por comas(,)" value="' . utf8_encode($sql[0]['tags']) . '" name="tags">
                                          <p class="help-block">Ingrese palabras separadas por comas(,)</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="box-body pad">
                                        <textarea id="contenido" name="contenido" rows="10" cols="80" name="contenido">' . utf8_encode($sql[0]['contenido']) . '</textarea>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-block btn-primary btn-lg btnGuardarCambios">Guardar Cambios</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.box-body --> 
                    </div>
                    <div class="box box-primary">
                        <div class="box-header with-border">
                          <h3 class="box-title">Imagenes</h3>
                        </div>
                        <div class="box-body">
                            <div class="row" style="margin: 20px;">
                                <div class="col-md-12" style="margin:10px;">
                                    <button type="button" class="btn btn-primary pull-right btnAddImagen"><i class="fa fa-plus" aria-hidden="true"></i> Agregar Imagen</button>
                                </div>
                                <div class="col-md-12 divSubir" style="display:none;">
                                    <div class="html5fileupload demo_multi" data-multiple="true" data-url="' . URL . 'admin/uploadImage" data-valid-extensions="jpg,png,jpeg,gif" style="width: 100%;">
                                        <input type="file" name="file" />
                                    </div>
                                    <script>
                                        $(".html5fileupload.demo_multi").html5fileupload({
                                            data:{id:' . $id . '},
                                            onAfterStartSuccess: function(response) {
                                                $("#postImagenes" + response.id).append(response.content);
                                            }
                                        });
                                    </script>
                                </div>
                            </div>
                            <div class="row" id="postImagenes' . $id . '">';

        $contenido .= $this->helper->loadGalleryImage($id, 1);
        $video = $this->helper->getFilesPost($id, 2);
        $contenido .= '     </div>    
                        </div>
                    </div>
                    <div class="box box-primary">
                        <div class="box-header with-border">
                          <h3 class="box-title">Video</h3>
                        </div>
                        <div class="box-body">
                            <div class="row">';
        if (!empty($video[0])) {
            $videos = $this->helper->getArchivosPOst($id);
            $imgVideo = '';
            foreach ($videos['imagenes'] as $item) {
                if ($item['principal'] == 1) {
                    $imgVideo = utf8_encode($item['imagen']);
                }
            }
            $contenido .= '     <video class="video-js vjs-default-skin vjs-mental-skin" width="100%" height="100%" controls preload="none"
                                    poster=' . URL . 'public/archivos/' . $imgVideo . '
                                    data-setup="{}">
                                    <source src="' . URL . '/public/archivos/' . utf8_encode($videos['video'][0]['archivo']) . '" type="' . $videos['video'][0]['type'] . '" />
                                </video>';
        } else {
            $contenido .= $this->helper->messageAlert('info', 'Este post no contiene ningún video');
        }
        $contenido .= '     </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $(".datepicker").datepicker({
                            format: "dd-mm-yyyy",
                            autoclose: true
                        });
                        $("#tags").tagsInput();
                        CKEDITOR.replace("contenido");
                    </script>';
        $datos = array(
            'titulo' => utf8_encode($sql[0]['titulo']),
            'contenido' => $contenido
        );
        return json_encode($datos);
    }

    public function guardarDatosPost($data) {
        $idPost = $data['id'];
        #TABLA POST
        $updatePost = array(
            'titulo' => utf8_decode($data['titulo']),
            'contenido' => utf8_decode($data['contenido']),
            'tags' => utf8_decode($data['tags2']),
            'fecha' => date('Y-m-d', strtotime($data['fecha'])) . ' ' . date('H:i:s'),
            'estado' => $data['estado']
        );
        $this->db->update('post', $updatePost, "`id` = $idPost");

        #TABLA POST_CATEGORIA
        $updateCategoria = array(
            'id_categoria' => $data['categoria']
        );
        $this->db->update('post_categoria', $updateCategoria, "`id_post` = $idPost");
        #TABLA POST_TIPO
        $updateTipo = array(
            'id_tipo_evento' => $data['tipo_evento']
        );
        $this->db->update('post_tipo', $updateTipo, "`id_post` = $idPost");
    }

    public function uploadImage($data) {
        $id = $data['id'];
        $this->db->insert('post_archivo', array(
            'id_post' => $id,
            'id_tipo_archivo' => 1,
            'descripcion' => $data['archivo'],
            'estado' => 1
        ));
        $id_img = $this->db->lastInsertId();
        $contenido = $this->helper->loadImage($id_img);
        $datos = array(
            "result" => true,
            'id' => $id,
            'content' => $contenido
        );
        return $datos;
    }

    public function mostrarImgBtn($data) {
        $id = $data['id'];
        $image = $this->helper->getImage($id);
        if ($image[0]['estado'] == 1) {
            $updateEstado = array(
                'estado' => 0
            );
            $labelBg = 'danger';
            $labelText = 'Oculta';
        } else {
            $updateEstado = array(
                'estado' => 1
            );
            $labelBg = 'success';
            $labelText = 'Visible';
        }
        $btn = '';
        if ($image[0]['img_principal'] != 1) {
            $this->db->update('post_archivo', $updateEstado, "`id` = $id");
            $btn = '<span class="label label-' . $labelBg . '">' . $labelText . '</span>';
        } else {
            $btn = '<span class="label label-success">Visible</span>';
        }
        $datos = array(
            'id' => $id,
            'content' => $btn
        );
        return $datos;
    }

    public function imgPrincipal($data) {
        $id = $data['id'];
        $imgActual = $this->helper->getImage($id);
        $idPost = $imgActual[0]['id_post'];
        $oldPrincipal = $this->db->select("select id from post_archivo where id_post = $idPost and img_principal = 1");
        $idOld = $oldPrincipal[0]['id'];
        if ($imgActual[0]['img_principal'] == 1) {
            $updatePrincipal = array(
                'img_principal' => 0
            );
        } else {
            $updatePrincipal = array(
                'img_principal' => 1
            );
        }
        $updatePrincipalOld = array(
            'img_principal' => 0
        );
        $btn = '<span class="label label-success">Principal</span>';
        $btnOld = '<span class="label label-warning">Principal</span>';
        if ($imgActual[0]['estado'] != 0) {
            $this->db->update('post_archivo', $updatePrincipal, "`id` = $id");
            $this->db->update('post_archivo', $updatePrincipalOld, "`id` = $idOld");
            $datos = array(
                'result' => true,
                'id' => $id,
                'content' => $btn,
                'id_old' => $idOld,
                'content_old' => $btnOld
            );
        } else {
            $datos = array(
                'result' => false
            );
        }
        return $datos;
    }

}
