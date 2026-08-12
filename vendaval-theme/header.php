<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <header id="masthead" class="site-header">
        <div class="container navbar">
            <div class="site-branding">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo.png" alt="Vendaval" style="height: 30px; width: auto; object-fit: contain;">
                </a>
            </div>
            <div class="header-right">
                <button id="mobile-menu-btn" class="mobile-menu-button text-small" style="background:none; border:none; padding:0;">Menú</button>
                <nav id="site-navigation" class="main-navigation">
                    <?php 
                    if ( has_nav_menu( 'primary-menu' ) ) {
                        wp_nav_menu( array(
                            'theme_location' => 'primary-menu',
                            'menu_id'        => 'primary-menu-ul',
                            'container'      => false,
                            'fallback_cb'    => false,
                            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        ) );
                    } else {
                        ?>
                        <ul>
                            <li><a href="<?php echo esc_url( home_url('/nosotras') ); ?>">Nosotras</a></li>
                            <li><a href="<?php echo esc_url( home_url('/formacion') ); ?>">Formación</a></li>
                            <li><a href="<?php echo esc_url( home_url('/el-taller') ); ?>">El Taller</a></li>
                            <li><a href="<?php echo esc_url( home_url('/proyectos') ); ?>">Proyectos</a></li>
                            <li><a href="<?php echo esc_url( home_url('/tienda') ); ?>">Tienda</a></li>
                            <li><a href="<?php echo esc_url( home_url('/contacto') ); ?>">Contacto</a></li>
                        </ul>
                        <?php
                    }
                    ?>
                </nav>
                <a href="<?php echo esc_url( home_url('/dashboard') ); ?>" class="campus-link">Campus!</a>
            </div>
        </div>
    </header>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var btn = document.getElementById('mobile-menu-btn');
            var nav = document.getElementById('site-navigation');
            if(btn && nav) {
                btn.addEventListener('click', function() {
                    nav.style.right = (nav.style.right === '0px') ? '-100%' : '0px';
                });
            }
        });
    </script>
