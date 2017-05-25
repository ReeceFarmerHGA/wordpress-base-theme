<?php
/**
 * 	hga-digital functions and definitions
 *
 * 	Set up the theme and provides some helper functions, which are used in the
 * 	theme as custom template tags. Others are attached to action and filter
 * 	hooks in WordPress to change core functionality.
 *
 * 	This document should be maintained in accordance with phpDocumentor syntax
 *
 * 	@package WordPress
 * 	@subpackage hga-digital
 * 	@since hga-digital 1.0.0
 */

/**
 * 	Set the content width
 *
 * @since hga-digital 1.0.0
 */
if( !isset( $content_width ) ) {
	$content_width = 1170;		// max width of the container for TWBS
}
	
/*
 * Running a function_exists check will allow the theme
 * to be used as the basis for a child theme at a later
 * date by preventing a fatal PHP error.
 *
 * @since hga-digital 1.0.0
 */
if( !function_exists( 'install_hga_digital' ) ) :
	/**
	 * Function to configure theme defaults and settings
	 *
	 * 	@since hga-digital 1.0.0
	 */
	function install_hga_digital() {
		
		/**
		 * Enable theme support
		 *
		 * Allow WordPress to help us out with images, titles, links
		 * and other customisation options that can be manipulated
		 * from within the Management System.
		 *
		 * @since hga-digital 1.0.0
		 */
		if (function_exists('add_theme_support')) {
	
			/**
			 * Add default posts and comments RSS feed links to head.
			 *
			 * @since hga-digital 1.0.0
			 */
			add_theme_support( 'automatic-feed-links' );
	
			/**
			 * Let WordPress manage the title of our pages
			 *
			 * @since hga-digital 1.0.0
			 */
			add_theme_support( 'title-tag' );

			/**
			 * Enable Post Thumbnail support and sets default thumbnail
			 * configurations - size, crop mode etc.
			 *
			 * 870px width works well for the col-*-9 max width of TWBS
			 * 400px height helps make the image less letterbox like.
			 *
			 * @since hga-digital 1.0.0
			 */
			add_theme_support( 'post-thumbnails' );
	
			// define the default thumbnail size
			set_post_thumbnail_size( 150, 150, true );
	
			// add in custom image sizes
			// add_image_size( 'handle', w, h, true );
			
			// turn on custom logo functionality
			add_theme_support( 'custom-logo', array(
				'height'      	=> 107,
				'width'       	=> 50,
				'flex-width' 	=> true,
				'flex-height' 	=> true,
				'header-text'	=> array('site-title', 'site-description'),
			));

			// Turn on valid HTML5 elements
			add_theme_support( 'html5', array(
				'search-form', 
				'comment-form', 
				'comment-list', 
				'gallery', 
				'caption'
			));
		
			/**
			 * Enable support for Post Formats.
			 *
			 * These can be removed in part or completely dependent on
			 * client requirements and requests.  They're included as they're
			 * useful when it comes to displaying elements front end.
			 *
			 * Recommended practice is to comment the lines out that you
			 * don't need or don't want.  That way you have them incase they're
			 * needed at a future point in time.
			 *
			 * @since hga-digital 1.0.0
			 */
			add_theme_support( 'post-formats', array(
				'video', 
				'quote', 
				'link', 
				'gallery', 
				'audio', 
			));
		
			/**
			 * Enable support for the custom header
			 *
			 * This has been added to make the theme a conforming WordPress theme
			 * based on guideline v20141222.
			 *
			 * @since hga-digital 1.0.0
			 */
			add_theme_support( 'custom-header', array(
				'default-image'          => '',
				'width'                  => 0,
				'height'                 => 0,
				'flex-height'            => false,
				'flex-width'             => false,
				'uploads'                => true,
				'random-default'         => false,
				'header-text'            => true,
				'default-text-color'     => '',
				'wp-head-callback'       => '',
				'admin-head-callback'    => '',
				'admin-preview-callback' => '',
			));
			
			/**
			 * Enable support for the custom backgrounds
			 *
			 * This has been added to make the theme a conforming WordPress theme
			 * based on guideline v20141222.
			 *
			 * @since hga-digital 1.0.0
			 */
			add_theme_support( 'custom-background', array(
				'default-color'          => '',
				'default-image'          => '',
				'default-repeat'         => '',
				'default-position-x'     => '',
				'default-attachment'     => '',
				'wp-head-callback'       => '_custom_background_cb',
				'admin-head-callback'    => '',
				'admin-preview-callback' => ''
			));	
		}
		
		/**
		 * Build the navigation for the site and update (add/remove)
		 * nav menus as is required as building continues.
		 *
		 * Don't forget to leave the trailing comma of the 
		 * register_nav_menus array
		 *
		 * @since hga-digital 1.0.0
		 */
		register_nav_menus( array(
			'primary' 	=> __( 'Header',	'hga-digital' ),
			'footer' 	=> __( 'Footer',	'hga-digital' ),
			'social'  	=> __( 'Social', 'hga-digital' ),
		));

		/**
		 * This theme styles the visual editor to resemble the theme style,
		 * specifically font, colors, icons, and column width.
		 */
		add_editor_style( array( get_template_directory_uri() . '/css/editor-style.css', hga_digital_fonts() ) );
	}
	
endif;

/**
 * This function is hooked into the after_setup_theme hook, which runs before 
 * the init hook. Twenty Fifteen identies that the init hook is too late for 
 * some features, such as indicating support for post thumbnails.
 *
 * @since hga-digital 1.0.0
 */
add_action( 'after_setup_theme', 'install_hga_digital' );

/**
 * 	Add in custom font families - i.e. Google Fonts
 *
 * 	@since hga-digital 1.0.0
 */
function hga_digital_fonts() {
	
	$font_family = array();

	$font_family[] = 'Open Sans:300,700';
	$font_family[] = 'Montserrat';

	$js_data = json_encode( array('google' => array('families' => $font_family)));
	
	return $js_data;
}

/**
 * 	Register our sidebar/widget
 *
 * 	@since hga-digital 1.0.0
 */
function sidebar_widgets() {
	register_sidebar( array(
		'name'          => __( 'Blog page sidebar', 'hga-digital' ),
		'id'            => 'blogsidebar',
		'description'   => __( 'Choose which widgets should appear in the blog sidebar.', 'hga-digital' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
}
add_action( 'widgets_init', 'sidebar_widgets' );

/**
 * Enqueue hga-digital stylesheets and javascript.
 *
 * 	@since hga-digital 1.0.0
 */
function load_theme_scripts() {

	/**
	 * Next we're going to call TWBS.  The theme style may override some default
	 * settings and therefore we need to make sure TWBS is loaded first so it can
	 * have it's styling superceded.
	 *
	 * @since hga-digital 1.0.0
	 */
	wp_enqueue_style( 'hga-digital-twbs', get_template_directory_uri() . '/css/bootstrap.min.css' );

	// Next load the theme style
	wp_enqueue_style( 'hga-digital-style', get_stylesheet_uri(), array('hga-digital-twbs'));
	
	// Get FontAwesome
	wp_enqueue_style( 'hga-digital-FA', get_template_directory_uri() . '/css/font-awesome.min.css', array('hga-digital-style'));

	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Load website scripts
	wp_enqueue_script( 
		'twbsJs', 
		get_template_directory_uri() . '/js/bootstrap.min.js', 
		array('jquery'), 
		null, 
		true 
	);
	wp_enqueue_script( 
		'scripts', 
		get_template_directory_uri() . '/js/functions.js', 
		array('jquery', 'twbsJs'), 
		null, 
		true 
	);
	wp_enqueue_script(
		'gWebFont',
		'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js',
		array(),
		null,
		true
	);
	wp_add_inline_script(
		'gWebFont',
		sprintf('WebFont.load(%s);', hga_digital_fonts()),
		'after'
	);
	
	// Load the IE conditionals
	wp_enqueue_style(
		'hga-digital-ie7',
		get_template_directory_uri() . '/css/ie7.css',
		array('hga-digital-twbs'),
		null,
		false
	);
	wp_enqueue_style(
		'hga-digital-ie8',
		get_template_directory_uri() . '/css/ie.css',
		array('hga-digital-twbs'),
		null,
		false
	);
	wp_enqueue_script(
		'hga-digital-html5',
		get_template_directory_uri() . '/js/html5.js',
		array(),
		null,
		false
	);
	wp_enqueue_script(
		'hga-digital-modernizr',
		get_template_directory_uri() . '/js/modernizr.custom.19145.js',
		array(),
		null,
		false
	);
	wp_style_add_data( 'hga-digital-ie7', 'conditional', 'lt IE 8' );
	wp_style_add_data( 'hga-digital-ie8', 'conditional', 'IE 8' );
	wp_script_add_data( 'hga-digital-html5', 'conditional', 'lt IE 9' );
	wp_script_add_data( 'hga-digital-modernizr', 'conditional', 'lt IE 9' );
	
}
add_action( 'wp_enqueue_scripts', 'load_theme_scripts' );

/**
 * 	Fetch any custom do_actions that can be used to extend the basic WordPress
 * functionality.
 *
 * @since hga-digital 1.0.0
 */
require_once get_template_directory() . '/lib/do_actions.php';

/**
 * 	Fetch any custom functions that are above and beyond the basic functionality
 * of the core WordPress product.  This include schema data etc.
 *
 * @since hga-digital 1.0.0
 */
require_once get_template_directory() . '/lib/custom_functions.php';

/**
 * 	Fetch the custom nav walker to enable us to associate a wp_nav_menu function
 * with the class name of our walker.
 *
 * @link https://github.com/twittem/wp-bootstrap-navwalker
 *
 * @since hga-digital 1.0.0
 */
require_once get_template_directory() . '/lib/wp_bootstrap_navwalker.php';
