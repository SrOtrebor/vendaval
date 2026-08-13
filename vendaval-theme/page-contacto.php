<?php
/*
Template Name: Contacto
*/
get_header(); ?>

<main id="primary" class="site-main">
    
    <div class="contacto-hero">
        <div class="contacto-hero-bg">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/portadas/contacto.jpg" alt="Hero Contacto">
        </div>
        <div class="container" style="position: relative; height: 100%; display: flex; align-items: center; z-index: 2;">
            <div class="contacto-hero-text">
                <h2>Oficio y Corazón &lt;3<br>Serigrafía hecha con tiempo,<br>experiencia y cuidado.</h2>
            </div>
        </div>
        <img class="contacto-badge" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/figma_assets/9ec2f7c73909c649532d8961e13dab2928bab720.png" alt="Badge Vendaval">
    </div>

    <div class="container contacto-content">
        <div class="contacto-grid">
            <div class="contacto-info">
                <span class="contacto-label">Contacto</span>
                <h1>¡Hola!</h1>
                <p><strong>¡Envianos tu consulta y empecemos a desarrollar tu proyecto!</strong></p>
                <p>Si tenés dudas sobre la técnica, sus limitaciones y posibilidades, papeles disponibles e inspiración te recomendamos visitar nuestras <a href="#">FAQs</a>.</p>
                <p>Navegá nuestro <a href="#">instagram</a> para ver otros proyectos que realizamos.</p>
                <br>
                <p>Para solicitar un presupuesto recordá:</p>
                <p><strong>Si ya tenés el diseño:</strong><br>Envianos un archivo convertido a curvas (original, sin mockups) indicando especificaciones del trabajo. Es fundamental para poder armarte un presupuesto.<br><a href="#">Cómo enviar tu diseño</a></p>
                <p><strong>Si no tenés el diseño:</strong><br>¡Nosotros lo desarrollamos! Podes enviarnos algunas imágenes de referencia de lo que necesitás hacer y contanos lo que estás buscando.</p>
                <br>
                <p>Ruiz Huidobro 2705, Saavedra<br>
                <a href="mailto:hola@tallervendaval.com">hola@tallervendaval.com</a><br>
                <a href="tel:+5491138434630">+54 9 11 3843-4630</a></p>
            </div>

            <div class="contacto-form">
                <?php 
                // Cargar automáticamente el primer formulario de Contact Form 7 que exista
                $cf7_forms = get_posts( array(
                    'post_type'      => 'wpcf7_contact_form',
                    'posts_per_page' => 1
                ) );
                
                if ( $cf7_forms ) {
                    $form_id = $cf7_forms[0]->ID;
                    echo do_shortcode( '[contact-form-7 id="' . $form_id . '"]' );
                } else {
                    echo '<p style="color:red;">Por favor, crea al menos un formulario en Contact Form 7.</p>';
                }
                ?>
            </div>
        </div>
    </div>
</main>




<?php get_footer(); ?>
