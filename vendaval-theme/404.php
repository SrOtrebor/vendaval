<?php
defined( 'ABSPATH' ) || exit;
get_header(); ?>

<main class="site-main" style="padding-top: var(--header-height);">
    <div class="container section-padding" style="text-align: center; min-height: 60vh; display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <h1 class="text-title">404</h1>
        <p class="text-subtitle" style="margin: 20px 0;">Página no encontrada</p>
        <p class="text-body-small" style="margin-bottom: 30px; max-width: 500px;">La página que buscás no existe o fue movida. Podés volver al inicio y seguir navegando.</p>
        <a href="<?php echo esc_url( home_url('/') ); ?>" class="link-arrow text-small">Volver al inicio <span class="arrow-icon">&rarr;</span></a>
    </div>
</main>

<?php get_footer(); ?>
