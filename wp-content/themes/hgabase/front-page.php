<?php
/*
|--------------------------------------------------------------------------
| Front-Page.php
|--------------------------------------------------------------------------
|
| This file handles layout for static, non-post pages, and is a part of the
| essential WordPress anatomy.  It's becoming more relevant as the WordPress
| community expands beyond being just a blogging platform.
|
| @since 1.0.0
*/
get_header();
?>
<div id="primary" class="content-area">
	<main aria-label="Main Content" class="clearfix" id="main" tabindex="-1">
		<div class="container">
			<?php
			if(have_posts()) : while(have_posts()) : the_post();

				the_content();

			endwhile; endif;
			?>
		</div>
    </main>
</div>
<?php get_footer(); ?>
