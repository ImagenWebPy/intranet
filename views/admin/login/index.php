<?php
$helper = new Helper();
?>
<div class="login-box">
    <?php
    if (isset($_SESSION['message'])) {
        echo $helper->messageAlert($_SESSION['message']['type'], $_SESSION['message']['mensaje']);
    }
    ?>
    <div class="login-logo">
        <a class="pointer"><b>Administrador</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Inicie sesión para ingresar</p>
        <form action="<?php echo URL; ?>admin/iniciar/" id="frmLoginAdmin" method="POST">
            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="Email" name="email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Password" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat" id="btnLoginAdmin">Ingresar</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
        <!-- /.social-auth-links -->
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


