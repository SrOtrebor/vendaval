<?php
/*
Template Name: Formacion
*/
get_header(); ?>

<main id="primary" class="site-main">
    <div class="container" style="padding-top: var(--spacing-xxl);">
        
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
        <h2 class="formacion-title">Modalidad Presencial</h2>

        <div class="formacion-grid" style="margin-bottom: 60px;">
            
            <!-- Curso 1 -->
            <div class="course-card">
                <div class="course-card-top">
                    <div class="course-label">+ curso +</div>
                    <h3>NIVEL 1<br>INTRODUCCIÓN</h3>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cursos/Portadas de cursos presenciales_Introducción a la serigrafía.jpg" alt="Introducción a la serigrafía">
                    <div class="course-mode">PRESENCIAL</div>
                    <div class="course-time">1 clase</div>
                </div>
                <div class="course-card-bottom">
                    <h4>Introducción a la serigrafía</h4>
                    <p>El punto de partida. Aprendés todo el proceso desde cero y hacés tus primeras estampas. Incluye preimpresión y guía para emprender.</p>
                    <a href="<?php echo get_permalink(89); ?>" class="link-arrow text-small">Ver este curso <span class="arrow-icon">&rarr;</span></a>
                </div>
            </div>

            <!-- Curso 2 -->
            <div class="course-card">
                <div class="course-card-top">
                    <div class="course-label">+ curso +</div>
                    <h3>NIVEL 2<br>REGISTROS</h3>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cursos/Portadas de cursos presenciales_Varias tintas.jpg" alt="Registro a varias tintas">
                    <div class="course-mode">PRESENCIAL</div>
                    <div class="course-time" style="background-color: var(--color-red); color: white;">LISTA DE ESPERA</div>
                </div>
                <div class="course-card-bottom">
                    <h4>Registro a varias tintas</h4>
                    <p>Un taller técnico para entender cómo alinear colores y poder estampar diseños a varias tintas con precisión.</p>
                    <a href="<?php echo home_url('/contacto'); ?>" class="link-arrow text-small">Anotarse <span class="arrow-icon">&rarr;</span></a>
                </div>
            </div>

            <!-- Curso 3 -->
            <div class="course-card">
                <div class="course-card-top">
                    <div class="course-label">+ curso +</div>
                    <h3>ACOMPAÑAMIENTO<br>1 A 1</h3>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cursos/Portadas de cursos presenciales_Acompañamiento 1 a 1.jpg" alt="Acompañamiento 1 a 1">
                    <div class="course-mode">PRESENCIAL</div>
                    <div class="course-time">Personalizado</div>
                </div>
                <div class="course-card-bottom">
                    <h4>Acompañamiento 1 a 1</h4>
                    <p>Clases particulares de acompañamiento. Incluye todos los niveles, preimpresión y guía para emprender.</p>
                    <a href="<?php echo get_permalink(91); ?>" class="link-arrow text-small">Ver este curso <span class="arrow-icon">&rarr;</span></a>
                </div>
            </div>

            <!-- Curso 4 -->
            <div class="course-card">
                <div class="course-card-top">
                    <div class="course-label">+ curso +</div>
                    <h3>CURSO<br>PERSONALIZADO</h3>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cursos/Portadas de cursos presenciales_Personalizado de serigrafía.jpg" alt="Curso Personalizado">
                    <div class="course-mode">PRESENCIAL</div>
                    <div class="course-time">4 clases</div>
                </div>
                <div class="course-card-bottom">
                    <h4>Introducción Personalizado</h4>
                    <p>Un proceso de trabajo para desarrollar tu propia idea y llevarla a un producto estampado de forma personalizada.</p>
                    <a href="<?php echo get_permalink(92); ?>" class="link-arrow text-small">Ver este curso <span class="arrow-icon">&rarr;</span></a>
                </div>
            </div>
        </div>

        <h2 class="formacion-title">Modalidad Virtual</h2>

        <div class="formacion-grid">
            
            <!-- Curso 5 -->
            <div class="course-card">
                <div class="course-card-top">
                    <div class="course-label">+ curso +</div>
                    <h3>IMPRESIÓN<br>POR METRO</h3>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/figma_assets/5b99b820592c1a2eceb08a83cb6898964e9b2804.png" alt="Virtual">
                    <div class="course-mode">VIRTUAL</div>
                    <div class="course-time">A tu ritmo</div>
                </div>
                <div class="course-card-bottom">
                    <h4>Impresión por metro</h4>
                    <p>Aprende las técnicas de impresión por metro continuo en serigrafía.</p>
                    <a href="<?php echo get_permalink(93); ?>" class="link-arrow text-small">Ver este curso <span class="arrow-icon">&rarr;</span></a>
                </div>
            </div>

            <!-- Curso 6 -->
            <div class="course-card">
                <div class="course-card-top">
                    <div class="course-label">+ curso +</div>
                    <h3>PREIMPRESIÓN<br>VIRTUAL</h3>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/figma_assets/5b99b820592c1a2eceb08a83cb6898964e9b2804.png" alt="Virtual">
                    <div class="course-mode">VIRTUAL</div>
                    <div class="course-time">A tu ritmo</div>
                </div>
                <div class="course-card-bottom">
                    <h4>Preimpresión</h4>
                    <p>Cómo preparar los archivos, separaciones de color y quemado de pantallas.</p>
                    <a href="<?php echo get_permalink(94); ?>" class="link-arrow text-small">Ver este curso <span class="arrow-icon">&rarr;</span></a>
                </div>
            </div>

            <!-- Curso 7 -->
            <div class="course-card">
                <div class="course-card-top">
                    <div class="course-label">+ curso +</div>
                    <h3>GUÍA PARA<br>EMPRENDER</h3>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/figma_assets/5b99b820592c1a2eceb08a83cb6898964e9b2804.png" alt="Virtual">
                    <div class="course-mode">VIRTUAL</div>
                    <div class="course-time">A tu ritmo</div>
                </div>
                <div class="course-card-bottom">
                    <h4>Guía de Costos</h4>
                    <p>Aprende a calcular tus costos y llevar adelante tu emprendimiento con éxito.</p>
                    <a href="<?php echo get_permalink(95); ?>" class="link-arrow text-small">Ver este curso <span class="arrow-icon">&rarr;</span></a>
                </div>
            </div>

            <!-- Curso 8 -->
            <div class="course-card">
                <div class="course-card-top">
                    <div class="course-label">+ curso +</div>
                    <h3>NIVEL 1<br>VIRTUAL</h3>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/figma_assets/5b99b820592c1a2eceb08a83cb6898964e9b2804.png" alt="Virtual">
                    <div class="course-mode">VIRTUAL</div>
                    <div class="course-time">A tu ritmo</div>
                </div>
                <div class="course-card-bottom">
                    <h4>Nivel 1</h4>
                    <p>La introducción a la serigrafía desde la comodidad de tu casa.</p>
                    <a href="<?php echo get_permalink(96); ?>" class="link-arrow text-small">Ver este curso <span class="arrow-icon">&rarr;</span></a>
                </div>
            </div>
            
            <!-- Curso 9 -->
            <div class="course-card">
                <div class="course-card-top">
                    <div class="course-label">+ curso +</div>
                    <h3>NIVEL 2<br>VIRTUAL</h3>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/figma_assets/fe2242eb1ac0c07f171fdce0f83f810f223e988e.png" alt="Virtual">
                    <div class="course-mode">VIRTUAL</div>
                    <div class="course-time">A tu ritmo</div>
                </div>
                <div class="course-card-bottom">
                    <h4>Nivel 2 Registros</h4>
                    <p>Registros a varias tintas de forma virtual, profundizando la técnica.</p>
                    <a href="<?php echo get_permalink(97); ?>" class="link-arrow text-small">Ver este curso <span class="arrow-icon">&rarr;</span></a>
                </div>
            </div>

            <!-- Curso 10 -->
            <div class="course-card">
                <div class="course-card-top">
                    <div class="course-label">+ curso +</div>
                    <h3>TODO INCLUIDO<br>VIRTUAL</h3>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/figma_assets/78f9aa9776ccfaba35a17c5667ccde85740e3dec.png" alt="Virtual">
                    <div class="course-mode">VIRTUAL</div>
                    <div class="course-time">A tu ritmo</div>
                </div>
                <div class="course-card-bottom">
                    <h4>Todo incluido</h4>
                    <p>El paquete completo virtual para aprender absolutamente todo.</p>
                    <a href="<?php echo get_permalink(98); ?>" class="link-arrow text-small">Ver este curso <span class="arrow-icon">&rarr;</span></a>
                </div>
            </div>

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
