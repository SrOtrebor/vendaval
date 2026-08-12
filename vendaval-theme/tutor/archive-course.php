<?php
/**
 * Template for displaying courses archive
 *
 * @since 1.0.0
 * @author Themeum
 * @url https://themeum.com
 * @package TutorLMS/Templates
 * @version 1.4.3
 */

get_header();

$course_filter = (bool) tutor_utils()->get_option( 'course_archive_filter', false );
$supported_filters = tutor_utils()->get_option( 'supported_course_filters', array() );

if ( $course_filter && count( $supported_filters ) ) {
    tutor_load_template( 'archive-course-init' );
    return;
}
?>

<main id="primary" class="site-main">
    <div class="container section-margin">
        
        <!-- Header Section -->
        <div class="formacion-header">
            <div class="formacion-header-left">
                <div class="formacion-label">Formación</div>
                <h1>De la primera estampa a tu propio producto.</h1>
            </div>
            <div class="formacion-header-right">
                <p>Nuestros cursos están pensados como un recorrido para aprender serigrafía de verdad :)<br>
                entendiendo la técnica, practicando en la mesa y sumando herramientas a medida que avanzás.<br>
                Podés empezar desde cero o sumarte en la etapa que necesites.</p>
                
                <ul class="formacion-header-list">
                    <li>Introducción <span style="margin: 0 4px;">&rarr;</span> La base</li>
                    <li>Registros <span style="margin: 0 4px;">&rarr;</span> Precisión a varias tintas</li>
                    <li>Tintas especiales <span style="margin: 0 4px;">&rarr;</span> Más recursos para estampar</li>
                    <li>Personalizado <span style="margin: 0 4px;">&rarr;</span> Tu idea convertida en producto</li>
                </ul>
            </div>
        </div>

        <!-- Title before grid -->
        <h2 class="formacion-title">Serigrafía se aprende haciendo.</h2>

        <!-- Grid of Courses -->
        <div class="formacion-grid tutor-courses-wrap">
            
            <?php
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();
                    tutor_load_template( 'loop.course' );
                }
            } else {
                tutor_load_template( 'loop.no-course-found' );
            }
            ?>

        </div>

        <!-- Bottom Text -->
        <div class="formacion-bottom">
            <p>Cada persona llega al taller en un momento distinto.<br>
            Si no sabés qué curso es para vos,<br>
            escribinos y lo vemos juntos ^_^</p>
        </div>

    </div>
</main>

<?php get_footer(); ?>
