<?php
defined( 'ABSPATH' ) || exit;

if( function_exists('acf_add_local_field_group') ):

// 1. Campos para PRODUCTOS (WooCommerce)
acf_add_local_field_group(array(
    'key' => 'group_productos',
    'title' => 'Detalles Adicionales del Producto',
    'fields' => array(
        array(
            'key' => 'field_prod_cuotas',
            'label' => 'Texto de Cuotas',
            'name' => 'producto_cuotas_texto',
            'type' => 'text',
            'instructions' => 'Ej: 2 cuotas sin interés de $25.000,00',
        ),
        array(
            'key' => 'field_prod_transferencia',
            'label' => 'Precio con Transferencia',
            'name' => 'producto_precio_transferencia',
            'type' => 'text',
            'instructions' => 'Ej: $45.000,00 con transferencia',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'product', // WooCommerce Product CPT
            ),
        ),
    ),
));

// 2. Campos para CURSOS (Tutor LMS)
acf_add_local_field_group(array(
    'key' => 'group_cursos',
    'title' => 'Detalles Adicionales del Curso',
    'fields' => array(
        array(
            'key' => 'field_curso_icono',
            'label' => 'Icono del Curso',
            'name' => 'curso_icono',
            'type' => 'image',
            'return_format' => 'url',
            'preview_size' => 'thumbnail',
        ),
        array(
            'key' => 'field_curso_modalidad',
            'label' => 'Modalidad',
            'name' => 'curso_modalidad',
            'type' => 'text',
            'instructions' => 'Ej: PRESENCIAL',
            'default_value' => 'PRESENCIAL',
        ),
        array(
            'key' => 'field_curso_horario',
            'label' => 'Horario',
            'name' => 'curso_horario',
            'type' => 'text',
            'instructions' => 'Ej: Sábado de 10:00 a 13:00',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'courses', // Tutor LMS Course CPT
            ),
        ),
    ),
));

endif;
?>
