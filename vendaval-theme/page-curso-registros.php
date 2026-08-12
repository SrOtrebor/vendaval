<?php
/*
Template Name: Curso - Registros a varias tintas
*/
get_header(); ?>

<main id="primary" class="site-main">
    <div class="container" style="padding-top: var(--spacing-xl);">
        
        <div class="breadcrumb">
            <a href="/">Home</a> &rarr; <a href="/formacion">Formación</a> &rarr; Registros a varias tintas
        </div>

        <div class="curso-top">
            <div class="curso-image">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/figma_assets/fe2242eb1ac0c07f171fdce0f83f810f223e988e.png" alt="Registros a varias tintas">
            </div>
            <div class="curso-buy">
                <h1>Registros a varias<br>tintas</h1>
                <div class="curso-price">$95.000,00</div>
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
            <p><strong>REGISTROS A VARIAS TINTAS</strong><br>
            Llevá tus estampas al próximo nivel aprendiendo a registrar y estampar diseños con múltiples colores a la perfección.<br>
            Si ya estampaste a un color, este es el siguiente paso lógico.</p>

            <p><strong>¿Cuándo?</strong> Sábado 20 de Junio de 10 a 13 hs</p>

            <p><strong>¿Dónde?</strong> Taller Vendaval. Ruiz Huidobro 2705</p>

            <p><strong>Una clase técnica y precisa para dominar el registro,</strong> entender cómo pensar el color, preparar originales y asegurar que cada capa caiga exactamente donde tiene que caer.</p>

            <p><strong>¿Qué vamos a ver?</strong></p>
            <ul>
                <li>Separación de colores básica para serigrafía</li>
                <li>Armado de shablones específicos para registro</li>
                <li>Técnicas de calce perfecto y marcas de registro</li>
                <li>Tintas superpuestas, transparencias y efectos visuales</li>
                <li>Práctica real: estampás tus propios diseños a dos o más colores</li>
            </ul>

            <p><strong>¿Qué incluye el taller?</strong><br>
            Todo listo para enfocarte en perfeccionar tu técnica:</p>
            <ul>
                <li><strong>Todos los materiales para la práctica</strong> (tintas especiales, herramientas y puesto armado con calesitas).</li>
                <li><strong>Acceso a nuestra biblioteca de recursos de diseño,</strong> para ver ejemplos y entender mejor la separación.</li>
                <li><strong>Soportes textiles</strong> para tus pruebas de calce.</li>
                <li><strong>Acompañamiento personalizado y corrección de errores,</strong> para que sepas qué hacer si el registro se mueve.</li>
                <li><strong>Descuento en otro de nuestros cursos</strong></li>
            </ul>

            <p><strong>Valor y Formas de pago</strong></p>
            <ul>
                <li><strong>Transferencia bancaria con 10% de descuento $85.500</strong></li>
                <li><strong>Tarjeta de crédito $95.000 en 2 cuotas</strong></li>
            </ul>
        </div>

    </div>
</main>

<?php get_footer(); ?>
