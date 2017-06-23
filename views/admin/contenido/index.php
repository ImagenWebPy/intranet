<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Listado Publicaciones
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= URL; ?>admin"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Listado de Publicaciones</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <!-- /.box-header -->
            <div class="box-header">
                <div class="col-md-4 pull-right">
                    <button type="button" class="btn btn-block btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Agregar Contenido</button>
                </div>
            </div>
            <div class="box-body">

                <table id="listadoPosteos" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">Fecha Publicación</th>
                            <th class="text-center">Título</th>
                            <th class="text-center">Categoría</th>
                            <th class="text-center">Tipo Contenido</th>
                            <th class="text-center">Estado</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="text-center">Fecha Publicación</th>
                            <th class="text-center">Título</th>
                            <th class="text-center">Categoría</th>
                            <th class="text-center">Tipo Contenido</th>
                            <th class="text-center">Estado</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </section>
</div>
<!-- Modal -->
<div class="modal fade modalContent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function () {
        //DATATABLE
        var table = $("#listadoPosteos").DataTable({
            "aaSorting": [[0, 'desc']],
            "paging": true,
            "orderCellsTop": true,
            "fixedColumns": true,
            "iDisplayLength": 50,
            "ajax": {
                "url": "<?= URL; ?>admin/listadoPublicaciones/"
            },
            "columns": [
                {"data": "fecha"},
                {"data": "titulo"},
                {"data": "categoria"},
                {"data": "tipo_contenido"},
                {"data": "estado"},
                {"data": "acciones"}
            ],
            "language": {
                "url": "<?= URL; ?>public/language/Spanish.json"
            }
        });
        //EDITAR POST
        $(document).on("click", ".btnEditPost", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                var idPost = $(this).attr("data-post");
                $.ajax({
                    url: "<?= URL; ?>admin/mostrarModalEditar",
                    type: "post",
                    dataType: "json",
                    data: {
                        post: idPost
                    },
                    success: function (data) {
                        $(".modal-header").addClass("modal-header bg-primary");
                        $(".modal-title").html(data['titulo']);
                        $(".modal-body").html(data['contenido']);
                        $(".modalContent").modal("toggle");
                    }
                }); //END AJAX
            }
            e.handled = true;
        });
    });
</script>