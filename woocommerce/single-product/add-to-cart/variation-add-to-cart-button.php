<?php
/**
 * Single variation cart button
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

global $product;
$class_view_cart = adswth_option( 'use_minicart' ) ? 'cart-popup' : '';
$link_view_cart = adswth_option( 'use_minicart' ) ? '#' : wc_get_cart_url();
?>
<div class="woocommerce-variation-add-to-cart variations_button">



    <div class="woocommerce-add-to-cart-group">
        <?php do_action( 'woocommerce_before_add_to_cart_quantity' ); ?>

        <div class="single-quantity-wrap d-flex align-items-center">
            <div class="name"><?php echo __( 'Quantity:', 'elgrecowoo' ); ?></div>
            <?php
            woocommerce_quantity_input( array(
                'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
                'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
                'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
            ) );
            if(adswth_option('spp_show_in_stock_badge')) { ?>
                <div class="woocommerce-variation single_variation"></div>
            <?php }

            ?>
        </div>
        <?php wc_get_template_part( 'single-product/product', 'above-cart-badges' ); ?>

        <?php do_action( 'woocommerce_after_add_to_cart_quantity' ); ?>
        <?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>
        <div class="single_add_to_cart_button-group">
            <button data-button-text="<?php echo __( 'View cart', 'elgrecowoo' )?>" data-after-title-text="<?php echo __( 'has been added to your cart', 'elgrecowoo' )?>" type="submit" class="single_add_to_cart_button btn btn-primary btn-big alt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>
            <div class="view-cart-wrap" <?php if ( WC()->cart->is_empty() ) { echo 'style="display:none;"'; } ?>>
                <a href="<?php echo $link_view_cart ?>" class="view-cart <?php echo $class_view_cart ?>"><?php echo __( 'View cart', 'elgrecowoo' ); ?></a>
            </div>
        </div>
    </div>
    
	<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>

	<input type="hidden" name="add-to-cart" value="<?php echo absint( $product->get_id() ); ?>" />
	<input type="hidden" name="product_id" value="<?php echo absint( $product->get_id() ); ?>" />
	<input type="hidden" name="variation_id" class="variation_id" value="0" />
</div>
<?php do_action('ads_single_product_after_add_to_cart', $product->get_id());?>