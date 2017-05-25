<?php
/*
|--------------------------------------------------------------------------
| Comments.php
|--------------------------------------------------------------------------
|
| This file contains the code for displaying comments and comment forms on
| the front end of our website.  Please note, this file may be superceded
| by a third-party plugin such as Disqus.
|
| @since 1.0.0
*/
if ( post_password_required() ) {
	return;
}
?>
<div id="comments" class="comments-area">
	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				$comments_number = get_comments_number();
				if ( 1 === $comments_number ) {
					printf( _x( 'One thought on &ldquo;%s&rdquo;', 'comments title', 'hga-digital' ), get_the_title() );
				} else {
					printf(
						_nx(
							'%1$s thought on &ldquo;%2$s&rdquo;',
							'%1$s thoughts on &ldquo;%2$s&rdquo;',
							$comments_number,
							'comments title',
							'hga-digital'
						),
						number_format_i18n( $comments_number ),
						get_the_title()
					);
				}
			?>
		</h2>
		<?php the_comments_navigation(); ?>
		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 42,
					'callback' 	  => 'comment_with_ratings'
				) );
			?>
		</ol><!-- .comment-list -->
		<?php the_comments_navigation(); ?>
	<?php endif; // Check for have_comments(). ?>
	<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'hga-digital' ); ?></p>
	<?php endif; ?>
	<?php
		comment_form( array(
			'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
			'title_reply_after'  => '</h2>',
		) );
	?>
</div><!-- .comments-area -->
