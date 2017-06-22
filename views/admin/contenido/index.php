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
            <div class="box-body">
                <table id="listadoPosteos" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Fecha Publicación</th>
                            <th>Título</th>
                            <th>Categoría</th>
                            <th>Tipo Contenido</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Fecha Publicación</th>
                            <th>Título</th>
                            <th>Categoría</th>
                            <th>Tipo Contenido</th>
                            <th>Estado</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </section>
</div>
<script>
    $(function () {
        var table = $("#listadoPosteos").DataTable({
            "aaSorting": [[0, 'desc']],
            "paging": true,
            "orderCellsTop": true,
            "fixedColumns": true,
            "iDisplayLength": 30,
            "ajax": {
                "url": "<?= URL; ?>admin/listadoPublicaciones/"
            },
            "columns": [
                {"data": "fecha"},
                {"data": "titulo"},
                {"data": "categoria"},
                {"data": "tipo_contenido"},
                {"data": "estado"}
            ],
            "language": {
                "url": "<?= URL; ?>public/language/Spanish.json"
            }
        });
    });
</script>