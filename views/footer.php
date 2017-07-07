</div> <!-- wrapper -->

<script src="<?= URL; ?>public/assets/js/vendor/jquery-ui-1.10.4.custom.min.js"></script>
<script src="<?= URL; ?>public/assets/js/vendor/jquery.touchSwipe.min.js"></script>

<!--<script src="<?= URL; ?>public/assets/js/bootstrap/carousel.js"></script>
<script src="<?= URL; ?>public/assets/js/bootstrap/tab.js"></script>
<script src="<?= URL; ?>public/assets/js/bootstrap/collapse.js"></script>
<script src="<?= URL; ?>public/assets/js/bootstrap/transition.js"></script>-->
<script src="<?= URL; ?>public/assets/js/bootstrap/bootstrap.min.js"></script>

      <!--[if IE]><script type="text/javascript" src="<?= URL; ?>public/assets/js/vendor/excanvas.js"></script><![endif]-->
<script src="<?= URL; ?>public/assets/js/vendor/jquery.knob.min.js"></script>
<script src="<?= URL; ?>public/assets/js/vendor/fastclick.min.js"></script>
<script src="<?= URL; ?>public/assets/js/vendor/jquery.stellar.min.js"></script>

<script src="<?= URL; ?>public/assets/js/vendor/jquery.mousewheel.js"></script>
<script src="<?= URL; ?>public/assets/js/vendor/perfect-scrollbar.min.js"></script>

<script src="<?= URL; ?>public/assets/js/vendor/isotope.pkgd.js"></script>

<script src="<?= URL; ?>public/assets/js/plugins.js"></script>
<script src="<?= URL; ?>public/assets/js/main.js"></script>
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
