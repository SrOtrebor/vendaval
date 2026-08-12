<?php
/**
 * A single course loop
 *
 * @since 1.0.0
 * @author Themeum
 * @url https://themeum.com
 * @package TutorLMS/Templates
 * @version 1.4.3
 */

// Fetch ACF fields
$icono = get_field('curso_icono', get_the_ID());
$modalidad = get_field('curso_modalidad', get_the_ID());
$horario = get_field('curso_horario', get_the_ID());

// Fallbacks
if (!$icono) {
    $icono = get_template_directory_uri() . '/assets/figma_assets/5b99b820592c1a2eceb08a83cb6898964e9b2804.png';
}
if (!$modalidad) {
    $modalidad = 'PRESENCIAL';
}
?>

<div class="course-card">
    <div class="course-card-top">
        <div class="course-label">+ curso +</div>
        <h3><?php the_title(); ?></h3>
        <img src="<?php echo esc_url($icono); ?>" alt="<?php the_title_attribute(); ?>" style="max-height: 80px; width: auto; margin-bottom: 20px;">
        <div class="course-mode"><?php echo esc_html(strtoupper($modalidad)); ?></div>
        <?php if ($horario): ?>
            <div class="course-time"><?php echo esc_html($horario); ?></div>
        <?php endif; ?>
    </div>
    <div class="course-card-bottom">
        <h4><?php the_title(); ?></h4>
        <p><?php echo wp_trim_words(get_the_excerpt(), 25); ?></p>
        <a href="<?php the_permalink(); ?>" class="link-arrow text-small">Ver este curso <span class="arrow-icon">&rarr;</span></a>
    </div>
</div>
