<?php get_header(); ?>

<div class="container">
	<div class="row">
		<main role="main" class="md8">
			<!-- section -->
			<section class="posts-list">

				<h1><?php _e( 'Categories for ', 'hgabase' ); single_cat_title(); ?></h1>

				<?php get_template_part('loop'); ?>

			</section>
			<!-- /section -->
			
			<?php get_template_part('pagination'); ?>
		</main>
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>
