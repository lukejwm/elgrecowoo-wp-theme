<div>
    <div class="search-container d-flex align-items-center h-100 shade-focus">
        <form action="<?php echo home_url( '/' ); ?>" class="w-100">
            <div class="search-input-container">
                <input type="hidden" name="post_type" value="product" />
                <input class="search-field js-autocomplete-search" autocomplete="off" name="s" type="text" value="" placeholder="<?php _e( 'What are you looking for?', 'elgrecowoo' ); ?>" />
                <div class="scopes">
                    <span class="scope"><i class="icon-search"></i></span>
                    <span class="clear-search"><i class="icon-x"></i></span>
                    <span class="scope2"><i class="icon-search"></i></span>
                </div>
                <div class="ads-search-product"></div>
            </div>
        </form>
    </div>
</div>