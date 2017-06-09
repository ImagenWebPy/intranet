<?php $helper = new Helper(); ?>
<div id="main">
    <?= $helper->mostrarMobileLogo(); ?>
    <div id="header">
        <header>
            <h1>Mis Datos</h1>
        </header>
    </div>
    <div class="section">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <form role="form" action="<?= URL; ?>cuenta/modificarDatos" method="POST" class="contact-form" id="frmDatos">
                            <div class="row">
                                <div class="col-sm-4 form-group">
                                    <label class="sr-only">Nombre</label>
                                    <input type="text" name="nombre" class="form-control validate[required]" value="<?= utf8_encode($this->datos['nombre']); ?>" placeholder="Nombre">
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label class="sr-only" >Apellido</label>
                                    <input type="text" name="apellido" class="form-control validate[required,custom[email]]" value="<?= utf8_encode($this->datos['apellido']); ?>" placeholder="Apellido">
                                </div>
                                <!--                                <div class="col-sm-4 form-group">
                                                                    <label class="sr-only" for="input_subject">Fecha de Nacimiento</label>
                                                                    <div class="input-group date" id="example">
                                                                        <input type="text" class="form-control" value="<?= $this->datos['fecha_nacimiento']; ?>" />
                                                                        <span class="input-group-addon">
                                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>-->
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default btn-wide" id="btnModificar">Modificar Datos</button>
                                <span class="loading-spinner" style="display:none;"></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- container -->
        </section>
        <div id="aboutus" class="section st-bg-grey-lighter">
            <section>
                <div class="container">
                    <h2>Contraseña</h2>
                    <div class="row">
                        <div class="col-md-8">
                            <form role="form" action="<?= URL; ?>cuenta/modificarContrasena" id="frmModificarContrasena" class="contact-form">
                                <div class="row">
                                    <div class="col-sm-4 form-group">
                                        <label class="sr-only">Nueva Contraseña</label>
                                        <input type="text" name="contrasena" class="form-control" id="input_name" placeholder="Nueva Contraseña">
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label class="sr-only">Repetir Contraseña</label>
                                        <input type="text" name="contrasena2" class="form-control" id="input_email" placeholder="Repetir Contraseña">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default btn-wide" id="btnModificarContrasena">Modificar Contraseña</button>
                                    <span class="loading-spinner" style="display:none;"></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div> <!-- section -->
    <div id="footer" class="ft-single-post">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 text-center">
                        <a href="<?= URL; ?>" class="ft-back2blog">Volver</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

</div> <!-- main -->
<script type="text/javascript">
    $(function () {
        $('#example').datetimepicker({
            format: 'DD-MM-YYYY',
            icons: {
                time: 'fa fa-clock-o',
                date: 'fa fa-calendar',
                up: 'fa fa-arrow-up',
                down: 'fa fa-arrow-down',
                previous: 'fa fa-arrow-left',
                next: 'fa fa-arrow-right',
                today: 'glyphicon glyphicon-screenshot',
                clear: 'fa fa-ban'
            }
        });
        $("#btnModificar").click(function (e) {
            e.preventDefault();
            var name = $('input[name=nombre]');
            var lastname = $('input[name=apellido]');
            if (name.val().trim().length == 0) {
                name.css("border", "solid 1px red");
            } else {
                name.css("border", "none");
            }
            if (lastname.val().trim().length == 0) {
                lastname.css("border", "solid 1px red");
            } else {
                lastname.css("border", "none");
            }
            if (name.val().trim().length > 0 && lastname.val().trim().length > 0) {
                $("#frmDatos").submit();
            }
        });
        //CAMBIAR CONTRASEÑA
        var pass1;
        var pass2;
        $("#btnModificarContrasena").prop("disabled", true);
        $('input[name=contrasena2]').keyup(function () {
            comprobarContrasena();
        });
        $('input[name=contrasena]').keyup(function () {
            if ($('input[name=contrasena2]').val().trim().length > 1)
                comprobarContrasena();
        });
        function comprobarContrasena() {
            pass1 = $("input[name=contrasena]").val();
            pass2 = $("input[name=contrasena2]").val();
            if (pass1 != pass2) {
                $("input[name=contrasena]").css("border", "2px solid red");
                $("input[name=contrasena2]").css("border", "2px solid red");
                $("#btnModificarContrasena").prop("disabled", true);
            } else if (pass1 == pass2) {
                $("input[name=contrasena]").css("border", "2px solid green");
                $("input[name=contrasena2]").css("border", "2px solid green");
                $("#btnModificarContrasena").prop("disabled", false);
            }
        }
        $("#btnModificarContrasena").click(function () {
            pass1 = $("input[name=contrasena]");
            pass2 = $("input[name=contrasena2]");
            if (pass1.val().trim().length == 0) {
                pass1.css("border", "1px solid red");
            } else {
                pass1.css("border", "none");
            }
            if (pass2.val().trim().length == 0) {
                pass2.css("border", "1px solid red");
            } else {
                pass2.css("border", "none");
            }
            if (pass1.val().trim().length > 1 && pass2.val().trim().length > 1) {
                $("#frmModificarContrasena").submit();
            }
        });
    });
</script>