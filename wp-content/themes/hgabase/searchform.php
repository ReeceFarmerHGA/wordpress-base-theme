<?php
/**
 * Search form.
 *
 * @package HGA Digital
 * @author HGA
 */

// Since we can have multiple search forms per page we should generate a unique element ID.
$search_input_id = sprintf( 'search-input-%s', uniqid() );

?>

<form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="search" role="search">
	<label for="<?php echo esc_attr( $search_input_id ); ?>" class="screen-reader-text">
		<?php esc_html_e( 'Search for:', 'hga-digital' ); ?>
	</label>
	<input type="text" name="s" id="<?php echo esc_attr( $search_input_id ); ?>" value="<?php the_search_query(); ?>" />
	<button type="submit" value="<?php echo esc_attr__( 'Search', 'hga-digital' ); ?>">
		<?php esc_html_e( 'Search', 'hga-digital' ); ?>
	</button>
</form><!-- form.search -->
