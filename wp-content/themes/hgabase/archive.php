<?php get_header(); ?>

	<div class="container">
		<div class="row">
			<main role="main" class="md8">
				<!-- section -->
				<section>
					<h1><?php _e( 'Archives', 'html5blank' ); ?></h1>
					<?php get_template_part('loop'); ?>
					<?php get_template_part('pagination'); ?>
				</section>
				<!-- /section -->
			</main>
			<?php get_sidebar(); ?>
		</div><!-- row -->
	</div><!-- container -->

<?php get_footer(); ?>
