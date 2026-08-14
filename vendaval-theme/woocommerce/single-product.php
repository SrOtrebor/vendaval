<?php
defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

while ( have_posts() ) :
	the_post();
	global $product;
?>
<main id="primary" class="site-main" style="padding-top: var(--header-height);">
    <div class="container section-margin">
        <div class="breadcrumb" style="margin-bottom: 20px;">
            <a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>" class="link-arrow-left text-body-small">
                <span class="arrow-icon">&larr;</span> Volver a la Tienda
            </a>
        </div>

        <div id="product-<?php the_ID(); ?>" <?php wc_product_class( 'product-single-grid', $product ); ?>>
            
            <div class="product-gallery-col">
                <?php
                /**
                 * Hook: woocommerce_before_single_product_summary.
                 * @hooked woocommerce_show_product_sale_flash - 10
                 * @hooked woocommerce_show_product_images - 20
                 */
                do_action( 'woocommerce_before_single_product_summary' );
                ?>
            </div>

            <div class="product-summary-col">
                <h1 class="text-subtitle" style="margin-bottom: 15px; font-weight: normal;"><?php the_title(); ?></h1>
                
                <?php
                /**
                 * Hook: woocommerce_single_product_summary.
                 * @hooked woocommerce_template_single_title - 5
                 * @hooked woocommerce_template_single_rating - 10
                 * @hooked woocommerce_template_single_price - 10
                 * @hooked woocommerce_template_single_excerpt - 20
                 * @hooked woocommerce_template_single_add_to_cart - 30
                 * @hooked woocommerce_template_single_meta - 40
                 * @hooked woocommerce_template_single_sharing - 50
                 * @hooked WC_Structured_Data::generate_product_data() - 60
                 */
                remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
                do_action( 'woocommerce_single_product_summary' );
                ?>
            </div>

        </div>

        <?php
        /**
         * Hook: woocommerce_after_single_product_summary.
         * @hooked woocommerce_output_product_data_tabs - 10
         * @hooked woocommerce_upsell_display - 15
         * @hooked woocommerce_output_related_products - 20
         */
        do_action( 'woocommerce_after_single_product_summary' );
        ?>

    </div>
</main>
<?php
endwhile;

get_footer( 'shop' );
?>
