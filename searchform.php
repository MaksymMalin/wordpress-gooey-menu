<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
		<input type="submit" class="fa fa-search button" value="&#xf002;<?php echo esc_attr_x( '', 'TWLA' ) ?>" />
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Поиск', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'TWLA' ) ?>" />
</form>