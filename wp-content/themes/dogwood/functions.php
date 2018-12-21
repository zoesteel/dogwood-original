<?php
/**
 * Dogwood functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Dogwood
 */

if ( ! function_exists( 'dogwood_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function dogwood_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Dogwood, use a find and replace
	 * to change 'dogwood' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'dogwood', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size('adoptable', 300, 200, true);
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'dogwood' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'dogwood_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'dogwood_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dogwood_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'dogwood_content_width', 640 );
}
add_action( 'after_setup_theme', 'dogwood_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dogwood_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'dogwood' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'dogwood' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'dogwood_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
if( !is_admin() ){
	wp_deregister_script('jquery');
	wp_register_script('jquery', ("http://code.jquery.com/jquery-latest.min.js"), false, '');
	wp_enqueue_script('jquery');
}

function dogwood_scripts() {
	wp_enqueue_style( 'dogwood-style', get_stylesheet_uri() );

	wp_enqueue_style( 'boostrapcss', get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(), '20181213') ;

	wp_enqueue_style( 'slick-styles', get_stylesheet_directory_uri() . '/css/slick-theme.css', array(), $css_version);

	wp_enqueue_style( 'slick', get_stylesheet_directory_uri() . '/css/slick.css', array(), $css_version);

	wp_enqueue_script( 'dogwood-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'dogwood-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'dogwood-scrolltop', get_template_directory_uri() . '/js/scrolltop.js', array(), '20160620', true);

	wp_enqueue_script( 'dogwood-accordion', get_template_directory_uri() . '/js/accordion.js', array('jquery'), '20160620', true);

	wp_enqueue_script( 'dogwood-responsive-slides', get_template_directory_uri(). '/js/responsiveslides.min.js', array('jquery'), '20160620', true);

		
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', $js_version, true);

	wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array( 'jquery'), '20181213', true);

	wp_enqueue_script( 'bootstrapjs', get_template_directory_uri(). '/bootstrap/js/bootstrap.min.js', array( 'jquery'), '20181213', true);

}



add_action( 'wp_enqueue_scripts', 'dogwood_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/* -------------------------------------------
	Change 'Posts' in dashboard to 'Happy Tails'
 ---------------------------------------------*/
function dogwood_edit_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Happy Tails';
    $submenu['edit.php'][5][0] = 'Happy Tails';
    $submenu['edit.php'][10][0] = 'Add Happy Tails';
    // $submenu['edit.php'][16][0] = 'Happy Tails Tags';
    echo '';
}
function dogwood_edit_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Happy Tails';
    $labels->singular_name = 'Happy Tails';
    $labels->add_new = 'Add Happy Tails';
    $labels->add_new_item = 'Add Happy Tails';
    $labels->edit_item = 'Edit Happy Tails';
    $labels->new_item = 'Happy Tails';
    $labels->view_item = 'View Happy Tails';
    $labels->search_items = 'Search Happy Tails';
    $labels->not_found = 'No Happy Tails found';
    $labels->not_found_in_trash = 'No Happy Tails found in Trash';
    $labels->all_items = 'All Happy Tails';
    $labels->menu_name = 'Happy Tails';
    $labels->name_admin_bar = 'Happy Tails';
}
add_action( 'admin_menu', 'dogwood_edit_post_label' );
add_action( 'init', 'dogwood_edit_post_object' );

/* -----------------------------------
	Change 'Happy Tails' dashboard icon
 ------------------------------------*/
add_action( 'admin_menu', 'dogwood_edit_happy_tails_icon' );
function dogwood_edit_happy_tails_icon() {
  global $menu;
  foreach ( $menu as $key => $val ) {
    if ( 'Happy Tails' == $val[0] ) {
      $menu[$key][6] = 'dashicons-star-filled';
    }
  }
}

/* ---------------
	Change Excerpt
 -----------------*/
function mindset_excerpt_more( $more ) {
    return '<a class="read-more" href="' . get_permalink( get_the_ID() ) . '">...<br />Continue Reading...</a>';
}
add_filter( 'excerpt_more', 'mindset_excerpt_more' );

/* -------------------
	Change Login Logo
 ---------------------*/

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png);
            padding-bottom: 30px;
            background-size: 436px 123px;
            width: 436px;
            height: 123px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

/*----------------------------------------------------
	Customize WYSIWYG format buttons (aka TinyMCE buttons)
	----------------------------------------------------*/
//Remove FEW buttons from the first row
function dogwood_remove_buttons_first_row( $buttons ){
	$remove = array('alignleft', 'alignright', 'aligncenter', 'wp_adv' );//last one is the toggle
    
	return array_diff( $buttons, $remove );
 }
add_filter( 'mce_buttons','dogwood_remove_buttons_first_row' );

//Remove FEW buttons from the second row
function dogwood_buttons_second_row( $buttons ) {
 	$noneed_buttons = array(
			// 'underline',
			'alignjustify',
			'forecolor',
			'|',
			// 'pastetext',
			'pasteword',
			'removeformat',
			'charmap',
			'outdent',
			'indent',
			'undo',
			'redo',
			'wp_help',
			'wp_more',
            'formatselect'
		);
	
	return array_diff( $buttons, $noneed_buttons );
}
add_filter( 'mce_buttons_2', 'dogwood_buttons_second_row');

// Remove editor from 'Plugins' admin menu item
define( 'DISALLOW_FILE_EDIT', true );

// Remove metaboxes in 'Pages'
if (is_admin()) :
function my_remove_meta_boxes() {
    remove_meta_box('pageparentdiv', 'page', 'side');	// removes 'Page Attributes'
    remove_meta_box('commentsdiv', 'page', 'side');		// removes 'Comments'
    remove_meta_box('commentstatusdiv', 'page', 'side'); // removes 'Discussion' aka comments status
    remove_meta_box('postcustom', 'page', 'side');		// removes 'Custom Fields'
    remove_meta_box('slugdiv', 'page', 'side');			// removes 'Slugs'
    remove_meta_box('postimagediv', 'post', 'side'); 	// removes 'Featured Image'
}
add_action( 'admin_menu', 'my_remove_meta_boxes' );
endif;

// Remove unnecessary menus from 'Appearance'
add_action('admin_menu', 'remove_unnecessary_wordpress_menus', 999);
function remove_unnecessary_wordpress_menus(){
    global $submenu;
    foreach($submenu['themes.php'] as $menu_index => $theme_menu){
        if($theme_menu[0] == 'Header' || $theme_menu[0] == 'Background'
        	|| $theme_menu[0] == 'Widgets' || $theme_menu[0] == 'Customize')
        unset($submenu['themes.php'][$menu_index]);
    }
}

// Remove 'Comments' from admin menu
add_action( 'admin_menu', 'my_remove_admin_menus' );
function my_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}