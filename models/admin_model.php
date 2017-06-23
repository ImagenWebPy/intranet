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
                'categoria' => utf8_encode($item['titulo']),
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
                          <h3 class="box-title">Editar</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form role="form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Título</label>
                                      <input type="text" class="form-control" placeholder="ingrese un título" value="' . utf8_encode($sql[0]['titulo']) . '">
                                    </div>
                                </div>
                                <div class="cold-md-6">
                                    <div class="form-group">
                                        <label>Fecha Evento:</label>
                                        <div class="input-group date">
                                          <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                          </div>
                                          <input type="text" class="form-control pull-right datepicker" value="' . date('d-m-Y', strtotime($sql[0]['fecha'])) . '">
                                        </div>
                                        <!-- /.input group -->
                                      </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Categoría</label>
                                        <select class="form-control">';
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
                                        <select class="form-control">';
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
                                        <select class="form-control">
                                          <option value="1" ' . $selectState1 . '>Activo</option>
                                          <option value="0" ' . $selectState0 . '>Inactivo</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.box-body -->
                      </div>
                      <script type="text/javascript">
                        $(".datepicker").datepicker({
                            format: "dd-mm-yyyy",
                            autoclose: true
                        });
                      </script>';
        $datos = array(
            'titulo' => utf8_encode($sql[0]['titulo']),
            'contenido' => $contenido
        );
        return json_encode($datos);
    }

}
