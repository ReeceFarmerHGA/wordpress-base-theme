<?php get_header(); ?>

	<div class="container">
		<div class="row">
			<main role="main" class="md8">
				<!-- section -->
				<section>
					<h1><?php echo sprintf( __( '%s Search Results for ', 'hgabase' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
					<?php get_template_part('loop'); ?>
					<?php get_template_part('pagination'); ?>
				</section>
				<!-- /section -->
			</main>
			<?php get_sidebar(); ?>
		</div><!-- row -->
	</div><!-- container -->

<?php get_footer(); ?>
