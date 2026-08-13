<?php
/*
Template Name: Curso Interna
*/
get_header(); ?>

<main id="primary" class="site-main">
    <div class="container" style="padding-top: var(--spacing-xl);">
        
        <div class="breadcrumb">
            <a href="/">Home</a> &rarr; <a href="/formacion">Formación</a> &rarr; Introducción a la serigrafía
        </div>

        <div class="curso-top">
            <div class="curso-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/figma_assets/5b99b820592c1a2eceb08a83cb6898964e9b2804.png" alt="Introducción a la serigrafía">
            </div>
            <div class="curso-buy">
                <h1>Introducción a la<br>serigrafía</h1>
                <div class="curso-price">$82.000,00</div>
                <div class="curso-quantity-label">Cantidad</div>
                <select class="curso-quantity-select">
                    <option value="1"></option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <button class="btn-cart">AGREGAR AL CARRITO</button>
            </div>
        </div>

        <div class="curso-details">
            <p><strong>INTRODUCCIÓN A LA SERIGRAFÍA</strong><br>
            Es la base, acá aprendés todo desde cero: materiales, armado, revelado y primeras estampas.<br>
            Si nunca estampaste, este es el punto de partida.</p>

            <p><strong>¿Cuándo?</strong> Sábado 6 de Junio de 10 a 13 hs</p>

            <p><strong>¿Dónde?</strong> Taller Vendaval. Ruiz Huidobro 2705</p>

            <p><strong>Una clase práctica y accesible para meterte en el mundo de la serigrafía,</strong> entender cómo funciona el proceso, conocer las herramientas que vas a usar y animarte a hacer tus primeras estampas con acompañamiento. <strong>No necesitás experiencia previa.</strong></p>

            <p><strong>¿Qué vamos a ver?</strong></p>
            <ul>
                <li>Qué es la serigrafía y para qué la podés usar</li>
                <li>Las herramientas básicas para arrancar sin gastar de más</li>
                <li>Las tintas, sus terminaciones</li>
                <li>Cómo armar tu puesto de trabajo sin volverte loca/o</li>
                <li>Tipos de registro para estampar prolijo</li>
                <li>Práctica real: estampás tus propios totes y tapices</li>
            </ul>

            <p><strong>¿Qué incluye el taller?</strong><br>
            Todo lo que necesitás para aprender y estampar sin preocuparte por nada:</p>
            <ul>
                <li><strong>Todos los materiales para la práctica</strong> (tintas, herramientas y puesto armado).</li>
                <li><strong>Acceso permanente a todos nuestros cursos virtuales de serigrafía,</strong> para que puedas repasar y seguir aprendiendo a tu ritmo.</li>
                <li><strong>2 totes + 1 tapiz + papel</strong> para tus primeras pruebas y estampas.</li>
                <li><strong>Acompañamiento personalizado durante el taller,</strong> para que realmente entiendas el proceso y puedas sacarte todas las dudas.</li>
                <li><strong>Descuento en otro de nuestros cursos</strong></li>
            </ul>

            <p><strong>Valor y Formas de pago</strong></p>
            <ul>
                <li><strong>Transferencia bancaria con 10% de descuento $64.800</strong></li>
                <li><strong>Tarjeta de crédito $72.000 en 2 cuotas</strong></li>
            </ul>
        </div>

    </div>
</main>

<?php get_footer(); ?>
