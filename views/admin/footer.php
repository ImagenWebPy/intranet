<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 1.0
    </div>
    <strong>Desarrollado por <a href="mailto:raul.ramirez@garden.com.py">Raul Ramirez</a>
</footer>
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->

<!-- jQuery UI 1.11.4 -->
<script src="<?= URL; ?>public/assets/js/vendor/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?= URL; ?>public/assets/js/bootstrap/bootstrap.min.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= URL; ?>public/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="<?= URL; ?>public/assets/js/moment.min.js"></script>
<script src="<?= URL; ?>public/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?= URL; ?>public/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- DataTables -->
<script src="<?= URL; ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= URL; ?>public/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- CK Editor -->
<script src="<?= URL; ?>public/plugins/ckeditor/ckeditor.js"></script>
<!-- Slimscroll -->
<script src="<?= URL; ?>public/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= URL; ?>public/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= URL; ?>public/dist/js/app.min.js"></script>
<?php
#cargamos los js de las vistas
if (isset($this->external_js)) {
    foreach ($this->external_js as $external) {
        echo '<script async defer src="' . $external . '"></script>';
    }
}
if (isset($this->public_js)) {
    foreach ($this->public_js as $public_js) {
        echo '<script type="text/javascript" src="' . URL . 'public/' . $public_js . '"></script>';
    }
}
if (isset($this->js)) {
    foreach ($this->js as $js) {
        echo '<script type="text/javascript" src="' . URL . 'views/' . $js . '"></script>';
    }
}
?>
</body>
</html>