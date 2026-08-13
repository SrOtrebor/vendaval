<?php
/*
Template Name: Tienda Packs Cursos
*/
get_header(); ?>

<main id="primary" class="site-main packs-page" style="padding-top: var(--header-height);">
    <!-- Removing the top margin so breadcrumb goes up closer to navbar -->
    <div class="container" style="padding-top: var(--spacing-sm);">
        
        <!-- Breadcrumbs -->
        <div class="vendaval-breadcrumbs text-body-small" style="margin-bottom: var(--spacing-xl);">
            <a href="<?php echo home_url(); ?>">Home</a> &rarr; 
            <a href="#">Tienda</a> &rarr; 
            <span>Packs para estampar</span>
        </div>

        <!-- Header Grid -->
        <header class="packs-header-grid" style="margin-bottom: var(--spacing-xxl);">
            <div class="packs-title-col">
                <a href="<?php echo home_url('/formacion'); ?>" class="text-body-small link-arrow" style="display:inline-block; margin-bottom: 20px; color: var(--color-black); text-decoration: none;">Formación -</a>
                <h1 class="text-title" style="margin: 0; line-height: 1.1;">Te facilitamos los<br>productos para tu<br>primer serie de<br>estampas</h1>
            </div>
            <div class="packs-text-col">
                <p class="text-body-small" style="font-style: italic; max-width: 400px; margin-top: 15px;">
                    Nuestros cursos están pensados como un recorrido para aprender serigrafía de verdad :)<br>
                    entendiendo la técnica, practicando en la mesa y sumando herramientas a medida que avanzás.<br>
                    Podés empezar desde cero o sumarte en la etapa que necesites.
                </p>
            </div>
        </header>

        <!-- Product Grid -->
        <div class="vendaval-woo-grid">
            <?php
            // Use WooCommerce shortcode to display products from 'packs-cursos' category
            echo do_shortcode('[products category="packs-cursos" columns="3" orderby="date" order="ASC" cache="false"]');
            ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
