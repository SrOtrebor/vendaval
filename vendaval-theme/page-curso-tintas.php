<?php
/*
Template Name: Curso - Tintas Especiales
*/
get_header(); ?>

<main id="primary" class="site-main">
    <div class="container" style="padding-top: var(--spacing-xl);">
        
        <div class="breadcrumb">
            <a href="/">Home</a> &rarr; <a href="/formacion">Formación</a> &rarr; Tintas Especiales
        </div>

        <div class="curso-top">
            <div class="curso-image">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/figma_assets/78f9aa9776ccfaba35a17c5667ccde85740e3dec.png" alt="Tintas Especiales">
            </div>
            <div class="curso-buy">
                <h1>Tintas<br>Especiales</h1>
                <div class="curso-price">$110.000,00</div>
                <div class="curso-quantity-label">Cantidad</div>
                <select class="curso-quantity-select">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <button class="btn-cart">AGREGAR AL CARRITO</button>
            </div>
        </div>

        <div class="curso-details">
            <p><strong>TINTAS ESPECIALES</strong><br>
            Un espacio para experimentar con efectos, texturas y recursos que amplían las posibilidades de tus prendas.<br>
            ¿Querés sumar herramientas y explorar nuevas formas de estampar? Este curso es ideal.</p>

            <p><strong>¿Cuándo?</strong> Sábado 4 de Julio de 10 a 13 hs</p>

            <p><strong>¿Dónde?</strong> Taller Vendaval. Ruiz Huidobro 2705</p>

            <p><strong>Una clase enfocada en la química y el comportamiento de las tintas no tradicionales,</strong> para que aprendas a usarlas correctamente sin dañar tus shablones y logrando efectos únicos. <strong>Requiere conocimientos básicos previos.</strong></p>

            <p><strong>¿Qué vamos a ver?</strong></p>
            <ul>
                <li>Tintas puff (con relieve y textura)</li>
                <li>Tintas metálicas, perladas y reflectivas</li>
                <li>Aplicación de Foil y Flock</li>
                <li>Mallas adecuadas para cada tipo de tinta</li>
                <li>Tiempos de curado y cuidados de lavado especiales</li>
                <li>Práctica real probando cada uno de estos efectos</li>
            </ul>

            <p><strong>¿Qué incluye el taller?</strong><br>
            Todo lo necesario para que juegues con las texturas:</p>
            <ul>
                <li><strong>Muestras de todas las tintas especiales</strong> para usar durante la clase.</li>
                <li><strong>Cuadernillo técnico</strong> con los secretos de formulación y curado.</li>
                <li><strong>Retazos textiles y papel</strong> para tus muestras.</li>
                <li><strong>Guía de proveedores</strong> para conseguir estas tintas.</li>
                <li><strong>Descuento en otro de nuestros cursos</strong></li>
            </ul>

            <p><strong>Valor y Formas de pago</strong></p>
            <ul>
                <li><strong>Transferencia bancaria con 10% de descuento $99.000</strong></li>
                <li><strong>Tarjeta de crédito $110.000 en 2 cuotas</strong></li>
            </ul>
        </div>

    </div>
</main>

<?php get_footer(); ?>
