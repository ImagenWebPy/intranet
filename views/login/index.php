<?php
$helper = new Helper();
?>
<div class="container" style="margin-top:40px">
    <div class="row">
        <?php if (!empty($_SESSION['message'])): ?>
            <div class="col-sm-6 col-md-4 col-md-offset-4">
                <?= $helper->messageAlert($_SESSION['message']['type'], $_SESSION['message']['mensaje']); ?>
            </div>
        <?php endif; ?>
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>Inicie sesión para continuar</strong>
                </div>
                <div class="panel-body">
                    <form role="form" method="POST" id="frmLogin" action="<?= URL; ?>login/iniciar">
                        <fieldset>
                            <div class="row">
                                <div class="center-block centrarLogin">
                                    <img class="profile-img" src="<?= URL; ?>public/assets/img/logo-garden.png" alt="Garden Automotores S.A." width="100">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-user"></i>
                                            </span> 
                                            <input class="form-control" placeholder="E-mail" name="usuario" type="email" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-lock"></i>
                                            </span>
                                            <input class="form-control" placeholder="Contraseña" name="contrasena" type="password" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-lg btn-primary btn-block" id="btnIngresar" value="Ingresar">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                    <a class="text-center display_block pointer linkOlvidasteCuenta">¿Olvidaste tu contraseña?</a>
                </div>
                <div class="panel-footer ">
                    ¿No tienes una cuenta? <a class="pointer linkCrearCuenta"> Crea tu cuenta. </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MODAL GENERICO -->
<div class="modal fade modal-login" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <div class="loader" style="display: none;">Cargando...</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default modal-btn-close" data-dismiss="modal"></button>
                <button type="button" class="btn btn-primary modal-btn-confirm"></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- END MODAL GENERICO -->
<script type="text/javascript">
    $(function () {
        $('#btnIngresar').click(function (e) {
            e.preventDefault();
            var usuario = $("input[name='usuario']");
            var contrasena = $("input[name='contrasena']");
            if (usuario.val().trim().length == 0) {
                usuario.css('border', '2px solid red');
            } else {
                usuario.css('border', '1px solid #ccc');
            }
            if (contrasena.val().trim().length == 0) {
                contrasena.css('border', '2px solid red');
            } else {
                contrasena.css('border', '1px solid #ccc');
            }
            if (usuario.val().trim().length > 0 && contrasena.val().trim().length > 0) {
                $('#frmLogin').submit();
            }
        });
        //Mostrar Modal de recuperar contraseña
        $(document).on('click', '.linkOlvidasteCuenta', function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                $('.modal-login').modal('toggle');
                $('.modal-header').removeClass('.modal-header').addClass('.modal-header bg-primary');
                $('.modal-title').html('¿Olvidaste tu contraseña?');
                $('.modal-btn-confirm').html('Recuperar Contraseña');
                $('.modal-btn-close').html('Cerrar');
                $.ajax({
                    type: 'POST',
                    url: '<?= URL; ?>login/mostrarFormOlvidaste',
                    beforeSend: function () {
                        $('.loader').css('display', 'block');
                    },
                    success: function (data) {
                        $('.loader').css('display', 'none');
                        $('.modal-body').html(data);
                    }
                });
                e.handled = true;
            }
        });
        //MOstrar modal de crear cuenta
        $(document).on('click', '.linkCrearCuenta', function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                $('.modal-login').modal('toggle');
                $('.modal-header').removeClass('.modal-header').addClass('.modal-header bg-primary');
                $('.modal-title').html('Solicitar Cuenta');
                $('.modal-btn-confirm').html('Solicitar');
                $('.modal-btn-confirm').removeClass('.btn btn-primary modal-btn-confirm').addClass('btn btn-primary modal-btn-Crear');
                $('.modal-btn-close').html('Cerrar');
                $.ajax({
                    type: 'POST',
                    url: '<?= URL; ?>login/mostrarFormSolicitar',
                    beforeSend: function () {
                        $('.loader').css('display', 'block');
                    },
                    success: function (data) {
                        $('.loader').css('display', 'none');
                        $('.modal-body').html(data);
                    }
                });
                e.handled = true;
            }
        });
        //Confirmar contraseña
        $(document).on('click', '.modal-btn-confirm', function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                var email = $(".inputMailForgot");
                if (email.val().trim().length == 0) {
                    email.css('border', '2px solid red');
                } else {
                    email.css('border', '1px solid #ccc');
                }
                if (email.val().trim().length > 0) {
                    var existeEmail = isEmail(email.val());
                    if (existeEmail == true) {
                        email.css('border', '1px solid #ccc');
                        $.ajax({
                            type: 'POST',
                            url: '<?= URL; ?>login/resetUserPass',
                            data: {email: email.val()},
                            beforeSend: function () {
                                $('.loader').css('display', 'block');
                            },
                            success: function (data) {
                                location.reload();
                            }
                        });
                    } else {
                        email.css('border', '2px solid red');
                    }
                }
                e.handled = true;
            }
        });
        //Confirmar Cuenta
        $(document).on('click', '.modal-btn-Crear', function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                var nombre = $(".inputNombre");
                var apellido = $(".inputApellido");
                var email = $(".inputEmail");
                if (nombre.val().trim().length == 0) {
                    nombre.css('border', '2px solid red');
                } else {
                    nombre.css('border', '1px solid #ccc');
                }
                if (apellido.val().trim().length == 0) {
                    apellido.css('border', '2px solid red');
                } else {
                    apellido.css('border', '1px solid #ccc');
                }
                if (email.val().trim().length == 0) {
                    email.css('border', '2px solid red');
                } else {
                    email.css('border', '1px solid #ccc');
                }
                if (email.val().trim().length > 0 && nombre.val().trim().length > 0 && apellido.val().trim().length > 0) {
                    var existeEmail = isEmail(email.val());
                    if (existeEmail == true) {
                        email.css('border', '1px solid #ccc');
                        $.ajax({
                            type: 'POST',
                            url: '<?= URL; ?>login/createUser',
                            data: {nombre: nombre.val(), apellido: apellido.val(), email: email.val()},
                            beforeSend: function () {
                                $('.loader').css('display', 'block');
                            },
                            success: function (data) {
                                location.reload();
                            }
                        });
                    } else {
                        email.css('border', '2px solid red');
                    }
                }
                e.handled = true;
            }
        });
    });
</script>
<?php
if (!empty($_SESSION['message']))
    unset($_SESSION['message']);
?>