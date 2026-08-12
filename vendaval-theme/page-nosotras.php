<?php
/*
Template Name: Nosotras
*/
get_header(); ?>

<main id="primary" class="site-main">
    <div class="nosotras-container" style="max-width: 1000px; margin: 0 auto; padding: var(--spacing-xl) var(--spacing-md);">
        
        <!-- Mobile Top Hand Logo -->
        <div class="nosotras-mobile-deco nosotras-mobile-hand">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/figma_assets/cecb6131bbbcf5a700cd85556d2cb22ea33fed09.svg" alt="Mano Logo" style="width: 120px; height: auto; object-fit: contain;">
        </div>

        <!-- Header Section -->
        <div class="nosotras-intro text-center" style="margin-bottom: var(--spacing-xxl);">
            <h1 class="text-body" style="margin-bottom: var(--spacing-lg);">
                Somos Caro y Gise y trabajamos juntas desde 2018.<br>
                Vendaval nace del encuentro entre dos formas de pensar el trabajo que se complementan.
            </h1>
            
            <!-- Desktop/Tablet V-Stamp -->
            <div class="nosotras-v-stamp desktop-v-stamp">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/figma_assets/c7088be97b9617007ba2d71479f4c796a4871e17.png" alt="Sello V" style="width: 48px; height: 48px; object-fit: contain;">
            </div>

            <!-- Mobile V-Stamps -->
            <div class="nosotras-mobile-deco nosotras-mobile-v-stamps">
                <div class="v-left">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/figma_assets/c7088be97b9617007ba2d71479f4c796a4871e17.png" alt="Sello V" style="width: 48px; height: 48px;">
                </div>
                <div class="v-right">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/figma_assets/c7088be97b9617007ba2d71479f4c796a4871e17.png" alt="Sello V" style="width: 48px; height: 48px; margin-bottom: 5px;">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/figma_assets/heart_placeholder.svg" alt="Corazon" style="width: 32px; height: auto;">
                </div>
            </div>
        </div>

        <!-- Illustrations Grid -->
        <div class="nosotras-grid">
            
            <div class="nosotras-card text-center">
                <div class="hover-illustration-wrapper">
                    <!-- IMAGEN DE GISE (Ilustración) -->
                    <img class="illus-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/figma_assets/52360985688ea46afe4dd7e6da1526e5fad87566.png" alt="Gise">
                    <!-- FOTO REAL DE GISE (Reemplazar el atributo src por la URL de la foto) -->
                    <img class="photo-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/figma_assets/photo-placeholder.png" alt="Gise Foto Real">
                </div>
                <p class="text-body-small">
                    Gise, es diseñadora textil y está enfocada en bajar las ideas a la realidad: pensar la técnica, los materiales y cada detalle que hace que un proyecto funcione.
                </p>
            </div>
            
            <div class="nosotras-card text-center">
                <div class="hover-illustration-wrapper">
                    <!-- IMAGEN DE CARO (Ilustración) -->
                    <img class="illus-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/figma_assets/5f3686a7c3679d5281be27284f499a5e9395b0f0.png" alt="Caro">
                    <!-- FOTO REAL DE CARO (Reemplazar el atributo src por la URL de la foto) -->
                    <img class="photo-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/figma_assets/photo-placeholder.png" alt="Caro Foto Real">
                </div>
                <p class="text-body-small">
                    Caro estudió artes visuales y tiene una mirada muy creativa: propone, activa rápido y encuentra caminos para que las ideas tomen forma.
                </p>
            </div>

        </div>

    </div>

    <!-- Bottom Text Section -->
    <div class="nosotras-bottom-section">
        <div class="container nosotras-bottom-text" style="max-width: 800px; margin: 0 auto;">
            <p>
                Compartimos una misma filosofía: trabajar con responsabilidad, <strong>cuidar los procesos</strong> y buscar siempre la mejor manera de hacer cada cosa.
            </p>
            <p>
                Nos gusta pensar los proyectos, encontrar soluciones y mantener un <strong>vínculo cercano</strong> con cada persona que pasa por el taller.
            </p>
            <p>
                Creemos que el buen trabajo también se construye en colaboración, por eso <strong>trabajamos en red</strong> con otros talleres que forman parte de nuestro equipo.
            </p>
            <p>
                ;)
            </p>
        </div>
    </div>
</main>

<?php get_footer(); ?>
