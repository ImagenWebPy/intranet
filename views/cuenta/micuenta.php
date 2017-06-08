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
                        <form role="form" action="formmail.php" class="contact-form validation-engine ajax-send">
                            <div class="row">
                                <div class="col-sm-4 form-group">
                                    <label class="sr-only" for="input_name">Nombre</label>
                                    <input type="text" name="name" class="form-control validate[required]" value="<?= utf8_encode($this->datos['nombre']); ?>" placeholder="Nombre">
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label class="sr-only" for="input_email">Apellido</label>
                                    <input type="email" name="lastname" class="form-control validate[required,custom[email]]" value="<?= utf8_encode($this->datos['apellido']); ?>" placeholder="Apellido">
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label class="sr-only" for="input_subject">Fecha de Nacimiento</label>
                                    <input type="text" name="birthdate" class="form-control" id="fechaNacimiento" value="<?= (!empty($this->datos['fecha_nacimiento'])) ? utf8_encode($this->datos['fecha_nacimiento']) : ''; ?>" placeholder="Fecha de Nacimiento">
                                </div>
                            </div>
                            <script type="text/javascript">
                                $(function () {
                                    $('#fechaNacimiento').datetimepicker();
                                });
                            </script>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default btn-wide">Modificar Datos</button>
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
                            <form role="form" action="formmail.php" class="contact-form validation-engine ajax-send">
                                <div class="row">
                                    <div class="col-sm-4 form-group">
                                        <label class="sr-only" for="input_name">Nueva Contraseña</label>
                                        <input type="text" name="name" class="form-control validate[required]" id="input_name" placeholder="Nueva Contraseña">
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label class="sr-only" for="input_email">Repetir Contraseña</label>
                                        <input type="email" name="lastname" class="form-control validate[required,custom[email]]" id="input_email" placeholder="Repetir Contraseña">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default btn-wide">Modificar Contraseña</button>
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