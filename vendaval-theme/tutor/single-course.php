<?php
/**
 * Template for displaying single course
 *
 * @since 1.0.0
 * @author Themeum
 * @url https://themeum.com
 * @package TutorLMS/Templates
 * @version 1.4.3
 */

get_header(); ?>

<main id="primary" class="site-main">
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="container" style="padding-top: var(--spacing-xl);">
        
        <div class="breadcrumb">
            <a href="<?php echo esc_url(home_url('/')); ?>">Home</a> &rarr; <a href="<?php echo esc_url(get_post_type_archive_link('courses')); ?>">Formación</a> &rarr; <?php the_title(); ?>
        </div>

        <div class="curso-top">
            <div class="curso-image">
                <?php
                // Obtener imagen (ACF, destacada o fallback)
                $icono = get_field('curso_icono', get_the_ID());
                if ($icono) {
                    echo '<img src="' . esc_url($icono) . '" alt="' . the_title_attribute(array('echo' => false)) . '">';
                } elseif (has_post_thumbnail()) {
                    the_post_thumbnail('full');
                } else {
                    echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/figma_assets/5b99b820592c1a2eceb08a83cb6898964e9b2804.png" alt="' . the_title_attribute(array('echo' => false)) . '">';
                }
                ?>
            </div>
            <div class="curso-buy tutor-single-course-segment tutor-course-buy-segment">
                <h1><?php the_title(); ?></h1>
                
                <?php
                $course_id = get_the_ID();
                $is_purchasable = tutor_utils()->is_course_purchasable();
                $product_id = tutor_utils()->get_course_product_id($course_id);
                
                if ( $is_purchasable && $product_id ) {
                    // Precio WooCommerce
                    $product = wc_get_product( $product_id );
                    if ( $product ) {
                        echo '<div class="curso-price">' . $product->get_price_html() . '</div>';
                    }
                    
                    // Agregar al carrito (formulario de WooCommerce / Tutor)
                    // Lo envolvemos en div adicional si necesitamos ajustar estilos
                    echo '<div class="curso-add-to-cart-wrap">';
                    tutor_load_template( 'single.course.add-to-cart-woocommerce' );
                    echo '</div>';
                } else {
                    echo '<div class="curso-price">Gratis</div>';
                    tutor_course_enroll_button();
                }
                ?>
            </div>
        </div>

        <div class="curso-details">
            <?php the_content(); ?>
        </div>

    </div>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
