<?php get_header(); ?>

	<div class="container">
		<div class="row">
			<main role="main" class="md8">
				<!-- section -->
				<section>
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>
						<!-- article -->
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<!-- post thumbnail -->
							<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php the_post_thumbnail(); // Fullsize image for the single post ?>
								</a>
							<?php endif; ?>
							<!-- /post thumbnail -->
							<!-- post title -->
							<h1>
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
							</h1>
							<!-- /post title -->
							<!-- post details -->
							<ul class="post__details">
								<li class="author"><?php _e( 'By', 'hgabase' ); ?> <?php the_author_posts_link(); ?></li>
								<li class="date"><?php the_time('F j, Y'); ?></li>
								<li class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts <i class="fa fa-comment-o" aria-hidden="true"></i>', 'hgabase' ), __( '1 Comment <i class="fa fa-comment-o" aria-hidden="true"></i>', 'hgabase' ), __( '% Comments <i class="fa fa-comment-o" aria-hidden="true"></i>', 'hgabase' )); ?></li>
							</ul>
							<!-- /post details -->
							<?php the_content(); // Dynamic Content ?>
							<?php the_tags( __( 'Tags: ', 'hgabase' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
							<p><?php _e( 'Categorised in: ', 'hgabase' ); the_category(', '); // Separated by commas ?></p>
							<p><?php _e( 'This post was written by ', 'hgabase' ); the_author(); ?></p>
							<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
							<?php comments_template(); ?>
						</article>
						<!-- /article -->
					<?php endwhile; ?>

					<?php else: ?>
						<!-- article -->
						<article>
							<h1><?php _e( 'Sorry, nothing to display.', 'hgabase' ); ?></h1>
						</article>
						<!-- /article -->
					<?php endif; ?>
				</section>
				<!-- /section -->
			</main>
			<?php get_sidebar(); ?>
		</div><!-- row -->
	</div><!-- container -->

<?php get_footer(); ?>
