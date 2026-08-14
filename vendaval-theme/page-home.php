<?php
/* Template Name: Home */
get_header();
?>

<main id="primary" class="site-main">

    <!-- HERO SECTION -->
    <section class="hero">
        <video class="hero-bg hero-bg-desktop" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/videos/Banner_vendaval_desktop.mp4" autoplay loop muted playsinline></video>
        <video class="hero-bg hero-bg-mobile" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/videos/Banner_vendaval_mobile.mp4" autoplay loop muted playsinline></video>
        <img class="hero-stamp" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/figma_assets/9ec2f7c73909c649532d8961e13dab2928bab720.png" alt="Taller Vendaval Stamp">
        <div class="hero-content container">
            <h1 class="text-title">Oficio y Corazón &lt;3<br>Serigrafía hecha con tiempo,<br>experiencia y cuidado.</h1>
        </div>
    </section>
    
    <div class="full-width-divider"></div>

    <div class="container">
        
        <!-- INTRO TEXT -->
        <div class="intro-section section-margin">
            <h2 class="text-subtitle" style="max-width: 700px; margin-bottom: var(--spacing-xxl);">
                Creemos en el oficio.<br>
                En aprender haciendo, en compartir lo que sabemos y en trabajar cada proyecto con dedicación.
            </h2>
            <a href="/nosotras" class="link-arrow text-small">conocenos! <span class="arrow-icon">&rarr;</span></a>
        </div>
    </div>
    
    <div class="full-width-divider"></div>

    <div class="container">
        <!-- INFO GRID (Producción / Formación) -->
        <div class="two-col-grid section-margin">
            <!-- Producción -->
            <div class="info-card">
                <a href="<?php echo esc_url(home_url('/el-taller/')); ?>" style="display:block; text-decoration:none;">
                    <div class="image-wrapper">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/portadas/producción.jpg" alt="Producción">
                        <div class="image-overlay">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/figma_assets/cad94847cd0711f9a17dd413f021e31ca2bacbeb.svg" alt="Star" style="width: 80px; height: 80px; flex-shrink: 0; object-fit: contain; margin-bottom: 10px;">
                            <span>conocé más</span>
                        </div>
                    </div>
                </a>

                <div class="info-card-text">
                    <h3 class="text-small">Producción</h3>
                    <p class="text-body-small">Acompañamos marcas, agencias y proyectos que necesitan más que ejecución: criterio técnico, diálogo y decisiones compartidas. Estampamos y diseñamos piezas con la serigrafía como corazón, con intención y método para que cada proyecto sea único y memorable.</p>
                </div>
            </div>

            <!-- Formación -->
            <div class="info-card">
                <a href="<?php echo esc_url(home_url('/formacion/')); ?>" style="display:block; text-decoration:none;">
                    <div class="image-wrapper">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/portadas/formacion.jpg" alt="Formación">
                        <div class="image-overlay">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/figma_assets/cad94847cd0711f9a17dd413f021e31ca2bacbeb.svg" alt="Star" style="width: 80px; height: 80px; flex-shrink: 0; object-fit: contain; margin-bottom: 10px;">
                            <span>conocé más</span>
                        </div>
                    </div>
                </a>
                <div class="info-card-text">
                    <h3 class="text-small">Formación</h3>
                    <p class="text-body-small">Formamos desde el oficio, no desde la receta.<br>Aprender en Vendaval es comprender el proceso, no solo la técnica.<br>Nos encanta poder transmitir el amor que tenemos por lo que hacemos y acompañarte en el desarrollo de tu propio proyecto.</p>
                </div>
            </div>
        </div>
    </div>

        <!-- INFINITE CAROUSEL -->
        <div class="marquee-section section-margin">
            <div class="marquee-track">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/carousel/carousel_1.jpg" alt="Carousel 1">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/carousel/carousel_4.jpg" alt="Carousel 2">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/carousel/carousel_6.jpg" alt="Carousel 3">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/carousel/carousel_1.jpg" alt="Carousel 1">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/carousel/carousel_4.jpg" alt="Carousel 2">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/carousel/carousel_6.jpg" alt="Carousel 3">
            </div>
        </div>

    <!-- ENCUENTROS SECTION -->
    <div class="container section-margin">
        <div class="encuentros-grid">
            <div class="encuentros-header" style="display: flex; align-items: center; gap: 20px;">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/figma_assets/c7088be97b9617007ba2d71479f4c796a4871e17.png" alt="Icono" style="width: 64px; height: 64px; object-fit: contain;">
                <h2 class="text-body" style="margin: 0; font-size: 28px; line-height: 1.1;">Próximos encuentros<br>en el taller</h2>
            </div>
            <div class="encuentros-list">
                <div class="encuentro-item">
                    <h3 class="date">23.03</h3>
                    <p class="text-body-small">Taller inicial de estampado</p>
                </div>
                <div class="encuentro-item">
                    <h3 class="date">25.03</h3>
                    <p class="text-body-small">Serigrafía nivel 2</p>
                </div>
                <div class="encuentro-item">
                    <h3 class="date">03.04</h3>
                    <p class="text-body-small">Estampas para Serigrafiar x Vero Escalante</p>
                </div>
                <div class="encuentros-link">
                    <a href="/encuentros" class="link-arrow text-small">quiero saber más <span class="arrow-icon">&rarr;</span></a>
                </div>
            </div>
        </div>
    </div>

    <!-- CONTACT BANNER -->
    <div class="contact-banner-wrapper">
        <div class="container">
            <div class="contact-banner">
                <h2 class="text-subtitle">Conectá con nosotras y exploremos tu proyecto!</h2>
                <a href="/contacto" class="link-arrow text-small">conocenos! <span class="arrow-icon">&rarr;</span></a>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>
