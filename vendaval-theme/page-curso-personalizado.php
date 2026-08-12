<?php
/*
Template Name: Curso - Personalizado
*/
get_header(); ?>

<main id="primary" class="site-main">
    <div class="container" style="padding-top: var(--spacing-xl);">
        
        <div class="breadcrumb">
            <a href="/">Home</a> &rarr; <a href="/formacion">Formación</a> &rarr; Personalizado de serigrafía
        </div>

        <div class="curso-top">
            <div class="curso-image">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/figma_assets/c55c325c529a379d9b087d181d207cd946636daa.png" alt="Personalizado de serigrafía">
            </div>
            <div class="curso-buy">
                <h1>Personalizado de<br>serigrafía</h1>
                <div class="curso-price">$150.000,00</div>
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
            <p><strong>PERSONALIZADO DE SERIGRAFÍA</strong><br>
            Un proceso de trabajo durante un mes para desarrollar tu propia idea y llevarla a un producto estampado.<br>
            ¿Tenés un diseño y querés convertirlo en algo real? Este curso uno-a-uno es para vos.</p>

            <p><strong>¿Cuándo?</strong> Acordamos los días y horarios según tu disponibilidad (4 clases en el mes)</p>

            <p><strong>¿Dónde?</strong> Taller Vendaval. Ruiz Huidobro 2705</p>

            <p><strong>Un programa intensivo y 100% enfocado en tu proyecto,</strong> donde te guiamos paso a paso desde la concepción del diseño hasta la producción de tu tirada final. <strong>Nos adaptamos a tu nivel de experiencia.</strong></p>

            <p><strong>¿Qué vamos a ver?</strong></p>
            <ul>
                <li>Análisis de viabilidad de tu diseño para serigrafía</li>
                <li>Selección de tintas y soportes ideales para tu producto</li>
                <li>Preparación de originales y fotones específicos para tu idea</li>
                <li>Pruebas de estampación, registro y corrección de color</li>
                <li>Producción guiada de tu primera tirada comercial</li>
                <li>Presupuestos y optimización de tiempos</li>
            </ul>

            <p><strong>¿Qué incluye el taller?</strong><br>
            La mentoría completa para lanzar tu producto:</p>
            <ul>
                <li><strong>Asesoría personalizada exclusiva</strong> durante 4 encuentros de 3 horas.</li>
                <li><strong>Materiales básicos de taller</strong> (emulsión, químicos, uso de herramientas).</li>
                <li><strong>Grabado de tus matrices</strong> (te llevás tus shablones listos para seguir produciendo).</li>
                <li><strong>Acompañamiento por WhatsApp</strong> durante el mes que dura la mentoría.</li>
                <li><strong>Descuento exclusivo</strong> para comprar insumos a través del taller.</li>
            </ul>

            <p><strong>Valor y Formas de pago</strong></p>
            <ul>
                <li><strong>Transferencia bancaria con 10% de descuento $135.000</strong></li>
                <li><strong>Tarjeta de crédito $150.000 en hasta 3 cuotas</strong></li>
            </ul>
        </div>

    </div>
</main>

<?php get_footer(); ?>
