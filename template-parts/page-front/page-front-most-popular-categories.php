<?php if (adswth_option('most_popular_categories_show')) { ?>
    <div class="container">
        <div class="most-popular-categories mt-px-50">
            <?php if (adswth_option('most_popular_categories_show')) { ?>
                <div class="block-title-wrap text-center">
                    <h3 class="block-title"><?php echo adswth_option('most_popular_categories_title'); ?></h3>
                </div>
            <?php } //endif; ?>
            <?php $most_popular_categories = adswth_option('most_popular_categories'); ?>
            <?php if (is_array($most_popular_categories) && count($most_popular_categories) > 0) { ?>
                <div class="swiper-container most-popular-categories-slider mt-px-30 mb-px-30">
                    <div class="swiper-wrapper">
                        <!-- START Refactor -->
                        <!--TODO Need to add JS to ensure that can slide through each on a phone-->
                        <div class="swiper-slide" style="width: 214px; margin-right: 15px;">
                            <div class="most-popular-image">
                                <img class="swiper-lazy swiper-lazy-loaded" width="380px" height="203px"
                                     alt="Stationery"
                                     src="https://indulgeambition.com/wp-content/uploads/2021/01/Stationery-380x203.png">
                            </div>
                            <a href="https://www.indulgeambition.com/product-category/stationery/">
                                <div class="caption-wrap d-flex align-items-center justify-content-center"
                                     style="background-color: rgba(0,0,0,0); color: #000000;">
                                    <div class="caption">
                                        <h3 class="category-title">Stationery</h3>
                                        <p class="category-description"
                                           style="display: none; height: 0px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 16px;"></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide" style="width: 214px; margin-right: 15px;">
                            <div class="most-popular-image">
                                <img class="swiper-lazy swiper-lazy-loaded" width="380px" height="203px"
                                     alt="Electronics"
                                     src="https://indulgeambition.com/wp-content/uploads/2021/01/Electronics-380x203.png">
                            </div>
                            <a href="https://www.indulgeambition.com/product-category/electronics/">
                                <div class="caption-wrap d-flex align-items-center justify-content-center"
                                     style="background-color: rgba(0,0,0,0); color: #000000;">
                                    <div class="caption">
                                        <h3 class="category-title">Electronics</h3>
                                        <p class="category-description"
                                           style="display: none; height: 0px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 16px;"></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide" style="width: 214px; margin-right: 15px;">
                            <div class="most-popular-image">
                                <img class="swiper-lazy swiper-lazy-loaded" width="380px" height="203px"
                                     alt="Mobile Accessories"
                                     src="https://indulgeambition.com/wp-content/uploads/2021/01/Phone-Accessories-Cat-380x203.png">
                            </div>
                            <a href="https://www.indulgeambition.com/product-category/mobile-accessories/">
                                <div class="caption-wrap d-flex align-items-center justify-content-center"
                                     style="background-color: rgba(0,0,0,0); color: #000000;">
                                    <div class="caption">
                                        <h3 class="category-title">Mobile Accessories</h3>
                                        <p class="category-description" style="display: none;"></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- END Refactor -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            <?php } //endif; ?>
        </div>
    </div>
<?php } //endif; ?>
