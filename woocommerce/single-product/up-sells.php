<?php
/**
 * Single Product Up-Sells
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/up-sells.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @author        WooThemes
 * @package    WooCommerce/Templates
 * @version     3.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

if ($upsells) :
    $count_slides = count($upsells);
    ?>

    <section class="up-sells upsells single-product-products row-full">
        <div class="container">

        <div class="block-title-wrap">
            <h3 class="block-title text-center pt-px-30 pb-px-20"><?php esc_html_e('Recommendations', 'elgrecowoo') ?></h3>
        </div>

        <?php woocommerce_product_loop_start(); ?>
        <div class="product-slider-up-sells">
            <div class="product-slider swiper-container elgreco-product-slider">
                <div class="swiper-wrapper">

                    <?php foreach ($upsells as $upsell) : ?>

                        <?php
                        $post_object = get_post($upsell->get_id());

                        setup_postdata($GLOBALS['post'] =& $post_object);
                        ?>

                        <div class="swiper-slide">

                            <?php wc_get_template_part('content', 'product'); ?>

                        </div>

                    <?php endforeach; ?>

                </div>
                <div class="swiper-pagination"></div>
            </div>
            <?php if($count_slides > 4){ ?>
                <div class="swiper-arrow-prev"></div>
                <div class="swiper-arrow-next"></div>
            <?php } ?>
        </div>

        <?php woocommerce_product_loop_end(); ?>
        </div>
    </section>

<?php endif;

wp_reset_postdata();
