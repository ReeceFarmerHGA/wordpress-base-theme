<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->

		<!-- post title -->
		<h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			<?php edit_post_link('<i class="fa fa-pencil" aria-hidden="true"></i>'); ?>
		</h2>
		<!-- /post title -->

		<!-- post details -->
		<ul class="post__details">
			<li class="author"><?php _e( 'By', 'hgabase' ); ?> <?php the_author_posts_link(); ?></li>
			<li class="date"><?php the_time('F j, Y'); ?></li>
			<li class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts <i class="fa fa-comment-o" aria-hidden="true"></i>', 'hgabase' ), __( '1 Comment <i class="fa fa-comment-o" aria-hidden="true"></i>', 'hgabase' ), __( '% Comments <i class="fa fa-comment-o" aria-hidden="true"></i>', 'hgabase' )); ?></li>
		</ul>
		<!-- /post details -->

		<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

	</article>
<?php endwhile; ?>

<?php else: ?>
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'hgabase' ); ?></h2>
	</article>
<?php endif; ?>
