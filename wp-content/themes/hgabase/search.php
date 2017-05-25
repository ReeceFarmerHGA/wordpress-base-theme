<?php
/**
 * Search results template.
 *
 * @package HGA Digital
 * @author HGA
 */

get_header(); ?>

<div id="content">

	<h1 class="post-title"><?php printf( esc_html__( 'Search results for "%s"', 'hga-digital' ), get_search_query() ); ?></h1>

	<?php if ( have_posts() ) : ?>

		<?php get_search_form(); ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'index' ); ?>

		<?php endwhile; ?>

		<?php the_posts_pagination(); ?>

	<?php else : ?>

		<p><?php printf( esc_html_e( 'Our apologies but there\'s nothing that matches your search for "%s"', 'hga-digital' ), get_search_query() ); ?></p>
		<?php get_search_form(); ?>

	<?php endif; ?>

</div><!-- #content -->

<?php get_footer();
