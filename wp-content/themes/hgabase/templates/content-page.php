<?php
/*
|--------------------------------------------------------------------------
| Content-Page.php
|--------------------------------------------------------------------------
|
| This file handles displaying an individual page
|
| @since 1.0.0
*/
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>
	<?php the_post_thumbnail(); ?>
	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'hga-digital' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'hga-digital' ) . ' </span>%',
			'separator'   => '<span class="screen-reader-text">, </span>',
		) );
		?>
	</div>
	<?php
		edit_post_link(
			sprintf(
				__( 'Edit<span class="sr-only sr-only-focusable"> "%s"</span>', 'hga-digital' ),
				get_the_title()
			),
			'<footer class="entry-footer"><span class="edit-link">',
			'</span></footer>'
		);
	?>
</article>
