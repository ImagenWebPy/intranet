<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hash | Versatile HTML5 Bloge Homepage 2</title>

        <!-- ~~~=| Fonts files |==-->
        <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700,900,700italic,400italic,300italic,100' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,400italic,500,700,700italic,900' rel='stylesheet' type='text/css'>

        <!-- ~~~=| Font awesome |==-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- ~~~=| Bootstrap css |==-->
        <link rel="stylesheet" href="<?= URL; ?>public/css/bootstrap.min.css">

        <!-- ~~~=| Theme files |==-->
        <link rel="stylesheet" href="<?= URL; ?>public/css/style.css">
        <link rel="stylesheet" href="<?= URL; ?>public/css/custom.css">
        <link rel="stylesheet" href="<?= URL; ?>public/css/responsive.css">

        <!-- Favicons -->
        <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-precomposed.png">
        <link rel="shortcut icon" type="image/ico" href="<?= URL; ?>public/images/favicon.ico"/>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="<?= URL; ?>public/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="<?= URL; ?>public/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- ~~~=| Latest jQuery |=~~~ -->
        <script
            src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
    </head>
    <body>

        <!-- ~~~=| Header START |=~~~ -->
        <header class="header_area">
            <div class="header_top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="header_top_left">
                                <a class="pointer linkMiCuenta headerHover"><i class="fa fa-user" aria-hidden="true"></i> Mi Cuenta</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="header_top_right">
                                <div class="social_header">
                                    <a href="<?= URL; ?>login/salir" class="headerHover"><i class="fa fa-sign-out" aria-hidden="true"></i> Cerrar Sesión</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ~~~=| Logo Area START |=~~~ -->
            <div class="header_logo_area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="logo">
                                <a href="index-2.html"><img src="<?= URL; ?>public/images/logo.png" alt="Site Logo"/></a>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="header_add">
                                <a href="#"><img src="<?= URL; ?>public/images/header-add.jpg" alt="Site add"/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ~~~=| Logo Area END |=~~~ -->

            <!-- ~~~=| Main Navigation START |=~~~ -->
            <nav class="mainnav">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="main_nav_box">
                                <ul id="nav">
                                    <li class="nav_news"><a href="#">News</a>
                                        <div class="sub_menu single_mega">
                                            <ul>
                                                <li><a href="#">Business <i class="fa fa-angle-right"></i></a>
                                                    <ul class="lev2sub">
                                                        <li><a href="#">Business News</a></li>
                                                        <li><a href="#">Business News</a></li>
                                                        <li><a href="#">Business News</a></li>
                                                        <li><a href="#">Business News</a></li>
                                                        <li><a href="#">Business News</a></li>
                                                        <li class="last-child"><a href="#">Business News</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Technology</a></li>
                                                <li><a href="#">Politics</a></li>
                                                <li class=""><a href="#">Sport</a></li>
                                                <li><a href="#">Science <i class="fa fa-angle-right"></i></a>
                                                    <ul class="lev2sub">
                                                        <li><a href="#">Business News</a></li>
                                                        <li><a href="#">Business News</a></li>
                                                        <li><a href="#">Business News</a></li>
                                                        <li><a href="#">Business News</a></li>
                                                        <li><a href="#">Business News</a></li>
                                                        <li class="last-child"><a href="#">Business News</a></li>
                                                    </ul>
                                                </li>
                                                <li class="last-child"><a href="#">Health</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav_lifeguide"><a href="#">Pages   </a>
                                        <div class="sub_menu sub_menu_p single_mega">
                                            <ul>
                                                <li><a href="index-2.html"><span>Home One</span></a></li>
                                                <li><a href="index-two.html"><span>Home Two</span></a></li>
                                                <li><a href="contact.html">Blog Detail Pages</a>
                                                    <ul class="lev2sub lev2subp">
                                                        <li><a href="blog-single-audio-post.html">Blog with Aduio page</a></li>
                                                        <li><a href="blog-single-link-post.html">Blog with Link page</a></li>
                                                        <li><a href="blog-single-post.html">Blog with Post page</a></li>
                                                        <li><a href="blog-single-quote-post.html">Blog with Quote page</a></li>
                                                        <li><a href="blog-single-slider-post.html">Blog with Slider page</a></li>
                                                        <li><a href="blog-single-twitter-post.html">Blog with Twitter page</a></li>
                                                        <li class="last-child"><a href="blog-single-video-post.html">Blog with Video page</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="about.html">About page</a></li>
                                                <li><a href="contact.html">Contact Page</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav_fashion"><a href="#">Fashion</a></li>
                                    <li class="nav_gadgets"><a href="#">Gadgets</a></li>
                                    <li class="nav_lifestyle"><a href="#">Lifestyle</a></li>
                                    <li class="nav_video"><a href="#">Video</a></li>
                                    <li class="nav_features"><a href="#">features</a></li>
                                </ul>
                            </div>

                            <!-- ~~~=| Mobile Navigation END |=~~~ -->
                            <div class="only-for-mobile">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <ul class="ofm">
                                        <li class="m_nav"><i class="fa fa-bars"></i> Hash</li>
                                    </ul>

                                    <!-- MOBILE MENU -->
                                    <div class="mobi-menu">
                                        <div id='cssmenu'>
                                            <ul>
                                                <li class='has-sub'>
                                                    <a href='index-2.html'><span>Home</span></a>
                                                    <ul class="sub-nav">
                                                        <li><a href="index-2.html"><span>Home One</span></a></li>
                                                        <li><a href="index-two.html"><span>Home Two</span></a></li>
                                                    </ul>
                                                </li>
                                                <li class='has-sub'>
                                                    <a href='#'><span>News</span></a>
                                                    <ul class="sub-nav">
                                                        <li><a href="#"><span>Hockey</span></a></li>
                                                        <li><a href="#"><span>Cricket</span></a></li>
                                                        <li><a href="#"><span>Football</span></a></li>
                                                        <li><a href="#"><span>Boxing</span></a></li>
                                                        <li><a href="#"><span>Bat Mitton</span></a></li>
                                                        <li><a href="#"><span>Others</span></a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href='#'><span>Fashion</span></a>
                                                </li>
                                                <li class='has-sub'>
                                                    <a href='#'><span>Lifeguide</span></a>
                                                    <ul>
                                                        <li class='has-sub'>
                                                            <a href='#'><span>features</span></a>
                                                            <ul class="has-sub">
                                                                <li><a href="#"><span>Business</span></a></li>
                                                                <li><a href="#"><span>Technology</span></a></li>
                                                                <li><a href="#"><span>Politics</span></a></li>
                                                                <li><a href="#"><span>Sport</span></a></li>
                                                                <li><a href="#"><span>Science</span></a></li>
                                                                <li><a href="#"><span>Health</span></a></li>
                                                                <li><a href="#"><span>Fashion Shirts</span></a></li>
                                                                <li class="last"><a href="index.html#"><span>CASUAL SHIRTS</span></a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href='#'><span>CHILDREN</span></a>
                                                </li>
                                                <li class='has-sub'>
                                                    <a href='#'><span>Pages</span></a>
                                                    <ul class="sub-nav">
                                                        <li><a href="about.html"><i class="fa fa-angle-right"></i>About page</a></li>
                                                        <li><a href="contact.html"><i class="fa fa-angle-right"></i>Contact Page</a></li>
                                                        <li><a href="blog-single-audio-post.html"><i class="fa fa-angle-right"></i>Blog with Aduio page</a></li>
                                                        <li><a href="blog-single-link-post.html"><i class="fa fa-angle-right"></i>Blog with Link page</a></li>
                                                        <li><a href="blog-single-post.html"><i class="fa fa-angle-right"></i>Blog with Post page</a></li>
                                                        <li><a href="blog-single-quote-post.html"><i class="fa fa-angle-right"></i>Blog with Quote page</a></li>
                                                        <li><a href="blog-single-slider-post.html"><i class="fa fa-angle-right"></i>Blog with Slider page</a></li>
                                                        <li><a href="blog-single-twitter-post.html"><i class="fa fa-angle-right"></i>Blog with Twitter page</a></li>
                                                        <li><a href="blog-single-video-post.html"><i class="fa fa-angle-right"></i>Blog with Video page</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href='#'><span>Gadgets</span></a>
                                                </li>
                                                <li>
                                                    <a href='#'><span>Lifestyle</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ~~~=| Mobile Navigation START |=~~~ -->


                        </div>
                    </div>
                </div>
            </nav>
            <!-- ~~~=| Main Navigation END |=~~~ -->

        </header>
        <!-- ~~~=| Header END |=~~~ -->