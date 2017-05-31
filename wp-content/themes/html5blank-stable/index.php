<?php get_header(); ?>

<div class="container">
	<div class="row">
		<main role="main" class="sm6">
			<section>
				<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>
				<?php get_template_part('loop'); ?>
				<?php get_template_part('pagination'); ?>
			</section>
		</main>

		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>
