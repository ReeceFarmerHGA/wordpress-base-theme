<?php
/*
|--------------------------------------------------------------------------
| Archive.php
|--------------------------------------------------------------------------
|
| This file handles the main blogs feed page.  It will be used to paginate
| to older stories and is an essential page in the WordPress theme anatomy.
|
| @since 1.0.0
*/

if ( is_day() ) {
	$post_title = sprintf( __( 'Daily Archives: %s', 'hga-digital' ), get_the_date() );
} elseif ( is_month() ) {
	$post_title = sprintf( __( 'Monthly Archives: %s', 'hga-digital' ), get_the_date( 'F Y' ) );
} elseif ( is_year() ) {
	$post_title = sprintf( __( 'Yearly Archives: %s', 'hga-digital' ), get_the_date( 'Y' ) );
} else {
	$post_title = get_the_archive_title();
}

get_header(); ?>
<div id="primary" class="content-area">
	<main aria-label="Main Content" class="clearfix" id="main" tabindex="-1">
        <header>
            <h1 class="post-title"><?php echo esc_html( $post_title ); ?></h1>
        </header>
		<?php if( have_posts() ) : ?>
    
            <?php while ( have_posts() ) : the_post(); ?>
        
                <?php get_template_part( 'templates/content', 'archive' ); ?>
        
            <?php endwhile; ?>
            
            <?php the_posts_pagination(); ?>
    
        <?php else : ?>
            
            <?php get_template_part( 'templates/content', 'none' ); ?>
        
        <?php endif; ?>
	</main><!-- .site-main -->
</div><!-- .content-area -->
<?php get_sidebar( 'archive' ); ?>
<?php get_footer();
