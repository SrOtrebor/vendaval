<?php
/**
 * Single template for Proyectos
 */
get_header(); 

// Include Swiper JS & CSS
wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);

// Fetch ACF fields
$hero_desktop = get_field('proyecto_hero_desktop');
$hero_tablet = get_field('proyecto_hero_tablet');

$f1_izq = get_field('proyecto_foto_1_izq');
$f1_der = get_field('proyecto_foto_1_der');

$f2 = get_field('proyecto_foto_2');
$f2_pos = get_field('proyecto_f2_posicion') ?: 'center';

$f3_izq = get_field('proyecto_foto_3_izq');
$f3_der = get_field('proyecto_foto_3_der');

$f4 = get_field('proyecto_foto_4');
$f4_pos = get_field('proyecto_f4_posicion') ?: 'center';

$f5_izq = get_field('proyecto_foto_5_izq');
$f5_der = get_field('proyecto_foto_5_der');

$f6 = get_field('proyecto_foto_6');
$f6_pos = get_field('proyecto_f6_posicion') ?: 'center';

$tags = get_field('proyecto_tags');
$instagram_link = get_post_meta(get_the_ID(), 'proyecto_instagram', true);
?>

<main id="primary" class="site-main proyectos-page">
    <div class="container section-margin">
        <div class="proyecto-header-grid">
            <div class="proyecto-title-col">
                <span class="text-body-small" style="display:block; margin-bottom: 20px;">
                    <a href="/proyectos" class="link-arrow-left text-body-small">
                        <span class="arrow-icon">&larr;</span> Proyecto
                    </a>
                </span>
                <h1 class="text-title"><?php echo esc_html( get_the_title() ); ?></h1>
            </div>
            <div class="proyecto-desc-col">
                <div class="text-body-small" style="margin-bottom: 30px;">
                    <?php the_content(); ?>
                </div>
                
                <?php if ($tags): ?>
                <div class="proyecto-metadata text-body-small" style="color: var(--text-secondary); line-height: 1.5; margin-bottom: 30px;">
                    <?php echo nl2br(esc_html($tags)); ?>
                </div>
                <?php endif; ?>

                <?php if ($instagram_link): ?>
                <div>
                    <a href="<?php echo esc_url($instagram_link); ?>" target="_blank" rel="noopener noreferrer" class="link-arrow text-body-small">Ver más en Instagram <span class="arrow-icon">&rarr;</span></a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- The Images Grid -->
    <div class="container section-padding">
        <div class="proyecto-image-grid">
            
            <!-- Hero -->
            <?php if ($hero_desktop): ?>
            <picture style="display: block;">
                <?php if ($hero_tablet): ?>
                <source media="(max-width: 991px)" srcset="<?php echo esc_url($hero_tablet); ?>">
                <?php endif; ?>
                <img src="<?php echo esc_url($hero_desktop); ?>" alt="Hero <?php the_title_attribute(); ?>" class="full-img">
            </picture>
            <?php endif; ?>
            
            <!-- Fila 1: 50/50 -->
            <?php if ($f1_izq || $f1_der): ?>
            <div class="half-img-row">
                <?php if ($f1_izq): ?>
                    <img src="<?php echo esc_url($f1_izq); ?>" alt="Foto 1 Izquierda">
                <?php endif; ?>
                <?php if ($f1_der): ?>
                    <img src="<?php echo esc_url($f1_der); ?>" alt="Foto 1 Derecha" class="hide-on-mobile">
                <?php endif; ?>
            </div>
            <?php endif; ?>

            <!-- Fila 2: Todo -->
            <?php if ($f2): ?>
            <img src="<?php echo esc_url($f2); ?>" alt="Fila 2 Todo" class="full-img" style="object-position: <?php echo esc_attr($f2_pos); ?>;">
            <?php endif; ?>

            <!-- Fila 3: 50/50 -->
            <?php if ($f3_izq || $f3_der): ?>
            <div class="half-img-row">
                <?php if ($f3_izq): ?>
                    <img src="<?php echo esc_url($f3_izq); ?>" alt="Foto 3 Izquierda">
                <?php endif; ?>
                <?php if ($f3_der): ?>
                    <img src="<?php echo esc_url($f3_der); ?>" alt="Foto 3 Derecha" class="hide-on-mobile">
                <?php endif; ?>
            </div>
            <?php endif; ?>

            <!-- Fila 4: Todo -->
            <?php if ($f4): ?>
            <img src="<?php echo esc_url($f4); ?>" alt="Fila 4 Todo" class="full-img" style="object-position: <?php echo esc_attr($f4_pos); ?>;">
            <?php endif; ?>
            
            <!-- Fila 5: 50/50 -->
            <?php if ($f5_izq || $f5_der): ?>
            <div class="half-img-row">
                <?php if ($f5_izq): ?>
                    <img src="<?php echo esc_url($f5_izq); ?>" alt="Foto 5 Izquierda">
                <?php endif; ?>
                <?php if ($f5_der): ?>
                    <img src="<?php echo esc_url($f5_der); ?>" alt="Foto 5 Derecha" class="hide-on-mobile">
                <?php endif; ?>
            </div>
            <?php endif; ?>

            <!-- Fila 6: Todo -->
            <?php if ($f6): ?>
            <img src="<?php echo esc_url($f6); ?>" alt="Fila 6 Todo" class="full-img" style="object-position: <?php echo esc_attr($f6_pos); ?>;">
            <?php endif; ?>

        </div>
    </div>

    <div class="full-width-divider"></div>

    <!-- Otros Proyectos -->
    <div class="container section-padding">
        <h2 class="text-subtitle" style="margin-bottom: var(--spacing-xl);">Otros Proyectos</h2>
        <div class="otros-proyectos-grid">
            <?php
            // Query 3 recent projects
            $args = array(
                'post_type'      => 'proyectos',
                'posts_per_page' => 3,
                'post__not_in'   => array( get_the_ID() ), // Exclude current
                'orderby'        => 'rand'
            );
            $otros_query = new WP_Query($args);

            if ( $otros_query->have_posts() ) :
                while ( $otros_query->have_posts() ) : $otros_query->the_post();
                    // Fetch thumbnail or fallback
                    $thumb = get_field('proyecto_hero_desktop') ?: get_template_directory_uri() . '/assets/figma_assets/97b8c0670d59184877ac0f85e15897ebb89eb86a.png';
                    ?>
                    <div class="otro-proyecto-card">
                        <a href="<?php the_permalink(); ?>" style="display:block;">
                            <img src="<?php echo esc_url($thumb); ?>" alt="<?php the_title_attribute(); ?>">
                        </a>
                        <a href="<?php the_permalink(); ?>" class="link-arrow text-body-small" style="margin-top: 15px;">Ver proyecto <span class="arrow-icon">&rarr;</span></a>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                // Fallback static if no projects exist
                ?>
                <!-- Proyecto 1 -->
                <div class="otro-proyecto-card">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/figma_assets/97b8c0670d59184877ac0f85e15897ebb89eb86a.png" alt="Otros Proyectos Izquierda">
                    <a href="#" class="link-arrow text-body-small" style="margin-top: 15px;">Ver proyecto <span class="arrow-icon">&rarr;</span></a>
                </div>
                <!-- Proyecto 2 -->
                <div class="otro-proyecto-card">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/figma_assets/ad08668cc1de157129a5f9aa09d4628d866ddc64.png" alt="Otros Proyectos Medio">
                    <a href="#" class="link-arrow text-body-small" style="margin-top: 15px;">Ver proyecto <span class="arrow-icon">&rarr;</span></a>
                </div>
                <!-- Proyecto 3 -->
                <div class="otro-proyecto-card">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/figma_assets/f7a8d3463ebb5ada54d9ccc5ab9d9ee2021bda74.png" alt="Otros Proyectos Derecha">
                    <a href="#" class="link-arrow text-body-small" style="margin-top: 15px;">Ver proyecto <span class="arrow-icon">&rarr;</span></a>
                </div>
                <?php
            endif;
            ?>
        </div>
    </div>

    <!-- Contact CTA -->
    <div class="container section-padding">
        <div class="border-top border-bottom" style="padding: var(--spacing-lg) 0;">
            <p class="text-subtitle">Connect with us to explore your project's potential.</p>
        </div>
    </div>
</main>

<style>
/* Swiper fixes for WP Gallery */
.swiper-button-next, .swiper-button-prev { color: var(--color-primary, #000); }
.swiper-pagination-bullet-active { background: var(--color-primary, #000); }
.gallery-item img { border: none !important; width: 100%; height: auto; display: block; }
</style>

<script>
document.addEventListener("DOMContentLoaded", function() {
    if (typeof Swiper !== 'undefined') {
        var galleries = document.querySelectorAll(".gallery");
        galleries.forEach(function(gallery, index) {
            gallery.classList.add("swiper", "mySwiper-" + index);
            gallery.style.overflow = "hidden";
            gallery.style.position = "relative";
            gallery.style.width = "100%";
            gallery.style.paddingBottom = "40px"; // for pagination
            
            var wrapper = document.createElement("div");
            wrapper.className = "swiper-wrapper";
            
            var items = gallery.querySelectorAll(".gallery-item");
            items.forEach(function(item) {
                item.classList.add("swiper-slide");
                item.style.width = "auto";
                item.style.margin = "0"; 
                item.style.display = "flex";
                item.style.alignItems = "center";
                
                var link = item.querySelector("a");
                if (link) {
                    link.addEventListener("click", function(e) {
                        e.preventDefault();
                    });
                    link.style.cursor = "default";
                }
                
                wrapper.appendChild(item);
            });
            
            gallery.innerHTML = '';
            gallery.appendChild(wrapper);
            
            var nextBtn = document.createElement("div");
            nextBtn.className = "swiper-button-next";
            var prevBtn = document.createElement("div");
            prevBtn.className = "swiper-button-prev";
            gallery.appendChild(nextBtn);
            gallery.appendChild(prevBtn);
            
            var pagination = document.createElement("div");
            pagination.className = "swiper-pagination";
            gallery.appendChild(pagination);
            
            new Swiper(".mySwiper-" + index, {
                slidesPerView: 1,
                spaceBetween: 20,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                breakpoints: {
                    768: { slidesPerView: 2, spaceBetween: 30 },
                    1024: { slidesPerView: 3, spaceBetween: 40 },
                },
            });
        });
    }
});
</script>

<?php get_footer(); ?>
