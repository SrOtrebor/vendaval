<?php
/**
 * Archive template for Proyectos
 */
get_header(); ?>

<main id="primary" class="site-main proyectos-page" style="padding-top: var(--header-height);">
    
    <div class="container section-margin">
        <h1 class="text-subtitle" style="margin-bottom: var(--spacing-xl);">Conocé nuestros proyectos</h1>
        
        <div class="otros-proyectos-grid" style="margin-bottom: var(--spacing-xl);">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    ?>
                    <div class="otro-proyecto-card">
                        <a href="<?php the_permalink(); ?>" style="display:block;">
                            <?php 
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'large', array( 'alt' => get_the_title() ) );
                            } else {
                                // Fallback image if no thumbnail
                                echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/figma_assets/97b8c0670d59184877ac0f85e15897ebb89eb86a.png" alt="' . esc_attr( get_the_title() ) . '">';
                            }
                            ?>
                        </a>
                        <a href="<?php the_permalink(); ?>" class="link-arrow text-body-small" style="margin-top: 15px;">Ver proyecto <span class="arrow-icon">&rarr;</span></a>
                    </div>
                    <?php
                endwhile;
            else :
                echo '<p>No se encontraron proyectos.</p>';
            endif;
            ?>
        </div>

        <!-- Paginación -->
        <div class="proyectos-pagination text-center" style="margin-bottom: var(--spacing-xxl);">
            <?php
            $next_link = get_next_posts_link('Ver más');
            $prev_link = get_previous_posts_link('Anteriores');
            
            if ($prev_link) {
                echo str_replace('<a', '<a class="btn-ver-mas"', $prev_link);
            }
            if ($prev_link && $next_link) {
                echo '<span style="display:inline-block; width: 10px;"></span>';
            }
            if ($next_link) {
                echo str_replace('<a', '<a class="btn-ver-mas"', $next_link);
            }
            ?>
        </div>

    </div>

</main>

<?php get_footer(); ?>
