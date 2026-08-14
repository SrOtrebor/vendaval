<?php
defined( 'ABSPATH' ) || exit;

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'group_proyectos',
    'title' => 'Detalles del Proyecto (Imágenes)',
    'fields' => array(
        array(
            'key' => 'field_tags',
            'label' => 'Etiquetas (Tags)',
            'name' => 'proyecto_tags',
            'type' => 'textarea',
            'instructions' => 'Escribe una etiqueta por línea (ej: Branding, Website, Logo).',
        ),
        array(
            'key' => 'field_instagram_link',
            'label' => 'Link de Instagram',
            'name' => 'proyecto_instagram',
            'type' => 'url',
            'instructions' => 'Pega aquí el enlace del Reel o Post de Instagram para mostrar el botón "Ver más en Instagram".',
        ),
        array(
            'key' => 'field_hero_desktop',
            'label' => 'Hero (Escritorio)',
            'name' => 'proyecto_hero_desktop',
            'type' => 'image',
            'return_format' => 'url',
            'preview_size' => 'medium',
        ),
        array(
            'key' => 'field_hero_tablet',
            'label' => 'Hero (Tablet/Celular)',
            'name' => 'proyecto_hero_tablet',
            'type' => 'image',
            'return_format' => 'url',
            'preview_size' => 'medium',
        ),
        array(
            'key' => 'field_f1_izq',
            'label' => 'Fila 1 - Izquierda',
            'name' => 'proyecto_foto_1_izq',
            'type' => 'image',
            'return_format' => 'url',
            'preview_size' => 'medium',
        ),
        array(
            'key' => 'field_f1_der',
            'label' => 'Fila 1 - Derecha',
            'name' => 'proyecto_foto_1_der',
            'type' => 'image',
            'return_format' => 'url',
            'preview_size' => 'medium',
        ),
        array(
            'key' => 'field_f2',
            'label' => 'Fila 2 - Completa',
            'name' => 'proyecto_foto_2',
            'type' => 'image',
            'return_format' => 'url',
            'preview_size' => 'medium',
        ),
        array(
            'key' => 'field_f2_pos',
            'label' => 'Alineación del recorte (Fila 2)',
            'name' => 'proyecto_f2_posicion',
            'type' => 'select',
            'choices' => array(
                'center' => 'Centro',
                'top' => 'Arriba',
                'bottom' => 'Abajo',
            ),
            'default_value' => 'center',
        ),
        array(
            'key' => 'field_f3_izq',
            'label' => 'Fila 3 - Izquierda',
            'name' => 'proyecto_foto_3_izq',
            'type' => 'image',
            'return_format' => 'url',
            'preview_size' => 'medium',
        ),
        array(
            'key' => 'field_f3_der',
            'label' => 'Fila 3 - Derecha',
            'name' => 'proyecto_foto_3_der',
            'type' => 'image',
            'return_format' => 'url',
            'preview_size' => 'medium',
        ),
        array(
            'key' => 'field_f4',
            'label' => 'Fila 4 - Completa',
            'name' => 'proyecto_foto_4',
            'type' => 'image',
            'return_format' => 'url',
            'preview_size' => 'medium',
        ),
        array(
            'key' => 'field_f4_pos',
            'label' => 'Alineación del recorte (Fila 4)',
            'name' => 'proyecto_f4_posicion',
            'type' => 'select',
            'choices' => array(
                'center' => 'Centro',
                'top' => 'Arriba',
                'bottom' => 'Abajo',
            ),
            'default_value' => 'center',
        ),
        array(
            'key' => 'field_f5_izq',
            'label' => 'Fila 5 - Izquierda',
            'name' => 'proyecto_foto_5_izq',
            'type' => 'image',
            'return_format' => 'url',
            'preview_size' => 'medium',
        ),
        array(
            'key' => 'field_f5_der',
            'label' => 'Fila 5 - Derecha',
            'name' => 'proyecto_foto_5_der',
            'type' => 'image',
            'return_format' => 'url',
            'preview_size' => 'medium',
        ),
        array(
            'key' => 'field_f6',
            'label' => 'Fila 6 - Completa',
            'name' => 'proyecto_foto_6',
            'type' => 'image',
            'return_format' => 'url',
            'preview_size' => 'medium',
        ),
        array(
            'key' => 'field_f6_pos',
            'label' => 'Alineación del recorte (Fila 6)',
            'name' => 'proyecto_f6_posicion',
            'type' => 'select',
            'choices' => array(
                'center' => 'Centro',
                'top' => 'Arriba',
                'bottom' => 'Abajo',
            ),
            'default_value' => 'center',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'proyectos',
            ),
        ),
    ),
));

endif;
?>
