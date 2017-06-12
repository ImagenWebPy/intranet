<?php $helper = new Helper(); ?>
<div id="main">
    <?= $helper->mostrarMobileLogo(); ?>
    <div id="header">
        <header>
            <h1 class="sourcePro"><?= $this->postContent['titulo']; ?></h1>
        </header>
    </div>
    <div class="section">
        <section>
            <div class="container">
                <?php if ($this->postArchivos['tipo'] == 'imagen'): ?>
                    <div id="carousel-single-post" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <?php foreach ($this->postArchivos['imagenes'] as $item): ?>
                                <div class="item <?= ($item['principal'] == 1) ? 'active' : ''; ?>">
                                    <img src="<?= URL; ?>public/archivos/<?= $item['imagen']; ?>" alt="slide">
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <?php
                            for ($i = 0; $i <= (count($this->postArchivos['imagenes']) - 1); $i++):
                                ?>
                                <li data-target="#carousel-single-post" data-slide-to="<?= $i; ?>"></li>
                            <?php endfor; ?>
                        </ol>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-single-post" data-slide="prev">
                            <span></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-single-post" data-slide="next">
                            <span></span>
                        </a>
                    </div> <!-- carousel -->
                <?php else: ?>
                    <?php
                    $imgVideo = '';
                    foreach ($this->postArchivos['imagenes'] as $item) {
                        if ($item['principal'] == 1) {
                            $imgVideo = utf8_encode($item['imagen']);
                        }
                    }
                    ?>
                    <div class="col-md-12">
                        <div class="glp-video">
                            <video class="video-js vjs-default-skin vjs-mental-skin" width="100%" height="100%" controls preload="none"
                                   poster="<?= URL; ?>public/archivos/<?= $imgVideo ?>"
                                   data-setup="{}">
                                       <?php foreach ($this->postArchivos['video'] as $item): ?>
                                    <source src="<?= URL; ?>/public/archivos/<?= utf8_encode($item['archivo']); ?>" type="<?= $item['type']; ?>" />
                                <?php endforeach; ?>
                            </video>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    </div> <!-- section -->
    <div class="section single-post">
        <section>
            <div class="container container-800">
                <article>
                    <h1 class="sp-title sourcePro"><?= $this->postContent['titulo']; ?></h1>
                    <p class="sp-info SourceSansPro-Regular">Publicado el <time datetime="<?= $this->postContent['fecha']; ?>"><?= $this->postContent['fecha']; ?></time></p>
                    <div class="sp-content SourceSansPro-Regular">
                        <?= $this->postContent['contenido']; ?>
                    </div>
                    <div class="sp-footer">
                        <footer>
                            <div class="row">
                                <div class="col col-sm-8">
                                    <span class="sp-tags-title Oswald-Regular">TAGS</span><span class="sp-tags Oswald"><?= $this->postContent['tags']; ?></span>
                                </div>
                            </div>
                        </footer>
                    </div>
                </article>
            </div> <!-- container -->
        </section>
    </div> <!-- section -->
    <div id="footer" class="ft-single-post">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 text-center">
                        <a href="<?= URL; ?>" class="ft-back2blog">Volver</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div> <!-- main -->