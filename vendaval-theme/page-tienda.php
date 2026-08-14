<?php
/*
Template Name: Tienda
*/
get_header(); ?>

<main id="primary" class="site-main" style="padding-top: var(--header-height);">
    <div class="container section-margin">
        <header class="page-header" style="margin-bottom: var(--spacing-lg);">
            <h1 class="text-subtitle">Tienda</h1>
        </header>

        <div class="vendaval-woo-grid">
            <?php echo do_shortcode('[products limit="12" columns="3"]'); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
