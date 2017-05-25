<?php
/*
|--------------------------------------------------------------------------
| Content-Single.php
|--------------------------------------------------------------------------
|
| This file handles displaying an individual post
|
| @since 1.0.0
*/
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<?php if(has_post_thumbnail()) the_post_thumbnail(); ?>
	<div class="entry-content">
		<?php
			the_content();

			$images = get_field('images');

			if( $images ): ?>
			    <ul>
			        <?php foreach( $images as $image ): ?>
			            <li>
			                <a class="gallery-link" href="<?php echo $image['url']; ?>">
			                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
			                </a>
			                <p><?php echo $image['caption']; ?></p>
			            </li>
			        <?php endforeach; ?>
			    </ul>
			<?php endif;

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'hga-digital' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'hga-digital' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );

			if ( '' !== get_the_author_meta( 'description' ) ) {
				get_template_part( 'templates/author' );
			}
		?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">

	</footer>
</article>
