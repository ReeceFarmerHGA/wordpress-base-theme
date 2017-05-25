<?php
/*
|--------------------------------------------------------------------------
| Index.php
|--------------------------------------------------------------------------
|
| This file handles the main blogs feed page.  It will be used to paginate
| to older stories and is an essential page in the WordPress theme anatomy.
|
| @since 1.0.0
*/
get_header(); ?>
<div id="primary" class="content-area">
	<main aria-label="Main Content" class="clearfix" id="main" tabindex="-1">
	<?php if ( have_posts() ) : ?>
		<?php if ( is_home() && !is_front_page() ) : ?>
			<header>
				<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
			</header>
		<?php endif; ?>
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'templates/content', get_post_format() );

		endwhile;
		the_posts_pagination( array(
			'prev_text'          => __( 'Previous page', 'hga-digital' ),
			'next_text'          => __( 'Next page', 'hga-digital' ),
			'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'hga-digital' ) . ' </span>',
		) );

	else :
		get_template_part( 'templates/content', 'none' );
	endif;
	?>
	</main><!-- .site-main -->
</div><!-- .content-area -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
