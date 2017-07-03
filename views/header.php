<?php
$helper = new Helper();
if (!empty($_SESSION['usuario']['nombre'])) {
    $nombre = $_SESSION['usuario']['nombre'] . ' ' . $_SESSION['usuario']['apellido'];
} else {
    $nombre = '';
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <title><?= SITE_TITLE . ' - ' . $this->title ?></title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <!-- FAVICON -->
        <link href='http://fonts.googleapis.com/css?family=Oxygen:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?= URL; ?>public/assets/css/style.css">
        <link rel="stylesheet" href="<?= URL; ?>public/assets/css/custom.css">
        <link rel="apple-touch-icon" sizes="57x57" href="<?= URL; ?>public/assets/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?= URL; ?>public/assets/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?= URL; ?>public/assets/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?= URL; ?>public/assets/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?= URL; ?>public/assets/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?= URL; ?>public/assets/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?= URL; ?>public/assets/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?= URL; ?>public/assets/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?= URL; ?>public/assets/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?= URL; ?>public/assets/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?= URL; ?>public/assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?= URL; ?>public/assets/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?= URL; ?>public/assets/favicon/favicon-16x16.png">
        <!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:r%7CSource+Sans+Pro:r,i,b,bi&amp;subset=latin,latin-ext,latin,latin-ext" media="all">-->
        <link rel="manifest" href="<?= URL; ?>public/assets/favicon/manifest.json">
        <?php
        #cargamos los css de las vistas
        if (isset($this->css)) {
            foreach ($this->css as $css) {
                echo '<link rel="stylesheet" href="' . URL . 'views/' . $css . '" type="text/css">';
            }
        }
        if (isset($this->public_css)) {
            foreach ($this->public_css as $public_css) {
                echo '<link rel="stylesheet" href="' . URL . 'public/' . $public_css . '" type="text/css">';
            }
        }
        ?>
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?= URL; ?>public/assets/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <script src="<?= URL; ?>public/assets/js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="<?= URL; ?>public/assets/js/vendor/jquery-1.10.2.min.js"></script>
        <?php
        if (isset($this->header_js)) {
            foreach ($this->header_js as $header_js) {
                echo '<script type="text/javascript" src="' . URL . 'public/' . $header_js . '"></script>';
            }
        }
        ?>
    </head>
    <body class="menu-bar-opened menu-bar-ontop black-body">
        <script type="text/javascript">
            // Open page with hidden menu-bar on mobile screen less than 700px
            if (window.innerWidth < 738) {
                var body_element = document.getElementsByTagName('body')[0];
                body_element.className = body_element.className.replace(/\bmenu-bar-opened\b/, '')
            }
        </script>
        <!--[if lt IE 9]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div id="wrapper">
            <div id="menu-bar">
                <aside>
                    <div class="mb-body">
                        <div class="mb-header hidden-xs">
                            <img src="<?= URL; ?>public/assets/img/logo-garden.png" class="logo center-block" alt="Logo Garden" width="100" height="100">
                            <p class="mb-site-descr text-center">Hola <?= $nombre ?></p>
                        </div>
                        <div class="mb-content">
                            <nav>
                                <ul id="mb-main-menu SourceSansPro-Regular" class="gallety-filters menuHeader">
                                    <li><a href="<?= URL; ?>">Inicio</a></li>
                                    <?php if (empty($helper->getPage()[0])): ?>
                                        <?php foreach ($helper->getTiposEventos() as $item): ?>
                                            <li><a href="#" data-filter="<?= utf8_encode($item['tag']); ?>"><?= utf8_encode($item['descripcion']); ?></a></li>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </ul>
                            </nav>
                        </div>
                        <div class="mb-footer">
                            <a href="<?= URL; ?>cuenta/micuenta" class="pointer"><h4><i class="fa fa-user" aria-hidden="true"></i> Mis datos</h4></a>
                            <a href="<?= URL; ?>login/salir" class="pointer"><h4><i class="fa fa-sign-in" aria-hidden="true"></i> Cerrar Sesión</h4></a>
                            <div class="mb-copyright">
                                <p>© 2017 Todos los Derechos Reservados</p>
                                <p>Desarrollado por Marketing</p>
                            </div>
                        </div>
                    </div> <!-- mb-body -->
                    <a href="#" class="mb-toggler"><i class="fa fa-bars"></i></a>
                </aside>
            </div>