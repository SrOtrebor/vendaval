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
        <h2 class="formacion-title">Serigrafía se aprende haciendo.</h2>

        <!-- Grid of Courses -->
        <div class="formacion-grid">
            
            <!-- Curso 1 -->
            <div class="course-card">
                <div class="course-card-top">
                    <div class="course-label">+ curso +</div>
                    <h3>INTRODUCCIÓN<br>A LA SERIGRAFÍA</h3>
                    <!-- REEMPLAZAR SRC CON EL ICONO CORRECTO -->
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/figma_assets/5b99b820592c1a2eceb08a83cb6898964e9b2804.png" alt="Introducción">
                    <div class="course-mode">PRESENCIAL</div>
                    <div class="course-time">Sábado de 10:00 a 13:00</div>
                </div>
                <div class="course-card-bottom">
                    <h4>Introducción a la serigrafía</h4>
                    <p>El punto de partida. Aprendés todo el proceso desde cero y hacés tus primeras estampas. ¿Nunca estampaste? Este es el lugar para empezar.</p>
                    <a href="#" class="link-arrow text-small">Ver este curso <span class="arrow-icon">&rarr;</span></a>
                </div>
            </div>

            <!-- Curso 2 -->
            <div class="course-card">
                <div class="course-card-top">
                    <div class="course-label">+ curso +</div>
                    <h3>REGISTROS A<br>VARIAS TINTAS</h3>
                    <!-- REEMPLAZAR SRC CON EL ICONO CORRECTO -->
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/figma_assets/fe2242eb1ac0c07f171fdce0f83f810f223e988e.png" alt="Registros">
                    <div class="course-mode">PRESENCIAL</div>
                    <div class="course-time">Sábado de 10:00 a 13:00</div>
                </div>
                <div class="course-card-bottom">
                    <h4>Registros a varias tintas</h4>
                    <p>Un taller técnico para entender cómo alinear colores y poder estampar diseños a varias tintas con precisión. ¿Querés estampar a más de un color y que todo coincida como debe?</p>
                    <a href="#" class="link-arrow text-small">Ver este curso <span class="arrow-icon">&rarr;</span></a>
                </div>
            </div>

            <!-- Curso 3 (Duplicate based on screenshot, but let's make it real based on text if needed, or leave it as the screenshot shows) -->
            <div class="course-card">
                <div class="course-card-top">
                    <div class="course-label">+ curso +</div>
                    <h3>INTRODUCCIÓN<br>A LA SERIGRAFÍA</h3>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/figma_assets/5b99b820592c1a2eceb08a83cb6898964e9b2804.png" alt="Introducción">
                    <div class="course-mode">PRESENCIAL</div>
                    <div class="course-time">Sábado de 10:00 a 13:00</div>
                </div>
                <div class="course-card-bottom">
                    <h4>Introducción a la serigrafía</h4>
                    <p>El punto de partida. Aprendés todo el proceso desde cero y hacés tus primeras estampas. ¿Nunca estampaste? Este es el lugar para empezar.</p>
                    <a href="#" class="link-arrow text-small">Ver este curso <span class="arrow-icon">&rarr;</span></a>
                </div>
            </div>

            <!-- Curso 4 -->
            <div class="course-card">
                <div class="course-card-top">
                    <div class="course-label">+ curso +</div>
                    <h3>TINTAS<br>ESPECIALES</h3>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/figma_assets/78f9aa9776ccfaba35a17c5667ccde85740e3dec.png" alt="Tintas Especiales">
                    <div class="course-mode">PRESENCIAL</div>
                    <div class="course-time">Sábado de 10:00 a 13:00</div>
                </div>
                <div class="course-card-bottom">
                    <h4>Tintas especiales</h4>
                    <p>Un espacio para experimentar con efectos, texturas y recursos que amplían las posibilidades. ¿Querés sumar herramientas y explorar nuevas formas de estampar?</p>
                    <a href="#" class="link-arrow text-small">Ver este curso <span class="arrow-icon">&rarr;</span></a>
                </div>
            </div>

            <!-- Curso 5 -->
            <div class="course-card">
                <div class="course-card-top">
                    <div class="course-label">+ curso +</div>
                    <h3>PERSONALIZADO<br>DE SERIGRAFÍA</h3>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/figma_assets/c55c325c529a379d9b087d181d207cd946636daa.png" alt="Personalizado">
                    <div class="course-mode">PRESENCIAL</div>
                    <div class="course-time">Sábado de 10:00 a 12:00</div>
                </div>
                <div class="course-card-bottom">
                    <h4>Personalizado</h4>
                    <p>Un proceso de trabajo durante un mes para desarrollar tu propia idea y llevarla a un producto estampado. ¿Tenés un diseño y querés convertirlo en algo real?</p>
                    <a href="#" class="link-arrow text-small">Ver este curso <span class="arrow-icon">&rarr;</span></a>
                </div>
            </div>

            <!-- Curso 6 -->
            <div class="course-card">
                <div class="course-card-top">
                    <div class="course-label">+ curso +</div>
                    <h3>TINTAS<br>ESPECIALES</h3>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/figma_assets/78f9aa9776ccfaba35a17c5667ccde85740e3dec.png" alt="Tintas Especiales">
                    <div class="course-mode">PRESENCIAL</div>
                    <div class="course-time">Sábado de 10:00 a 13:00</div>
                </div>
                <div class="course-card-bottom">
                    <h4>Tintas especiales</h4>
                    <p>Un espacio para experimentar con efectos, texturas y recursos que amplían las posibilidades. ¿Querés sumar herramientas y explorar nuevas formas de estampar?</p>
                    <a href="#" class="link-arrow text-small">Ver este curso <span class="arrow-icon">&rarr;</span></a>
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
