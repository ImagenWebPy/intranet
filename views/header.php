<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <title><?= SITE_TITLE; ?></title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link href='http://fonts.googleapis.com/css?family=Oxygen:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?= URL; ?>public/assets/css/style.css">
        <link rel="stylesheet" href="<?= URL; ?>public/assets/css/custom.css">
        <script src="<?= URL; ?>public/assets/js/vendor/modernizr-2.6.2.min.js"></script>
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
                            <img src="<?= URL; ?>public/assets/img/logo-garden.png" class="logo" alt="Logo">
                            <p class="mb-site-descr">Multipurpose Portfolio</p>
                        </div>
                        <div class="mb-content">
                            <nav>
                                <ul id="mb-main-menu">
                                    <li class="menu-item-has-children">
                                        <a href="/">Inicio</a>
                                        <a class="submenu-toggler" href="#"><i class="fa fa-plus"></i></a>
                                        <ul>
                                            <li><a href="home.html">Home v1 - Sidebar Menu / Gallery</a></li>
                                            <li><a href="top-menu-onepage.html">Home v2 - OnePage</a></li>
                                            <li><a href="top-menu-home-1.html">Home v3 - Top Menu / Video Background</a></li>
                                            <li><a href="top-menu-home-2.html">Home v4 - Top Menu / Layer Slider</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a>Gallery</a>
                                        <a class="submenu-toggler" href="#"><i class="fa fa-plus"></i></a>
                                        <ul>
                                            <li><a href="home-col3.html">Gallery 3 Column Grid</a></li>
                                            <li><a href="home.html">Gallery 4 Column Grid</a></li>
                                            <li><a href="home-col5.html">Gallery 5 Column Grid</a></li>
                                            <li><a href="home-masonry.html">Gallery Masonry Grid</a></li>
                                            <li><a href="home-pinterest-style.html">Gallery Pinterest Style</a></li>
                                            <li><a href="single-work-full-1.html">Single Work Full Width v1</a></li>
                                            <li><a href="single-work-full-2.html">Single Work Full Width v2</a></li>
                                            <li><a href="single-work-with-description.html">Single Work with Description</a></li>
                                            <li><a href="single-work-thumbnails.html">Single Work with Thumbnails</a></li>
                                            <li><a href="single-video-full.html">Single Work - Video</a></li>
                                            <li><a href="single-vimeo-full.html">Single Work - Vimeo</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="services.html">Services</a></li>
                                    <li class="menu-item-has-children">
                                        <a>Blog</a>
                                        <a class="submenu-toggler" href="#"><i class="fa fa-plus"></i></a>
                                        <ul>
                                            <li><a href="blog-sidebar.html">Blog with Sidebar</a></li>
                                            <li><a href="blog-masonry.html">Blog Masonry</a></li>
                                            <li><a href="single-post.html">Blog Single Post</a></li>
                                            <li><a href="single-post-sidebar.html">Blog Single Post with Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shortcodes.html">Shortcodes</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="mb-footer">
                            <a class="pointer"><h4><i class="fa fa-user" aria-hidden="true"></i> Mis datos</h4></a>
                            <a href="<?= URL; ?>login/salir" class="pointer"><h4><i class="fa fa-sign-in" aria-hidden="true"></i> Cerrar Sesión</h4></a>
                            <div class="mb-social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-instagram"></i></a>
                                <a href=""><i class="fa fa-pinterest"></i></a>
                                <a href=""><i class="fa fa-tumblr"></i></a>
                            </div>
                            <div class="mb-copyright">
                                <p>© 2017 Todos los Derechos Reservados</p>
                                <p>Desarrollado por Marketing</p>
                            </div>
                        </div>
                    </div> <!-- mb-body -->
                    <a href="#" class="mb-toggler"><i class="fa fa-bars"></i></a>
                </aside>
            </div>