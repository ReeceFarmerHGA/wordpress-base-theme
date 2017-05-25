<?php
/*
|--------------------------------------------------------------------------
| Header.php
|--------------------------------------------------------------------------
|
| This file handles the main header of each webpage including elements such
| as favicon's and touch icons held in the middle of our head tags.
|
| @since 1.0.0
*/
?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> <?php echo webpage_schema(); ?>>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<a href="#primary" class="sr-only sr-only-focusable">Skip to main content</a>
	<header aria-labelledby="navbar-brand" class="header" id="site-header" itemscope itemtype="http://schema.org/WPHeader">
		<?php get_template_part('templates/header', 'nav'); ?>
	</header>
