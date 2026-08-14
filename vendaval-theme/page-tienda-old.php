<?php
/*
Template Name: Tienda
*/
get_header(); ?>

<main id="primary" class="site-main">
    <div class="container" style="padding-top: var(--spacing-xl);">
        
        <div class="breadcrumb">
            <a href="/">Home</a> &rarr; Tienda
        </div>

        <div class="tienda-grid">
            
            <!-- Producto 2 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/figma_assets/da652899a85e05105ea3bd4221d605084f1e93c3.png" alt="Chaleco Pájaro Crudo">
                </div>
                <h3 class="product-title">Chaleco Pájaro Crudo</h3>
                <div class="product-price">$36.000,00</div>
                <div class="product-installments">2 cuotas sin interés de $18.000,00</div>
                <div class="product-divider"></div>
                <div class="product-transfer">$32.400,00 con transferencia</div>
            </div>

            <!-- Producto 3 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/figma_assets/bfcc262278e9e1d013956aaaa53cc1bdfb19c121.png" alt="Chaleco Pájaro">
                </div>
                <h3 class="product-title">Chaleco Pájaro</h3>
                <div class="product-price">$36.000,00</div>
                <div class="product-installments">2 cuotas sin interés de $18.000,00</div>
                <div class="product-divider"></div>
                <div class="product-transfer">$32.400,00 con transferencia</div>
            </div>

            <!-- Producto 4 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/figma_assets/569752bcac885293413d5bf6ca7d7dab64882222.png" alt="Bolso Manos">
                </div>
                <h3 class="product-title">Bolso Manos</h3>
                <div class="product-price">$33.500,00</div>
                <div class="product-installments">2 cuotas sin interés de $16.750,00</div>
                <div class="product-divider"></div>
                <div class="product-transfer">$30.150,00 con transferencia</div>
            </div>

            <!-- Producto 5 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/figma_assets/eb3f17b6ef93e58051ec426c6b1c78ddd5a4a914.png" alt="Bolso Cielo">
                </div>
                <h3 class="product-title">Bolso Cielo</h3>
                <div class="product-price">$33.500,00</div>
                <div class="product-installments">2 cuotas sin interés de $16.750,00</div>
                <div class="product-divider"></div>
                <div class="product-transfer">$30.150,00 con transferencia</div>
            </div>

            <!-- Producto 6 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/figma_assets/3bf484a1b11e995f736dfbb0a914a972f63fc6e2.png" alt="Bolso Visión">
                </div>
                <h3 class="product-title">Bolso Visión</h3>
                <div class="product-price">$33.500,00</div>
                <div class="product-installments">2 cuotas sin interés de $16.750,00</div>
                <div class="product-divider"></div>
                <div class="product-transfer">$30.150,00 con transferencia</div>
            </div>

            <!-- Producto 9 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/figma_assets/00b4069bb949383234d62d4f4b6ff65d71dce0c8.png" alt="Remeras">
                </div>
                <h3 class="product-title">Remeras</h3>
                <div class="product-price">$50.000,00</div>
                <div class="product-installments">2 cuotas sin interés de $25.000,00</div>
                <div class="product-divider"></div>
                <div class="product-transfer">$45.000,00 con transferencia</div>
            </div>

        </div>

    </div>
</main>

<?php get_footer(); ?>
