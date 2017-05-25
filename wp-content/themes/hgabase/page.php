<?php
/*
|--------------------------------------------------------------------------
| Page.php
|--------------------------------------------------------------------------
|
| This file handles layout for static, non-post pages, and is a part of the
| essential WordPress anatomy.  It's becoming more relevant as the WordPress
| community expands beyond being just a blogging platform.
|
| @since 1.0.0
*/
get_header(); ?>
<div id="primary" class="content">
	<main aria-label="Main Content" class="clearfix" id="main" tabindex="-1">
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'templates/content', 'page' );

			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

		endwhile;
		?>
	</main>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>