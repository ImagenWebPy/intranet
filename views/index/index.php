<?php
$helper = new Helper();
?>
<div id="main">
    <?= $helper->mostrarMobileLogo(); ?>
    <div id="header" class="hd-filters">
        <header>
            <ul class="gallety-filters">
                <li class="active sourcePro"><a data-filter="*" href="#" style="font-size: 12px;">Todos</a></li>
                <?php foreach ($this->helper->listadoCategorias() as $categorias): ?>
                    <li><a data-filter="<?= $categorias['tag']; ?>" href="#" class="sourcePro" style="font-size: 12px;"><?= utf8_encode($categorias['descripcion']); ?></a></li>
                <?php endforeach; ?>
                <li class="gf-underline"></li>
            </ul>
        </header>
    </div>
    <div class="section no-padding st-invert">
        <section>
            <ul id="gallery-w-preview" class="gallery gl-cols-4 gl-fixed-items">
                <?php foreach ($helper->getContenidoPrincipal() as $contenido): ?>
                    <li class="gl-item gl-fixed-ratio-item gl-loading" data-category="<?= $helper->getTagsPost($contenido['id']); ?>">
                        <a href="#">
                            <figure>
                                <img src="<?= URL; ?>public/archivos/<?= $contenido['img']; ?>" alt="">
                                <figcaption>
                                    <div class="middle"><div class="middle-inner">
                                            <p class="gl-item-title sourcePro"><?= utf8_encode($contenido['titulo']); ?></p>
                                        </div></div>
                                </figcaption>

                            </figure>
                            <div class="divTitulosPost">
                                <p class="tipoEvento"><?= utf8_encode($contenido['evento']); ?></p>
                                <p class="tituloPost"><?= (strlen($contenido['titulo']) > 35) ? substr(utf8_encode($contenido['titulo']), 0, 35) . '...' : utf8_encode($contenido['titulo']) ?></p>
                                <p class="fechaPost"><?= $helper->mesEspanol(date('F', strtotime($contenido['fecha']))) . '-' . date('Y', strtotime($contenido['fecha'])); ?></p>
                            </div>
                        </a>
                        <div class="gl-preview" style="diplay:none;" data-category="<?= $helper->getTagsPost($contenido['id']); ?>">
                            <span class="glp-arrow"></span>
                            <a href="#" class="glp-close"></a>
                            <div class="row gl-preview-container">
                                <?php
                                $archivos = $helper->getArchivosPOst($contenido['id']);
                                $fechaUltimoPost = $contenido['fecha'];
                                ?>
                                <?php if ($archivos['tipo'] == 'imagen'): ?>
                                    <div class="col-sm-8">
                                        <div id="carousel-gallery-1" class="carousel slide" data-ride="carousel" data-interval="false">
                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner">
                                                <?php foreach ($archivos['imagenes'] as $item): ?>
                                                    <div class="item <?= ($item['principal'] == 1) ? 'active' : ''; ?>">
                                                        <img src="<?= URL; ?>public/archivos/<?= $item['imagen']; ?>" alt="slide">
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                            <ol class="carousel-indicators">
                                                <?php
                                                for ($i = 0; $i <= (count($archivos['imagenes']) - 1); $i++):
                                                    ?>
                                                    <li data-target="#carousel-gallery-1" data-slide-to="<?= $i; ?>"></li>
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
                                <?php else: ?>
                                    <?php
                                    $imgVideo = '';
                                    foreach ($archivos['imagenes'] as $item) {
                                        if ($item['principal'] == 1) {
                                            $imgVideo = utf8_encode($item['imagen']);
                                        }
                                    }
                                    ?>
                                    <div class="col-sm-8">
                                        <div class="glp-video">
                                            <video class="video-js vjs-default-skin vjs-mental-skin" width="100%" height="100%" controls preload="none"
                                                   poster="<?= URL; ?>public/archivos/<?= $imgVideo ?>"
                                                   data-setup="{}">
                                                       <?php foreach ($archivos['video'] as $item): ?>
                                                    <source src="<?= URL; ?>/public/archivos/<?= utf8_encode($item['archivo']); ?>" type="<?= $item['type']; ?>" />
                                                <?php endforeach; ?>
                                            </video>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php $textoResumido = (strlen($contenido['contenido']) > 180) ? substr(utf8_encode($contenido['contenido']), 0, 180) . '...' : $contenido['contenido']; ?>
                                <div class="col-sm-4 lg-preview-descr sourcePro">
                                    <h4><?= utf8_encode($contenido['titulo']); ?></h4>
                                    <p><?= strip_tags($textoResumido); ?></p>
                                    <a href="<?= URL; ?>post/contenido/<?= $contenido['id'] . '/' . $this->helper->getPostTitle($contenido['id'])['url']; ?>" class="btn btn-primary glp-readmore linkWhite">Leer màs</a>
                                </div>
                            </div>
                        </div> <!-- gl-preview -->
                    </li>
                <?php endforeach; ?>
            </ul> <!-- gallery -->
        </section>
    </div> <!-- section -->
    <div id="footer" class="ft-single-post text-center">
        <footer>
            <a href="#" class="footer-loadmore" data-url="<?= URL; ?>" data-fecha="<?= $fechaUltimoPost; ?>" data-items="8">Cargar más</a>
            <span class="loading-spinner" style="display:none;"></span>
        </footer>
    </div>
</div> <!-- main -->
<script type="text/javascript">
    $(function () {
        $('.gl-item').hover(function () {
            $(this).find('.divTitulosPost:first').hide()
        }, function () {
            $(this).find('.divTitulosPost:first').show();
        });
    });
</script>