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
                    <img src="<?= URL; ?>public/assets/img/logo.png" class="logo" alt="Logo">
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
                    <h4>About us</h4>
                    <p>We are team of creative photographers. We passionate with photography and other creative things.</p>
                    <div class="mb-social">
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                        <a href=""><i class="fa fa-instagram"></i></a>
                        <a href=""><i class="fa fa-pinterest"></i></a>
                        <a href=""><i class="fa fa-tumblr"></i></a>
                    </div>
                    <div class="mb-copyright">
                        <p>© 2014 All rights reserved</p>
                        <p>Developed by Azelab</p>
                    </div>
                </div>
            </div> <!-- mb-body -->
            <a href="#" class="mb-toggler"><i class="fa fa-bars"></i></a>
        </aside>
    </div>


    <div id="main">

        <div id="header-mobile" class="visible-xs">
            <header>
                <div class="m-header-body">
                    <img src="<?= URL; ?>public/assets/img/logo_white.png" class="logo" alt="Logo">
                    <p class="m-site-descr">Multipurpose Portfolio</p>
                </div>
            </header>
        </div>

        <div id="header" class="hd-filters">
            <header>
                <ul class="gallety-filters">
                    <li class="active"><a data-filter="*" href="#">All</a></li>
                    <li><a data-filter="nature" href="#">Nature</a></li>
                    <li><a data-filter="fashion" href="#">Fashion</a></li>
                    <li><a data-filter="people" href="#">People</a></li>
                    <li><a data-filter="animals" href="#">Animals</a></li>
                    <li class="gf-underline"></li>
                </ul>
            </header>
        </div>

        <div class="section no-padding st-invert">
            <section>
                <ul id="gallery-w-preview" class="gallery gl-cols-4 gl-fixed-items">
                    <li class="gl-item gl-fixed-ratio-item gl-loading" data-category="people, nature, animals">
                        <a href="#">
                            <figure>
                                <img src="http://placehold.it/700x471" alt="">
                                <figcaption>
                                    <div class="middle"><div class="middle-inner">
                                            <p class="gl-item-icon"><i class="fa fa-picture-o"></i></p>
                                            <p class="gl-item-title">Slider</p>
                                            <p class="gl-item-category">People</p>
                                        </div></div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="gl-preview" style="diplay:none;" data-category="people">
                            <span class="glp-arrow"></span>
                            <a href="#" class="glp-close"></a>
                            <div class="row gl-preview-container">
                                <div class="col-sm-8">
                                    <div id="carousel-gallery-1" class="carousel slide" data-ride="carousel" data-interval="false">

                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <img src="http://placehold.it/700x471" alt="slide">
                                            </div>
                                            <div class="item">
                                                <img src="http://placehold.it/700x471" alt="slide">
                                            </div>
                                            <div class="item">
                                                <img src="http://placehold.it/700x471" alt="slide">
                                            </div>
                                        </div>

                                        <!-- Indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-gallery-1" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-gallery-1" data-slide-to="1"></li>
                                            <li data-target="#carousel-gallery-1" data-slide-to="2"></li>
                                        </ol>

                                        <!-- Controls -->
                                        <a class="left carousel-control" href="#carousel-post-1" data-slide="prev">
                                            <span></span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel-post-1" data-slide="next">
                                            <span></span>
                                        </a>

                                    </div> <!-- carousel -->
                                </div>
                                <div class="col-sm-4 lg-preview-descr">
                                    <h4>Girl in the street</h4>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <button class="btn btn-primary glp-readmore">Read More</button>
                                    <div class="mb-social glp-social">
                                        <p>Share</p>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-tumblr"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- gl-preview -->
                    </li>
                    <li class="gl-item gl-fixed-ratio-item gl-loading" data-category="people">
                        <a href="#">
                            <figure>
                                <img src="http://d.azelab.com/mental/Demo/images/hqdefault.jpg" alt="">
                                <figcaption>
                                    <div class="middle"><div class="middle-inner">
                                            <p class="gl-item-icon"><i class="fa fa-play-circle-o"></i></p>
                                            <p class="gl-item-title">Youtube</p>
                                            <p class="gl-item-category">People</p>
                                        </div></div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="gl-preview" style="diplay:none;" data-category="people">
                            <span class="glp-arrow"></span>
                            <a href="#" class="glp-close"></a>
                            <div class="row gl-preview-container">
                                <div class="col-sm-8">
                                    <div class="glp-video">
                                        <iframe src="http://www.youtube.com/embed/mOtI-gv1E1Y?rel=0" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="col-sm-4 lg-preview-descr">
                                    <h4>Girl in the street</h4>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <button class="btn btn-primary glp-readmore">Read More</button>
                                    <div class="mb-social glp-social">
                                        <p>Share</p>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-tumblr"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- gl-preview -->
                    </li>
                    <li class="gl-item gl-fixed-ratio-item gl-loading" data-category="people">
                        <a href="#">
                            <figure>
                                <img src="http://i.vimeocdn.com/video/475287645_640.jpg" alt="">
                                <figcaption>
                                    <div class="middle"><div class="middle-inner">
                                            <p class="gl-item-icon"><i class="fa fa-play-circle-o"></i></p>
                                            <p class="gl-item-title">Vimeo</p>
                                            <p class="gl-item-category">People</p>
                                        </div></div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="gl-preview" style="diplay:none;" data-category="people">
                            <span class="glp-arrow"></span>
                            <a href="#" class="glp-close"></a>
                            <div class="row gl-preview-container">
                                <div class="col-sm-8">
                                    <div class="glp-video">
                                        <iframe src="http://player.vimeo.com/video/95384593" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="col-sm-4 lg-preview-descr">
                                    <h4>Girl in the street</h4>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <button class="btn btn-primary glp-readmore">Read More</button>
                                    <div class="mb-social glp-social">
                                        <p>Share</p>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-tumblr"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- gl-preview -->
                    </li>
                    <li class="gl-item gl-fixed-ratio-item gl-loading" data-category="people">
                        <a href="#">
                            <figure>
                                <img src="http://d.azelab.com/mental/Demo/video/thumbs/hac.jpg" alt="">
                                <figcaption>
                                    <div class="middle"><div class="middle-inner">
                                            <p class="gl-item-icon"><i class="fa fa-play-circle-o"></i></p>
                                            <p class="gl-item-title">Video JS</p>
                                            <p class="gl-item-category">People</p>
                                        </div></div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="gl-preview" style="diplay:none;" data-category="people">
                            <span class="glp-arrow"></span>
                            <a href="#" class="glp-close"></a>
                            <div class="row gl-preview-container">
                                <div class="col-sm-8">
                                    <div class="glp-video">
                                        <video class="video-js vjs-default-skin vjs-mental-skin" width="100%" height="100%" controls preload="none"
                                               poster="http://d.azelab.com/mental/Demo/video/thumbs/hac.jpg"
                                               data-setup="{}">
                                            <source src="http://d.azelab.com/mental/Demo/video/hac.mp4" type="video/mp4" />
                                            <!-- <source src="video/hac.webm" type='video/webm' /> -->
                                            <source src="http://d.azelab.com/mental/Demo/video/hac.ogv" type='video/ogg' />
                                        </video>
                                    </div>
                                </div>
                                <div class="col-sm-4 lg-preview-descr">
                                    <h4>Girl in the street</h4>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <button class="btn btn-primary glp-readmore">Read More</button>
                                    <div class="mb-social glp-social">
                                        <p>Share</p>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-tumblr"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- gl-preview -->
                    </li>
                    <li class="gl-item gl-fixed-ratio-item gl-loading" data-category="people">
                        <a href="#">
                            <figure>
                                <img src="http://placehold.it/700x471" alt="">
                                <figcaption>
                                    <div class="middle"><div class="middle-inner">
                                            <p class="gl-item-title">Girl in the street</p>
                                            <p class="gl-item-category">People</p>
                                        </div></div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="gl-preview" style="diplay:none;" data-category="people">
                            <span class="glp-arrow"></span>
                            <a href="#" class="glp-close"></a>
                            <div class="row gl-preview-container">
                                <div class="col-sm-8">
                                    <figure>
                                        <img src="http://placehold.it/700x471" alt="">
                                        <a href="http://placehold.it/1280x1024" class="glp-zoom"></a>
                                    </figure>
                                </div>
                                <div class="col-sm-4 lg-preview-descr">
                                    <h4>Girl in the street</h4>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <button class="btn btn-primary glp-readmore">Read More</button>
                                    <div class="mb-social glp-social">
                                        <p>Share</p>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-tumblr"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- gl-preview -->
                    </li>
                    <li class="gl-item gl-fixed-ratio-item gl-loading" data-category="people">
                        <a href="#"> 
                            <figure>
                                <img src="http://placehold.it/700x471" alt="">
                                <figcaption>
                                    <div class="middle"><div class="middle-inner">
                                            <p class="gl-item-title">Tne Man</p>
                                            <p class="gl-item-category">People</p>
                                        </div></div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="gl-preview" style="diplay:none;">
                            <span class="glp-arrow"></span>
                            <a href="#" class="glp-close"></a>
                            <div class="row gl-preview-container">
                                <div class="col-sm-8">
                                    <figure>
                                        <img src="http://placehold.it/700x471" alt="">
                                        <a href="http://placehold.it/1280x1024" class="glp-zoom"></a>
                                    </figure>
                                </div>
                                <div class="col-sm-4 lg-preview-descr">
                                    <h4>Tne Man</h4>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <button class="btn btn-primary glp-readmore">Read More</button>
                                    <div class="mb-social glp-social">
                                        <p>Share</p>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-tumblr"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- gl-preview -->
                    </li>
                    <li class="gl-item gl-fixed-ratio-item gl-loading" data-category="people">
                        <a href="#"> 
                            <figure>
                                <img src="http://placehold.it/700x471" alt="">
                                <figcaption>
                                    <div class="middle"><div class="middle-inner">
                                            <p class="gl-item-title">The Girl</p>
                                            <p class="gl-item-category">People</p>
                                        </div></div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="gl-preview" style="diplay:none;">
                            <span class="glp-arrow"></span>
                            <a href="#" class="glp-close"></a>
                            <div class="row gl-preview-container">
                                <div class="col-sm-8">
                                    <figure>
                                        <img src="http://placehold.it/700x471" alt="">
                                        <a href="http://placehold.it/1280x1024" class="glp-zoom"></a>
                                    </figure>
                                </div>
                                <div class="col-sm-4 lg-preview-descr">
                                    <h4>The Girl</h4>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <button class="btn btn-primary glp-readmore">Read More</button>
                                    <div class="mb-social glp-social">
                                        <p>Share</p>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-tumblr"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- gl-preview -->
                    </li>
                    <li class="gl-item gl-fixed-ratio-item gl-loading" data-category="nature">
                        <a href="#"> 
                            <figure>
                                <img src="http://placehold.it/700x471" alt="">
                                <figcaption>
                                    <div class="middle"><div class="middle-inner">
                                            <p class="gl-item-title">Girt in the forest</p>
                                            <p class="gl-item-category">Nature</p>
                                        </div></div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="gl-preview" style="diplay:none;">
                            <span class="glp-arrow"></span>
                            <a href="#" class="glp-close"></a>
                            <div class="row gl-preview-container">
                                <div class="col-sm-8">
                                    <figure>
                                        <img src="http://placehold.it/700x471" alt="">
                                        <a href="http://placehold.it/1280x1024" class="glp-zoom"></a>
                                    </figure>
                                </div>
                                <div class="col-sm-4 lg-preview-descr">
                                    <h4>Girt in the forest</h4>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <button class="btn btn-primary glp-readmore">Read More</button>
                                    <div class="mb-social glp-social">
                                        <p>Share</p>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-tumblr"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- gl-preview -->
                    </li>
                    <li class="gl-item gl-fixed-ratio-item gl-loading" data-category="nature">
                        <a href="#"> 
                            <figure>
                                <img src="http://placehold.it/700x471" alt="">
                                <figcaption>
                                    <div class="middle"><div class="middle-inner">
                                            <p class="gl-item-title">Night River</p>
                                            <p class="gl-item-category">Nature</p>
                                        </div></div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="gl-preview" style="diplay:none;">
                            <span class="glp-arrow"></span>
                            <a href="#" class="glp-close"></a>
                            <div class="row gl-preview-container">
                                <div class="col-sm-8">
                                    <figure>
                                        <img src="http://placehold.it/700x471" alt="">
                                        <a href="http://placehold.it/1280x1024" class="glp-zoom"></a>
                                    </figure>
                                </div>
                                <div class="col-sm-4 lg-preview-descr">
                                    <h4>Night River</h4>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <button class="btn btn-primary glp-readmore">Read More</button>
                                    <div class="mb-social glp-social">
                                        <p>Share</p>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-tumblr"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- gl-preview -->
                    </li>
                    <li class="gl-item gl-fixed-ratio-item gl-loading" data-category="fashion">
                        <a href="#"> 
                            <figure>
                                <img src="http://placehold.it/700x471" alt="">
                                <figcaption>
                                    <div class="middle"><div class="middle-inner">
                                            <p class="gl-item-title">Girl At Kitchen</p>
                                            <p class="gl-item-category">Fashion</p>
                                        </div></div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="gl-preview" style="diplay:none;">
                            <span class="glp-arrow"></span>
                            <a href="#" class="glp-close"></a>
                            <div class="row gl-preview-container">
                                <div class="col-sm-8">
                                    <figure>
                                        <img src="http://placehold.it/700x471" alt="">
                                        <a href="http://placehold.it/1280x1024" class="glp-zoom"></a>
                                    </figure>
                                </div>
                                <div class="col-sm-4 lg-preview-descr">
                                    <h4>Girl At Kitchen</h4>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <button class="btn btn-primary glp-readmore">Read More</button>
                                    <div class="mb-social glp-social">
                                        <p>Share</p>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-tumblr"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- gl-preview -->
                    </li>
                    <li class="gl-item gl-fixed-ratio-item gl-loading" data-category="nature">
                        <a href="#"> 
                            <figure>
                                <img src="http://placehold.it/700x471" alt="">
                                <figcaption>
                                    <div class="middle"><div class="middle-inner">
                                            <p class="gl-item-title">Lonely Desert</p>
                                            <p class="gl-item-category">Nature</p>
                                        </div></div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="gl-preview" style="diplay:none;">
                            <span class="glp-arrow"></span>
                            <a href="#" class="glp-close"></a>
                            <div class="row gl-preview-container">
                                <div class="col-sm-8">
                                    <figure>
                                        <img src="http://placehold.it/700x471" alt="">
                                        <a href="http://placehold.it/1280x1024" class="glp-zoom"></a>
                                    </figure>
                                </div>
                                <div class="col-sm-4 lg-preview-descr">
                                    <h4>Lonely Desert</h4>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <button class="btn btn-primary glp-readmore">Read More</button>
                                    <div class="mb-social glp-social">
                                        <p>Share</p>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-tumblr"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- gl-preview -->
                    </li>
                    <li class="gl-item gl-fixed-ratio-item gl-loading" data-category="nature">
                        <a href="#"> 
                            <figure>
                                <img src="http://placehold.it/700x471" alt="">
                                <figcaption>
                                    <div class="middle"><div class="middle-inner">
                                            <p class="gl-item-title">Autumn Forest</p>
                                            <p class="gl-item-category">Nature</p>
                                        </div></div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="gl-preview" style="diplay:none;">
                            <span class="glp-arrow"></span>
                            <a href="#" class="glp-close"></a>
                            <div class="row gl-preview-container">
                                <div class="col-sm-8">
                                    <figure>
                                        <img src="http://placehold.it/700x471" alt="">
                                        <a href="http://placehold.it/1280x1024" class="glp-zoom"></a>
                                    </figure>
                                </div>
                                <div class="col-sm-4 lg-preview-descr">
                                    <h4>Autumn Forest</h4>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <button class="btn btn-primary glp-readmore">Read More</button>
                                    <div class="mb-social glp-social">
                                        <p>Share</p>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-tumblr"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- gl-preview -->
                    </li>
                    <li class="gl-item gl-fixed-ratio-item gl-loading" data-category="fashion">
                        <a href="#"> 
                            <figure>
                                <img src="http://placehold.it/700x471" alt="">
                                <figcaption>
                                    <div class="middle"><div class="middle-inner">
                                            <p class="gl-item-title">Man in yellow jacket</p>
                                            <p class="gl-item-category">Fashion</p>
                                        </div></div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="gl-preview" style="diplay:none;">
                            <span class="glp-arrow"></span>
                            <a href="#" class="glp-close"></a>
                            <div class="row gl-preview-container">
                                <div class="col-sm-8">
                                    <figure>
                                        <img src="http://placehold.it/700x471" alt="">
                                        <a href="http://placehold.it/1280x1024" class="glp-zoom"></a>
                                    </figure>
                                </div>
                                <div class="col-sm-4 lg-preview-descr">
                                    <h4>Man in yellow jacket</h4>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <button class="btn btn-primary glp-readmore">Read More</button>
                                    <div class="mb-social glp-social">
                                        <p>Share</p>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-tumblr"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- gl-preview -->
                    </li>
                    <li class="gl-item gl-fixed-ratio-item gl-loading" data-category="fashion">
                        <a href="#"> 
                            <figure>
                                <img src="http://placehold.it/700x471" alt="">
                                <figcaption>
                                    <div class="middle"><div class="middle-inner">
                                            <p class="gl-item-title">Man in blue shirt</p>
                                            <p class="gl-item-category">Fashion</p>
                                        </div></div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="gl-preview" style="diplay:none;">
                            <span class="glp-arrow"></span>
                            <a href="#" class="glp-close"></a>
                            <div class="row gl-preview-container">
                                <div class="col-sm-8">
                                    <figure>
                                        <img src="http://placehold.it/700x471" alt="">
                                        <a href="http://placehold.it/1280x1024" class="glp-zoom"></a>
                                    </figure>
                                </div>
                                <div class="col-sm-4 lg-preview-descr">
                                    <h4>Man in blue shirt</h4>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <button class="btn btn-primary glp-readmore">Read More</button>
                                    <div class="mb-social glp-social">
                                        <p>Share</p>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-tumblr"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- gl-preview -->
                    </li>
                    <li class="gl-item gl-fixed-ratio-item gl-loading" data-category="fashion">
                        <a href="#"> 
                            <figure>
                                <img src="http://placehold.it/700x471" alt="">
                                <figcaption>
                                    <div class="middle"><div class="middle-inner">
                                            <p class="gl-item-title">Girl</p>
                                            <p class="gl-item-category">Fashion</p>
                                        </div></div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="gl-preview" style="diplay:none;">
                            <span class="glp-arrow"></span>
                            <a href="#" class="glp-close"></a>
                            <div class="row gl-preview-container">
                                <div class="col-sm-8">
                                    <figure>
                                        <img src="http://placehold.it/700x471" alt="">
                                        <a href="http://placehold.it/1280x1024" class="glp-zoom"></a>
                                    </figure>
                                </div>
                                <div class="col-sm-4 lg-preview-descr">
                                    <h4>Girl</h4>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <button class="btn btn-primary glp-readmore">Read More</button>
                                    <div class="mb-social glp-social">
                                        <p>Share</p>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-tumblr"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- gl-preview -->
                    </li>
                    <li class="gl-item gl-fixed-ratio-item gl-loading" data-category="fashion">
                        <a href="#"> 
                            <figure>
                                <img src="http://placehold.it/700x471" alt="">
                                <figcaption>
                                    <div class="middle"><div class="middle-inner">
                                            <p class="gl-item-title">Girl</p>
                                            <p class="gl-item-category">Fashion</p>
                                        </div></div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="gl-preview" style="diplay:none;">
                            <span class="glp-arrow"></span>
                            <a href="#" class="glp-close"></a>
                            <div class="row gl-preview-container">
                                <div class="col-sm-8">
                                    <figure>
                                        <img src="http://placehold.it/700x471" alt="">
                                        <a href="http://placehold.it/1280x1024" class="glp-zoom"></a>
                                    </figure>
                                </div>
                                <div class="col-sm-4 lg-preview-descr">
                                    <h4>Girl</h4>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <button class="btn btn-primary glp-readmore">Read More</button>
                                    <div class="mb-social glp-social">
                                        <p>Share</p>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-tumblr"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- gl-preview -->
                    </li>
                    <li class="gl-item gl-fixed-ratio-item gl-loading" data-category="nature">
                        <a href="#"> 
                            <figure>
                                <img src="http://placehold.it/700x471" alt="">
                                <figcaption>
                                    <div class="middle"><div class="middle-inner">
                                            <p class="gl-item-title">Uqinue bridge in California</p>
                                            <p class="gl-item-category">Nature</p>
                                        </div></div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="gl-preview" style="diplay:none;">
                            <span class="glp-arrow"></span>
                            <a href="#" class="glp-close"></a>
                            <div class="row gl-preview-container">
                                <div class="col-sm-8">
                                    <figure>
                                        <img src="http://placehold.it/700x471" alt="">
                                        <a href="http://placehold.it/1280x1024" class="glp-zoom"></a>
                                    </figure>
                                </div>
                                <div class="col-sm-4 lg-preview-descr">
                                    <h4>Uqinue bridge in California</h4>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <button class="btn btn-primary glp-readmore">Read More</button>
                                    <div class="mb-social glp-social">
                                        <p>Share</p>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-tumblr"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- gl-preview -->
                    </li>
                    <li class="gl-item gl-fixed-ratio-item gl-loading" data-category="nature">
                        <a href="#"> 
                            <figure>
                                <img src="http://placehold.it/700x471" alt="">
                                <figcaption>
                                    <div class="middle"><div class="middle-inner">
                                            <p class="gl-item-title">Uqinue bridge in Florida</p>
                                            <p class="gl-item-category">Nature</p>
                                        </div></div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="gl-preview" style="diplay:none;">
                            <span class="glp-arrow"></span>
                            <a href="#" class="glp-close"></a>
                            <div class="row gl-preview-container">
                                <div class="col-sm-8">
                                    <figure>
                                        <img src="http://placehold.it/700x471" alt="">
                                        <a href="http://placehold.it/1280x1024" class="glp-zoom"></a>
                                    </figure>
                                </div>
                                <div class="col-sm-4 lg-preview-descr">
                                    <h4>Uqinue bridge in Florida</h4>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <button class="btn btn-primary glp-readmore">Read More</button>
                                    <div class="mb-social glp-social">
                                        <p>Share</p>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-tumblr"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- gl-preview -->
                    </li>
                    <li class="gl-item gl-fixed-ratio-item gl-loading" data-category="nature">
                        <a href="#"> 
                            <figure>
                                <img src="http://placehold.it/700x471" alt="">
                                <figcaption>
                                    <div class="middle"><div class="middle-inner">
                                            <p class="gl-item-title">Canal in the night</p>
                                            <p class="gl-item-category">Nature</p>
                                        </div></div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="gl-preview" style="diplay:none;">
                            <span class="glp-arrow"></span>
                            <a href="#" class="glp-close"></a>
                            <div class="row gl-preview-container">
                                <div class="col-sm-8">
                                    <figure>
                                        <img src="http://placehold.it/700x471" alt="">
                                        <a href="http://placehold.it/1280x1024" class="glp-zoom"></a>
                                    </figure>
                                </div>
                                <div class="col-sm-4 lg-preview-descr">
                                    <h4>Canal in the night</h4>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <button class="btn btn-primary glp-readmore">Read More</button>
                                    <div class="mb-social glp-social">
                                        <p>Share</p>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-tumblr"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- gl-preview -->
                    </li>
                    <li class="gl-item gl-fixed-ratio-item gl-loading" data-category="nature">
                        <a href="#"> 
                            <figure>
                                <img src="http://placehold.it/700x471" alt="">
                                <figcaption>
                                    <div class="middle"><div class="middle-inner">
                                            <p class="gl-item-title">Beautiful and dangerous sea</p>
                                            <p class="gl-item-category">Nature</p>
                                        </div></div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="gl-preview" style="diplay:none;">
                            <span class="glp-arrow"></span>
                            <a href="#" class="glp-close"></a>
                            <div class="row gl-preview-container">
                                <div class="col-sm-8">
                                    <figure>
                                        <img src="http://placehold.it/700x471" alt="">
                                        <a href="http://placehold.it/1280x1024" class="glp-zoom"></a>
                                    </figure>
                                </div>
                                <div class="col-sm-4 lg-preview-descr">
                                    <h4>Beautiful and dangerous sea</h4>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <button class="btn btn-primary glp-readmore">Read More</button>
                                    <div class="mb-social glp-social">
                                        <p>Share</p>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-tumblr"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- gl-preview -->
                    </li>
                    <li class="gl-item gl-fixed-ratio-item gl-loading" data-category="nature">
                        <a href="#"> 
                            <figure>
                                <img src="http://placehold.it/700x471" alt="">
                                <figcaption>
                                    <div class="middle"><div class="middle-inner">
                                            <p class="gl-item-title">Lonely sea shore</p>
                                            <p class="gl-item-category">Nature</p>
                                        </div></div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="gl-preview" style="diplay:none;">
                            <span class="glp-arrow"></span>
                            <a href="#" class="glp-close"></a>
                            <div class="row gl-preview-container">
                                <div class="col-sm-8">
                                    <figure>
                                        <img src="http://placehold.it/700x471" alt="">
                                        <a href="http://placehold.it/1280x1024" class="glp-zoom"></a>
                                    </figure>
                                </div>
                                <div class="col-sm-4 lg-preview-descr">
                                    <h4>Lonely sea shore</h4>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <button class="btn btn-primary glp-readmore">Read More</button>
                                    <div class="mb-social glp-social">
                                        <p>Share</p>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-tumblr"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- gl-preview -->
                    </li>
                    <li class="gl-item gl-fixed-ratio-item gl-loading" data-category="nature">
                        <a href="#"> 
                            <figure>
                                <img src="http://placehold.it/700x471" alt="">
                                <figcaption>
                                    <div class="middle"><div class="middle-inner">
                                            <p class="gl-item-title">Frozen Morning Sea</p>
                                            <p class="gl-item-category">Nature</p>
                                        </div></div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="gl-preview" style="diplay:none;">
                            <span class="glp-arrow"></span>
                            <a href="#" class="glp-close"></a>
                            <div class="row gl-preview-container">
                                <div class="col-sm-8">
                                    <figure>
                                        <img src="http://placehold.it/700x471" alt="">
                                        <a href="http://placehold.it/1280x1024" class="glp-zoom"></a>
                                    </figure>
                                </div>
                                <div class="col-sm-4 lg-preview-descr">
                                    <h4>Frozen Morning Sea</h4>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <button class="btn btn-primary glp-readmore">Read More</button>
                                    <div class="mb-social glp-social">
                                        <p>Share</p>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-tumblr"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- gl-preview -->
                    </li>
                    <li class="gl-item gl-fixed-ratio-item gl-loading" data-category="nature">
                        <a href="#"> 
                            <figure>
                                <img src="http://placehold.it/700x471" alt="">
                                <figcaption>
                                    <div class="middle"><div class="middle-inner">
                                            <p class="gl-item-title">Red leaf</p>
                                            <p class="gl-item-category">Nature</p>
                                        </div></div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="gl-preview" style="diplay:none;">
                            <span class="glp-arrow"></span>
                            <a href="#" class="glp-close"></a>
                            <div class="row gl-preview-container">
                                <div class="col-sm-8">
                                    <figure>
                                        <img src="http://placehold.it/700x471" alt="">
                                        <a href="http://placehold.it/1280x1024" class="glp-zoom"></a>
                                    </figure>
                                </div>
                                <div class="col-sm-4 lg-preview-descr">
                                    <h4>Red leaf</h4>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <button class="btn btn-primary glp-readmore">Read More</button>
                                    <div class="mb-social glp-social">
                                        <p>Share</p>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-tumblr"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- gl-preview -->
                    </li>
                    <li class="gl-item gl-fixed-ratio-item gl-loading" data-category="nature">
                        <a href="#"> 
                            <figure>
                                <img src="http://placehold.it/700x471" alt="">
                                <figcaption>
                                    <div class="middle"><div class="middle-inner">
                                            <p class="gl-item-title">Lonely sea shore</p>
                                            <p class="gl-item-category">Nature</p>
                                        </div></div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="gl-preview" style="diplay:none;">
                            <span class="glp-arrow"></span>
                            <a href="#" class="glp-close"></a>
                            <div class="row gl-preview-container">
                                <div class="col-sm-8">
                                    <figure>
                                        <img src="http://placehold.it/700x471" alt="">
                                        <a href="http://placehold.it/1280x1024" class="glp-zoom"></a>
                                    </figure>
                                </div>
                                <div class="col-sm-4 lg-preview-descr">
                                    <h4>Lonely sea shore</h4>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <button class="btn btn-primary glp-readmore">Read More</button>
                                    <div class="mb-social glp-social">
                                        <p>Share</p>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-tumblr"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- gl-preview -->
                    </li>
                    <li class="gl-item gl-fixed-ratio-item gl-loading" data-category="nature">
                        <a href="#"> 
                            <figure>
                                <img src="http://placehold.it/700x471" alt="">
                                <figcaption>
                                    <div class="middle"><div class="middle-inner">
                                            <p class="gl-item-title">Bernini Building</p>
                                            <p class="gl-item-category">Nature</p>
                                        </div></div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="gl-preview" style="diplay:none;">
                            <span class="glp-arrow"></span>
                            <a href="#" class="glp-close"></a>
                            <div class="row gl-preview-container">
                                <div class="col-sm-8">
                                    <figure>
                                        <img src="http://placehold.it/700x471" alt="">
                                        <a href="http://placehold.it/1280x1024" class="glp-zoom"></a>
                                    </figure>
                                </div>
                                <div class="col-sm-4 lg-preview-descr">
                                    <h4>Bernini Building</h4>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <button class="btn btn-primary glp-readmore">Read More</button>
                                    <div class="mb-social glp-social">
                                        <p>Share</p>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-tumblr"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- gl-preview -->
                    </li>
                    <li class="gl-item gl-fixed-ratio-item gl-loading" data-category="nature">
                        <a href="#"> 
                            <figure>
                                <img src="http://placehold.it/700x471" alt="">
                                <figcaption>
                                    <div class="middle"><div class="middle-inner">
                                            <p class="gl-item-title">Lonely Castle</p>
                                            <p class="gl-item-category">Nature</p>
                                        </div></div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="gl-preview" style="diplay:none;">
                            <span class="glp-arrow"></span>
                            <a href="#" class="glp-close"></a>
                            <div class="row gl-preview-container">
                                <div class="col-sm-8">
                                    <figure>
                                        <img src="http://placehold.it/700x471" alt="">
                                        <a href="http://placehold.it/1280x1024" class="glp-zoom"></a>
                                    </figure>
                                </div>
                                <div class="col-sm-4 lg-preview-descr">
                                    <h4>Lonely Castle</h4>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <button class="btn btn-primary glp-readmore">Read More</button>
                                    <div class="mb-social glp-social">
                                        <p>Share</p>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-tumblr"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- gl-preview -->
                    </li>
                    <li class="gl-item gl-fixed-ratio-item gl-loading" data-category="people">
                        <a href="#"> 
                            <figure>
                                <img src="http://placehold.it/700x471" alt="">
                                <figcaption>
                                    <div class="middle"><div class="middle-inner">
                                            <p class="gl-item-title">Evil Brothers</p>
                                            <p class="gl-item-category">People</p>
                                        </div></div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="gl-preview" style="diplay:none;">
                            <span class="glp-arrow"></span>
                            <a href="#" class="glp-close"></a>
                            <div class="row gl-preview-container">
                                <div class="col-sm-8">
                                    <figure>
                                        <img src="http://placehold.it/700x471" alt="">
                                        <a href="http://placehold.it/1280x1024" class="glp-zoom"></a>
                                    </figure>
                                </div>
                                <div class="col-sm-4 lg-preview-descr">
                                    <h4>Evil Brothers</h4>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <button class="btn btn-primary glp-readmore">Read More</button>
                                    <div class="mb-social glp-social">
                                        <p>Share</p>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-tumblr"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- gl-preview -->
                    </li>
                    <li class="gl-item gl-fixed-ratio-item gl-loading" data-category="nature">
                        <a href="#"> 
                            <figure>
                                <img src="http://placehold.it/700x471" alt="">
                                <figcaption>
                                    <div class="middle"><div class="middle-inner">
                                            <p class="gl-item-title">Lonely Praire</p>
                                            <p class="gl-item-category">Nature</p>
                                        </div></div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="gl-preview" style="diplay:none;">
                            <span class="glp-arrow"></span>
                            <a href="#" class="glp-close"></a>
                            <div class="row gl-preview-container">
                                <div class="col-sm-8">
                                    <figure>
                                        <img src="http://placehold.it/700x471" alt="">
                                        <a href="http://placehold.it/1280x1024" class="glp-zoom"></a>
                                    </figure>
                                </div>
                                <div class="col-sm-4 lg-preview-descr">
                                    <h4>Lonely Praire</h4>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <button class="btn btn-primary glp-readmore">Read More</button>
                                    <div class="mb-social glp-social">
                                        <p>Share</p>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-tumblr"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- gl-preview -->
                    </li>
                    <li class="gl-item gl-fixed-ratio-item gl-loading" data-category="nature">
                        <a href="#"> 
                            <figure>
                                <img src="http://placehold.it/700x471" alt="">
                                <figcaption>
                                    <div class="middle"><div class="middle-inner">
                                            <p class="gl-item-title">Dangerous Mountain</p>
                                            <p class="gl-item-category">Nature</p>
                                        </div></div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="gl-preview" style="diplay:none;">
                            <span class="glp-arrow"></span>
                            <a href="#" class="glp-close"></a>
                            <div class="row gl-preview-container">
                                <div class="col-sm-8">
                                    <figure>
                                        <img src="http://placehold.it/700x471" alt="">
                                        <a href="http://placehold.it/1280x1024" class="glp-zoom"></a>
                                    </figure>
                                </div>
                                <div class="col-sm-4 lg-preview-descr">
                                    <h4>Dangerous Mountain</h4>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <p>We are team of creative photographers. We passionate with photography and other creative things. If you are looking professional photography theme with endless possibilities, you come in right place. This template consist of well-organized layers. Tons of features waiting for you. </p>
                                    <button class="btn btn-primary glp-readmore">Read More</button>
                                    <div class="mb-social glp-social">
                                        <p>Share</p>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-tumblr"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- gl-preview -->
                    </li>
                </ul> <!-- gallery -->
            </section>
        </div> <!-- section -->


        <div id="footer" class="ft-single-post text-center">
            <footer>
                <a href="#" class="footer-loadmore" data-link="#" data-offset="5" data-items-per-page="5">Load more</a>
                <span class="loading-spinner" style="display:none;"></span>
            </footer>
        </div>

    </div> <!-- main -->

</div> <!-- wrapper -->