<form role="search" method="get" class="search-form business-search-form" action="<?php echo home_url( '/' ); ?>">
    <label>
        <p class="screen-reader-text"><?php echo _x( 'Search our Website:', 'label' ) ?></p>
        <div class="button-wrap">
	        <input type="search" class="search-field" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
	        <input type="submit" class="search-submit" value="<?php echo esc_attr_x( '', 'submit button' ) ?>" />
        </div>
    </label>
</form>