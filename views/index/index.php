<div id="main">
    <div id="header-mobile" class="visible-xs">
        <header>
            <div class="m-header-body">
                <img src="<?= URL; ?>public/assets/img/logo_white.png" class="logo img-responsive" alt="Logo Garden">
                <p class="m-site-descr">Multipurpose Portfolio</p>
            </div>
        </header>
    </div>
    <div id="header" class="hd-filters">
        <header>
            <ul class="gallety-filters">
                <li class="active"><a data-filter="*" href="#">Todos</a></li>
                <?php foreach ($this->helper->listadoCategorias() as $categorias): ?>
                    <li><a data-filter="<?= $categorias['tag']; ?>" href="00#"000><?= $categorias['descripcion']; ?></a></li>
                <?php endforeach; ?>
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

