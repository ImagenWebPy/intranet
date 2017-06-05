<?php
$helper = new Helper();
?>
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
                    <li><a data-filter="<?= $categorias['tag']; ?>" href="#"><?= utf8_encode($categorias['descripcion']); ?></a></li>
                <?php endforeach; ?>
                <li class="gf-underline"></li>
            </ul>
        </header>
    </div>
    <div class="section no-padding st-invert">
        <section>
            <ul id="gallery-w-preview" class="gallery gl-cols-4 gl-fixed-items">
                <?php foreach ($helper->getContenidoPrincipal() as $contenido): ?>
                    <li class="gl-item gl-fixed-ratio-item gl-loading" data-category="evento">
                        <a href="#">
                            <figure>
                                <img src="<?= URL; ?>public/archivos/<?= $contenido['img']; ?>" alt="">
                                <figcaption>
                                    <div class="middle"><div class="middle-inner">
                                            <p class="gl-item-title"><?= utf8_encode($contenido['titulo']); ?></p>
                                        </div></div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="gl-preview" style="diplay:none;" data-category="evento">
                            <span class="glp-arrow"></span>
                            <a href="#" class="glp-close"></a>
                            <div class="row gl-preview-container">
                                <div class="col-sm-8">
                                    <div id="carousel-gallery-1" class="carousel slide" data-ride="carousel" data-interval="false">
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner">
                                            <?php foreach ($helper->getArchivosPOst($contenido['id']) as $item): ?>
                                                <div class="item <?= ($item['img_principal'] == 1) ? 'active' : ''; ?>">
                                                    <img src="<?= URL; ?>public/archivos/<?= $item['descripcion']; ?>" alt="slide">
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                        <ol class="carousel-indicators">
                                            <?php for ($i = 0; $i <= (count($helper->getArchivosPOst($contenido['id'])) - 1); $i++): ?>
                                                <li data-target="#carousel-gallery-1" data-slide-to="<?= $i; ?>" class="active"></li>
                                            <?php endfor; ?>
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
                                    <h4><?= utf8_encode($contenido['titulo']); ?></h4>
                                    <?= utf8_encode($contenido['contenido']); ?>
                                    <button class="btn btn-primary glp-readmore">Leer màs</button>
                                </div>
                            </div>
                        </div> <!-- gl-preview -->
                    </li>
                <?php endforeach; ?>
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
            </ul> <!-- gallery -->
        </section>
    </div> <!-- section -->


    <div id="footer" class="ft-single-post text-center">
        <footer>
            <a href="#" class="footer-loadmore" data-link="#" data-offset="5" data-items-per-page="5">Cargar más</a>
            <span class="loading-spinner" style="display:none;"></span>
        </footer>
    </div>

</div> <!-- main -->

