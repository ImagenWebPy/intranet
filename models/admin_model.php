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
                $estado = '<span><a class="pointer label label-success linkListaEstadoPost" id="estadoPost' . $idPost . '" data-post="' . $idPost . '">Visible</a></span>';
            } else {
                $estado = '<span><a class="pointer label label-danger linkListaEstadoPost" id="estadoPost' . $idPost . '" data-post="' . $idPost . '">Oculto</a></span>';
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
                                    <div class="col-md-12">
                                        <div class="alert alert-warning alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <h4><i class="icon fa fa-warning"></i> Importante!</h4>
                                            Solo se permiten imagenes <strong>.jpg,.png</strong>. Tamaño máximo <strong>512KB</strong>
                                         </div>
                                    </div>
                                    <div class="html5fileupload demo_multi" data-multiple="true" data-url="' . URL . 'admin/uploadImage" data-max-filesize="512000" data-valid-extensions="jpg,png,jpeg" style="width: 100%;">
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
                            <div class="row" style="margin: 20px;">
                                <div class="col-md-12" style="margin:10px;">
                                    <button type="button" class="btn btn-primary pull-right btnAddVideo"><i class="fa fa-plus" aria-hidden="true"></i> Agregar Video</button>
                                </div>
                                <div class="col-md-12 divSubirVideo" style="display:none;">
                                    <div class="col-md-12">
                                        <div class="alert alert-warning alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <h4><i class="icon fa fa-warning"></i> Importante!</h4>
                                            Solo se puede subir un video con extension <strong>.mp4</strong>. Al subir otro, el anterior sera re-emplazado. Tamaño máximo <strong>40MB</strong>
                                         </div>
                                    </div>
                                    <div class="html5fileupload demo_video" data-multiple="false" data-url="' . URL . 'admin/uploadVideo" data-valid-extensions="mp4" data-max-filesize="40960000" style="width: 100%;">
                                        <input type="file" name="file" />
                                    </div>
                                    <script>
                                        $(".html5fileupload.demo_video").html5fileupload({
                                            data:{id:' . $id . '},
                                            onAfterStartSuccess: function(response) {
                                                $("#postVideo" + response.id).html("");
                                                $("#postVideo" + response.id).append(response.content);
                                            }
                                        });
                                    </script>
                                </div>
                            </div>
                            <div class="row" id="postVideo' . $id . '">';
        if (!empty($video[0])) {
            $contenido .= $this->helper->loadVideo($id);
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

    public function uploadVideo($data) {
        $idPost = $data['id'];
        $sql = $this->db->select("selec id from post_archivo where id_tipo_archivo = 2 and id_post = $idPost");
        if (!empty($sql)) {
            $idArchivo = $sql[0]['id'];
            $updateVideo = array(
                'descripcion' => $data['archivo']
            );
            $this->db->update('post_archivo', $updateVideo, "`id` = $idArchivo");
        } else {
            $this->db->insert('post_archivo', array(
                'id_post' => $idPost,
                'id_tipo_archivo' => 2,
                'descripcion' => $data['archivo'],
                'estado' => 1
            ));
            $idArchivo = $this->db->lastInsertId();
        }
        $contenido = $this->helper->loadVideo($idPost);
        $datos = array(
            "result" => true,
            'id' => $idPost,
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

    public function eliminarIMG($data) {
        $id = $data['id'];
        $imgActual = $this->helper->getImage($id);
        if ($imgActual[0]['img_principal'] != 1) {
            #Eliminamos la imagen del servidor
            unlink('public/archivos/' . $imgActual[0]['descripcion']);
            #Elimamos de la BD
            $sth = $this->db->prepare("delete from post_archivo where id = :id");
            $sth->execute(array(
                ':id' => $id
            ));
            $datos = array(
                'result' => true,
                'id' => $id
            );
        } else {
            $datos = array(
                'result' => false
            );
        }
        return $datos;
    }

    public function agregarContenido() {
        $contenido = '<form role="form" method="POST" action="' . URL . 'admin/agregarDatosPost" class="frmAgregarPost" enctype="multipart/form-data">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                              <h3 class="box-title">Contenido</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Título</label>
                                        <input type="text" class="form-control" placeholder="ingrese un título" value="" name="titulo">
                                    </div>
                                </div>
                                <div class="cold-md-6">
                                    <div class="form-group">
                                        <label>Fecha Evento:</label>
                                        <div class="input-group date">
                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            <input type="text" class="form-control pull-right datepicker" value="" name="fecha">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Categoría</label>
                                        <select class="form-control" name="categoria">';
        foreach ($this->helper->getCategorias() as $item) {
            $contenido .= '             <option value="' . $item['id'] . '">' . utf8_encode($item['descripcion']) . '</option >';
        }
        $contenido .= '             </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tipo Evento</label>
                                        <select class="form-control" name="tipo_evento">';
        foreach ($this->helper->getTipoEventos() as $item) {
            $contenido .= '             <option value="' . $item['id'] . '">' . utf8_encode($item['descripcion']) . '</option >';
        }
        $contenido .= '             </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Estado</label>
                                        <select class="form-control" name="estado">
                                            <option value="1">Activo</option>
                                            <option value="0">Inactivo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tags</label>
                                        <input type="text" class="form-control" id="tags" placeholder="Ingrese los tags separados por comas(,)" value="" name="tags">
                                        <p class="help-block">Ingrese palabras separadas por comas(,)</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="box-body pad">
                                        <textarea id="contenido" name="contenido" rows="10" cols="80" name="contenido"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body --> 
                        </div>
                        <div class="box box-primary">
                            <div class="box-header with-border">
                              <h3 class="box-title">Imagenes</h3>
                            </div>
                            <div class="box-body">
                                <div class="row" style="margin: 20px;">
                                    <div class="col-md-12 divSubir">
                                        <div class="col-md-12">
                                            <div class="alert alert-warning alert-dismissible">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                <h4><i class="icon fa fa-warning"></i> Importante!</h4>
                                                Solo se permiten imagenes <strong>.jpg,.png</strong>. Tamaño máximo <strong>512KB</strong>
                                             </div>
                                        </div>
                                        <div class="html5fileupload demo_multi" data-multiple="true" data-form="true" data-max-filesize="512000" data-valid-extensions="jpg,png,jpeg" style="width: 100%; display: inline-block;">
                                            <input type="file" name="file_archivo[]" />
                                        </div>
                                        <script>
                                            $(".html5fileupload.demo_multi").html5fileupload();
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Video</h3>
                                </div>
                                <div class="box-body">
                                    <div class="row" style="margin: 20px;">
                                        <div class="col-md-12 divSubirVideo">
                                            <div class="col-md-12">
                                                <div class="alert alert-warning alert-dismissible" >
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    <h4><i class="icon fa fa-warning"></i> Importante!</h4>
                                                    Solo se puede subir un video con extension <strong>.mp4</strong>. Al subir otro, el anterior sera re-emplazado. Tamaño máximo <strong>40MB</strong>
                                                </div>
                                            </div>
                                            <div class="html5fileupload demo_video" data-multiple="false" data-form="true" data-max-filesize="40960000" data-valid-extensions="mp4" style="width: 100%; display: inline-block;">
                                                <input type="file" name="file_video[]" />
                                            </div>
                                            <script>
                                                $(".html5fileupload.demo_video").html5fileupload();
                                            </script>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-block btn-success btnFrmAddContenido btn-lg">Agregar Contenido</button>
                            </div>
                        
                        </div>
                    </form>
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $(".datepicker").datepicker({
                                format: "dd-mm-yyyy",
                                autoclose: true
                            });
                            $("#tags").tagsInput();
                            CKEDITOR.replace("contenido");
                        });
                    </script>';
        return $contenido;
    }

    public function agregarDatosPost($data) {
        #INSERTAMOS EL POST
        $this->db->insert('post', array(
            'titulo' => utf8_decode($data['titulo']),
            'contenido' => utf8_decode($data['contenido']),
            'tags' => utf8_decode($data['tags']),
            'fecha' => date('Y-m-d', strtotime($data['fecha'])),
            'estado' => $data['estado']
        ));
        $id_post = $this->db->lastInsertId();
        #INSERTAMOS EL POST TIPO
        $this->db->insert('post_tipo', array(
            'id_post' => $id_post,
            'id_tipo_evento' => $data['tipo_evento'],
        ));
        #INSERTAMOS EL POST CATEGORIA
        $this->db->insert('post_categoria', array(
            'id_post' => $id_post,
            'id_categoria' => $data['categoria'],
        ));
        #INSERTAMOS LAS IMAGENES
        $cantImagenes = count($data['imagenes']) -1;
        for ($i = 0; $i <= $cantImagenes; $i ++) {
            $imgPrincipal = ($i == 1) ? 1 : 0;
            $this->db->insert('post_archivo', array(
                'id_post' => $id_post,
                'id_tipo_archivo' => 1,
                'descripcion' => $data['imagenes'][$i],
                'img_principal' => $imgPrincipal,
                'estado' => 1
            ));
        }
        #INSERTAMOS EL VIDEO
        if (!empty($data['videos'])) {
            foreach ($data['videos'] as $item) {
                $this->db->insert('post_archivo', array(
                    'id_post' => $id_post,
                    'id_tipo_archivo' => 2,
                    'descripcion' => $item,
                    'img_principal' => 0,
                    'estado' => 1
                ));
            }
        }
    }

    public function cambiarEstadoPost($data) {
        $id = $data['id'];
        $sql = $this->db->select("select estado from post where id = $id");
        if ($sql[0]['estado'] == 1) {
            $update = array('estado' => 0);
            $class = 'pointer label label-danger linkListaEstadoPost';
            $texto = 'Oculto';
            $estado = 0;
        } else {
            $update = array('estado' => 1);
            $class = 'pointer label label-success linkListaEstadoPost';
            $texto = 'Visible';
            $estado = 1;
        }
        $this->db->update('post', $update, "`id` = $id");
        $datos = array(
            'id' => $id,
            'clase' => $class,
            'texto' => $texto,
            'estado' => $estado
        );
        return $datos;
    }

}
