<?php get_header(); ?>

	<div class="container">
		<div class="row">
			<main role="main" class="md8">
				<section>
					<h1><?php the_title(); ?></h1>
					<?php edit_post_link(); ?>
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<?php the_content(); ?>
							<?php comments_template(); // Remove if you don't want comments ?>
							<br class="clear">
						</article>
					<?php endwhile; ?>
					<?php else: ?>
						<article>
							<h2><?php _e( 'Sorry, nothing to display.', 'hgabase' ); ?></h2>
						</article>
					<?php endif; ?>
				</section>
			</main>
			<?php get_sidebar(); ?>
		</div>
	</div>

<?php get_footer(); ?>
