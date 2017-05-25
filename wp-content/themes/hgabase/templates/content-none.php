<?php
/*
|--------------------------------------------------------------------------
| Content-None.php
|--------------------------------------------------------------------------
|
| This file handles displaying an error when no content is found
|
| @since 1.0.0
*/
?>
<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php _e( 'Whoops! Nothing was found...', 'hga-digital' ); ?></h1>
	</header>
	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'hga-digital' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'hga-digital' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching might be able to help?', 'hga-digital' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div>
</section>
