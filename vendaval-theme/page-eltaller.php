<?php
/*
Template Name: El Taller
*/
get_header(); ?>

<main id="primary" class="site-main taller-page">

    <!-- Hero Section -->
    <div class="contacto-hero">
        <div class="contacto-hero-bg">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/portadas/el_taller.jpg" alt="Hero El Taller">
        </div>
        <div class="container" style="position: relative; height: 100%; display: flex; align-items: center; z-index: 2;">
            <div class="contacto-hero-text">
                <h2 style="max-width: 900px; text-transform: none;">Diseñar y producir estampas<br>es tomar decisiones sobre<br>materia, técnica y sentido.</h2>
            </div>
        </div>
    </div>

    <!-- Intro Section -->
    <section class="taller-intro container section-margin">
        <div class="intro-grid">
            <div class="intro-left">
                <h2 class="text-subtitle" style="max-width: 300px;">Estampá con nosotras.</h2>
            </div>
            <div class="intro-right text-body-small">
                <p>Acompañamos procesos donde el resultado importa tanto como el cómo se llega a él.</p>
                <p>Trabajamos con marcas, estudios y proyectos que necesitan desarrollar piezas con identidad, no solo resolver una producción.</p>
                <p>Diseñamos, adaptamos y producimos estampas entendiendo cada proyecto como un sistema: material, uso, escala y lenguaje.</p>
            </div>
        </div>
    </section>

    <div class="full-width-divider"></div>

    <!-- Servicios Section -->
    <section class="taller-servicios container section-padding">
        <div class="servicios-grid">
            
            <div class="servicio-col">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/figma_assets/699e64a65544f1bbeb17117fd720179b6e70107a.svg" alt="Icon" class="servicio-icon">
                <h3 class="text-body" style="max-width: 250px;">Producción para marcas y estudios</h3>
                <p class="text-body-small">Desarrollamos piezas para proyectos que requieren coherencia estética, calidad técnica y resolución.</p>
                <ul class="text-body-small">
                    <li>Series cortas y medianas</li>
                    <li>Cápsulas textiles</li>
                    <li>Aplicaciones en producto</li>
                    <li>Desarrollo de estampas</li>
                </ul>
                <a href="/contacto" class="link-arrow text-small" style="color: var(--text-secondary);">Quiero consultar! <span class="arrow-icon">→</span></a>
            </div>

            <div class="servicio-col">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/figma_assets/699e64a65544f1bbeb17117fd720179b6e70107a.svg" alt="Icon" class="servicio-icon">
                <h3 class="text-body" style="max-width: 250px;">Serigrafía en vivo</h3>
                <p class="text-body-small">Acompañamos el diseño desde la idea hasta su aplicación para eventos y activaciones.</p>
                <ul class="text-body-small">
                    <li>Activaciones para marcas y lanzamientos</li>
                    <li>Jornadas en cafés, bares y espacios gastronómicos</li>
                    <li>Experiencias para equipos y coworks</li>
                    <li>Actividades para escuelas</li>
                </ul>
                <a href="/contacto" class="link-arrow text-small" style="color: var(--text-secondary);">Quiero consultar! <span class="arrow-icon">→</span></a>
            </div>

            <div class="servicio-col">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/figma_assets/699e64a65544f1bbeb17117fd720179b6e70107a.svg" alt="Icon" class="servicio-icon">
                <h3 class="text-body" style="max-width: 250px;">Proyectos especiales</h3>
                <p class="text-body-small">Cuando el proyecto lo pide, ampliamos el rol.</p>
                <ul class="text-body-small">
                    <li>colaboraciones con artistas</li>
                    <li>cruces entre disciplinas</li>
                </ul>
                <a href="/contacto" class="link-arrow text-small" style="color: var(--text-secondary);">Quiero consultar! <span class="arrow-icon">→</span></a>
            </div>

        </div>
    </section>

    <div class="full-width-divider"></div>

    <!-- Alquiler Section -->
    <section class="taller-alquiler container section-padding">
        <h3 class="text-subtitle" style="margin-bottom: var(--spacing-sm);">;) ¿Sabías qué podés alquilar el taller?</h3>
        <p class="text-body">Nuestro taller en la zona de Parque Saavedra, está disponible para que puedas alquilarlo y usar todas las instalaciones para que puedas estampar.<br>Disponible si sos ex alumno o “Familia Vendaval”.</p>
        <a href="/contacto" class="link-arrow text-small" style="color: var(--text-secondary); margin-top: var(--spacing-md); display: inline-flex;">Quiero consultar! <span class="arrow-icon">→</span></a>
    </section>

    <div class="full-width-divider"></div>

    <!-- CTA Section -->
    <section class="taller-cta container section-padding" style="padding-bottom: 0;">
        <h3 class="text-subtitle" style="font-weight: 400;">Si tenés un proyecto, podemos trabajarlo juntxs. <a href="/contacto" class="link-underline" style="text-decoration: underline;">Escribinos acá!</a></h3>
    </section>

</main>

<?php get_footer(); ?>
