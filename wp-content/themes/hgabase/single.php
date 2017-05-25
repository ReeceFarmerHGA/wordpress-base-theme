<?php
/*
|--------------------------------------------------------------------------
| Single.php
|--------------------------------------------------------------------------
|
| This file handles the layout for a single post.  This template is normally
| called to from a hyperlink to an individual story from the Index.php file
|
| @since 1.0.0
*/
get_header(); ?>
<div id="primary" class="content-area">
	<main aria-label="Main Content" class="clearfix" id="main" tabindex="-1">
		<div class="container">
			<div class="row">
				<div class="sm9">
					<?php
					// Start the loop.
					while ( have_posts() ) : the_post();

						// Include the single post content template.
						get_template_part( 'templates/content', 'single' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}

						if ( is_singular( 'attachment' ) ) {
							// Parent post navigation.
							the_post_navigation( array(
								'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'hga-digital' ),
							) );
						} elseif ( is_singular( 'post' ) ) {
							
							the_tags();
							
							// Previous/next post navigation.
							the_post_navigation( array(
								'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'hga-digital' ) . '</span> ' .
									'<span class="sr-only sr-only-focusable">' . __( 'Next post:', 'hga-digital' ) . '</span> ' .
									'<span class="post-title">%title</span>',
								'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'hga-digital' ) . '</span> ' .
									'<span class="sr-only sr-only-focusable">' . __( 'Previous post:', 'hga-digital' ) . '</span> ' .
									'<span class="post-title">%title</span>',
							) );
						}

					endwhile;
					?>
				</div>
			</div>
		</div>
	</main>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
