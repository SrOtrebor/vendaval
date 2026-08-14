<?php
/**
 * Vendaval Theme functions and definitions
 */

function vendaval_theme_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );

    // Register Navigation Menu
    register_nav_menus( array(
        'primary-menu' => __( 'Menú Principal', 'vendaval' ),
    ) );

    // Add WooCommerce support
    add_theme_support( 'woocommerce' );

    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'vendaval_theme_setup' );

/**
 * Enqueue scripts and styles.
 */
function vendaval_scripts() {
    // Enqueue the main stylesheet
    wp_enqueue_style( 'vendaval-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'vendaval_scripts' );

/**
 * Register Custom Post Type: Proyectos
 */
function vendaval_register_proyectos_cpt() {
    $labels = array(
        'name'                  => _x( 'Proyectos', 'Post Type General Name', 'vendaval' ),
        'singular_name'         => _x( 'Proyecto', 'Post Type Singular Name', 'vendaval' ),
        'menu_name'             => __( 'Proyectos', 'vendaval' ),
        'name_admin_bar'        => __( 'Proyecto', 'vendaval' ),
        'archives'              => __( 'Archivo de Proyectos', 'vendaval' ),
        'all_items'             => __( 'Todos los Proyectos', 'vendaval' ),
        'add_new_item'          => __( 'Añadir Nuevo Proyecto', 'vendaval' ),
        'add_new'               => __( 'Añadir Nuevo', 'vendaval' ),
        'new_item'              => __( 'Nuevo Proyecto', 'vendaval' ),
        'edit_item'             => __( 'Editar Proyecto', 'vendaval' ),
        'update_item'           => __( 'Actualizar Proyecto', 'vendaval' ),
        'view_item'             => __( 'Ver Proyecto', 'vendaval' ),
        'search_items'          => __( 'Buscar Proyecto', 'vendaval' ),
        'not_found'             => __( 'No encontrado', 'vendaval' ),
        'not_found_in_trash'    => __( 'No encontrado en la Papelera', 'vendaval' ),
        'featured_image'        => __( 'Imagen Principal', 'vendaval' ),
        'set_featured_image'    => __( 'Establecer imagen', 'vendaval' ),
    );
    $args = array(
        'label'                 => __( 'Proyecto', 'vendaval' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-portfolio',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true, // Enable block editor
    );
    register_post_type( 'proyectos', $args );
}
add_action( 'init', 'vendaval_register_proyectos_cpt', 0 );

// Load ACF Fields
require_once get_template_directory() . '/acf-proyectos.php';
require_once get_template_directory() . '/acf-integrations.php';

/* ==========================================================================
   SEGURIDAD (Hardening)
   ========================================================================== */

/**
 * Headers de Seguridad HTTP
 */
function vendaval_security_headers() {
    header( 'X-Content-Type-Options: nosniff' );
    header( 'X-Frame-Options: SAMEORIGIN' );
    header( 'Referrer-Policy: strict-origin-when-cross-origin' );
    header( 'Permissions-Policy: geolocation=(), microphone=(), camera=()' );
    header( 'X-XSS-Protection: 1; mode=block' );
}
add_action( 'send_headers', 'vendaval_security_headers' );

/**
 * Desactivar XML-RPC (vector de fuerza bruta)
 */
add_filter( 'xmlrpc_enabled', '__return_false' );

/**
 * Ocultar versión de WordPress
 */
remove_action( 'wp_head', 'wp_generator' );
add_filter( 'the_generator', '__return_empty_string' );

/**
 * Restringir REST API a usuarios autenticados
 * (excepto endpoints necesarios para WooCommerce, Tutor LMS y CF7)
 */
function vendaval_restrict_rest_api( $result ) {
    if ( true === $result || is_wp_error( $result ) ) {
        return $result;
    }
    if ( ! is_user_logged_in() ) {
        $allowed = array( '/wc/', '/tutor/', '/contact-form-7/' );
        $route = isset( $_SERVER['REQUEST_URI'] ) ? sanitize_text_field( $_SERVER['REQUEST_URI'] ) : '';
        foreach ( $allowed as $prefix ) {
            if ( strpos( $route, $prefix ) !== false ) {
                return $result;
            }
        }
        return new WP_Error(
            'rest_not_logged_in',
            __( 'No autorizado.', 'vendaval' ),
            array( 'status' => 401 )
        );
    }
    return $result;
}
add_filter( 'rest_authentication_errors', 'vendaval_restrict_rest_api' );

/**
 * Encolar script de contacto externamente (evitar JS inline)
 */
function vendaval_contacto_scripts() {
    if ( is_page_template( 'page-contacto.php' ) ) {
        wp_enqueue_script( 'vendaval-contacto', get_template_directory_uri() . '/assets/js/contacto.js', array(), '1.0', true );
    }
}
add_action( 'wp_enqueue_scripts', 'vendaval_contacto_scripts' );

/* ==========================================================================
   GEO & SEO (Inteligencia Artificial y Buscadores)
   ========================================================================== */

/**
 * Inyectar Schema Markup (JSON-LD) en el <head>
 * Para Google, ChatGPT, Gemini, etc.
 */
function vendaval_insert_json_ld() {
    $schema = array(
        "@context" => "https://schema.org",
        "@graph" => array(
            // 1. Taller de Serigrafía (LocalBusiness / ProfessionalService)
            array(
                "@type" => array("LocalBusiness", "ProfessionalService"),
                "@id" => esc_url( home_url( '/#taller' ) ),
                "name" => "Taller Vendaval",
                "description" => "Taller independiente de serigrafía en Buenos Aires. Acompañamos marcas, agencias y proyectos con criterio técnico. Estampamos y diseñamos piezas con la serigrafía como corazón.",
                "url" => esc_url( home_url( '/' ) ),
                "logo" => esc_url( get_template_directory_uri() . '/assets/logo.png' ),
                "image" => esc_url( get_template_directory_uri() . '/assets/figma_assets/9518e0be43ad32e108d216e519a03c50e82f3afb.png' ),
                "telephone" => "+54911554069226",
                "email" => "maildecontacto@gmail.com",
                "address" => array(
                    "@type" => "PostalAddress",
                    "streetAddress" => "Ruiz Huidobro 2705",
                    "addressLocality" => "Ciudad Autónoma de Buenos Aires",
                    "postalCode" => "C1429",
                    "addressCountry" => "AR"
                ),
                "geo" => array(
                    "@type" => "GeoCoordinates",
                    "latitude" => -34.5458998,
                    "longitude" => -58.4754546
                ),
                "sameAs" => array(
                    "https://www.instagram.com/taller.vendaval/",
                    "https://www.behance.net/" // Actualizar cuando pasen el link
                ),
                "knowsAbout" => array(
                    "Serigrafía",
                    "Estampado",
                    "Diseño Gráfico",
                    "Producción Textil"
                )
            ),
            // 2. Institución Educativa (Para los cursos)
            array(
                "@type" => "EducationalOrganization",
                "@id" => esc_url( home_url( '/#educacion' ) ),
                "name" => "Formación Taller Vendaval",
                "description" => "Escuela de oficios especializada en serigrafía. Cursos presenciales para aprender desde cero o perfeccionar la técnica.",
                "parentOrganization" => array(
                    "@id" => esc_url( home_url( '/#taller' ) )
                ),
                "url" => esc_url( home_url( '/formacion/' ) )
            )
        )
    );

    echo '<!-- Schema JSON-LD by Vendaval Theme -->' . "\n";
    echo '<script type="application/ld+json">' . "\n";
    echo wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT ) . "\n";
    echo '</script>' . "\n";
}
add_action( 'wp_head', 'vendaval_insert_json_ld' );

/**
 * Excluir categoría "packs-cursos" de la tienda general
 */
function vendaval_exclude_packs_from_shop( $q ) {
    $tax_query = (array) $q->get( 'tax_query' );
    $tax_query[] = array(
           'taxonomy' => 'product_cat',
           'field' => 'slug',
           'terms' => array( 'packs-cursos' ), 
           'operator' => 'NOT IN'
    );
    $q->set( 'tax_query', $tax_query );
}
// add_action('woocommerce_product_query', 'vendaval_exclude_packs_from_shop');

/**
 * Límite de 12 proyectos por página en el archivo de Proyectos
 */
function vendaval_proyectos_archive_limit( $query ) {
    if ( ! is_admin() && $query->is_main_query() && is_post_type_archive( 'proyectos' ) ) {
        $query->set( 'posts_per_page', 12 );
    }
}
add_action( 'pre_get_posts', 'vendaval_proyectos_archive_limit' );

/**
 * WooCommerce Overrides for Packs Cursos Grid
 */
// Remove Add to Cart button from grid
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );

// Remove rating
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );

// Inject custom cuotas and transferencia
add_action( 'woocommerce_after_shop_loop_item_title', 'vendaval_pack_custom_price_meta', 15 );
function vendaval_pack_custom_price_meta() {
    global $product;
    if ( has_term( 'packs-cursos', 'product_cat', $product->get_id() ) ) {
        $price = $product->get_price();
        if ( $price ) {
            $cuota = $price / 2;
            $transfer = $price * 0.90;
            echo '<span class="pack-installments">2 cuotas sin inter�s de ' . wc_price($cuota) . '</span>';
            echo '<span class="pack-transfer">' . wc_price($transfer) . ' con transferencia</span>';
        }
    }
}



/* VENDAVAL: Tutor LMS Multi-course Enrollment Mapping */
add_action( 'woocommerce_order_status_completed', 'vendaval_tutor_multi_enrollment', 10, 1 );
function vendaval_tutor_multi_enrollment( $order_id ) {
    if ( ! function_exists('tutor_utils') ) return;
    $order = wc_get_order( $order_id );
    $user_id = $order->get_user_id();
    if ( ! $user_id ) return;
    
    $product_course_map = [
        89 => [83, 85, 86],
        90 => [84],
        91 => [83, 84, 85, 86],
        92 => [83, 85, 86],
        93 => [87],
        94 => [85],
        95 => [86],
        96 => [83],
        97 => [84],
        98 => [83, 84, 85, 86, 87]
    ];
    
    foreach ( $order->get_items() as $item_id => $item ) {
        $product_id = $item->get_product_id();
        if ( isset( $product_course_map[$product_id] ) ) {
            foreach ( $product_course_map[$product_id] as $course_id ) {
                tutor_utils()->do_enroll( $course_id, $order_id, $user_id );
            }
        }
    }
}
// Traducir textos de Tutor LMS forzosamente a español
add_filter( 'gettext', 'vendaval_translate_tutor_lms', 10, 3 );
function vendaval_translate_tutor_lms( $translated_text, $text, $domain ) {
    if ( 'tutor' === $domain || 'tutor-pro' === $domain ) {
        switch ( $translated_text ) {
            case 'Course Info': return 'Información del Curso';
            case 'About Course': return 'Sobre el Curso';
            case 'What Will I Learn?': return '¿Qué aprenderé?';
            case 'Course Content': return 'Contenido del Curso';
            case 'Curriculum': return 'Plan de Estudios';
            case 'Enroll Now': return 'Inscribirme Ahora';
            case 'Add to cart': return 'Agregar al carrito';
            case 'Instructor': return 'Profesora';
            case 'Requirements': return 'Requisitos';
            case 'Target Audience': return 'Público Objetivo';
            case 'Materials Included': return 'Materiales Incluidos';
            case 'Start Course': return 'Comenzar Curso';
            case 'Continue Course': return 'Continuar Curso';
            case 'Complete Course': return 'Completar Curso';
            case 'Dashboard': return 'Mi Campus';
            case 'Enrolled Courses': return 'Mis Cursos';
            case 'Active Courses': return 'Cursos Activos';
            case 'Completed Courses': return 'Cursos Completados';
        }
    }
    return $translated_text;
}
// Quick translations for Tutor LMS
add_filter('gettext', 'vendaval_translate_tutor', 10, 3);
function vendaval_translate_tutor($translated_text, $text, $domain) {
    if ($domain === 'tutor' || $domain === 'tutor-lms') {
        switch ($text) {
            case 'Please %s to view this page': return 'Por favor, %s para ver esta p�gina';
            case 'Sign-In': return 'inici� sesi�n';
            case 'Dashboard': return 'Campus';
            case 'Enrolled Courses': return 'Cursos inscriptos';
            case 'Active Courses': return 'Cursos activos';
            case 'Completed Courses': return 'Cursos completados';
            case 'Logout': return 'Cerrar sesi�n';
            case 'Settings': return 'Ajustes';
            case 'My Profile': return 'Mi Perfil';
            case 'Reviews': return 'Rese�as';
            case 'Order History': return 'Historial de compras';
            case 'Q & A': return 'Preguntas y Respuestas';
            case 'My Quiz Attempts': return 'Mis cuestionarios';
            case 'Question & Answer': return 'Preguntas y respuestas';
            case 'Hello': return 'Hola';
            case 'Quiz Attempts': return 'Intentos de cuestionario';
            case 'Wishlist': return 'Lista de deseos';
        }
    }
    return $translated_text;
}
