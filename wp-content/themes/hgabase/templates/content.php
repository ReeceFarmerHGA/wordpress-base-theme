<?php
/*
|--------------------------------------------------------------------------
| Content.php
|--------------------------------------------------------------------------
|
| This file contains the code that each news story on our Index.php file will
| be rendered in.  It doesn't call get_header or get_footer because it's 
| references using the get_template_part function.
|
| @since 1.0.0
*/
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
			<span class="sticky-post"><?php _e( 'Featured', 'hga-digital' ); ?></span>
		<?php endif; ?>
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->
	<?php the_excerpt(); ?>
	<?php the_post_thumbnail(); ?>
	<div class="entry-content">
		<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'hga-digital' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'hga-digital' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'hga-digital' ),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
