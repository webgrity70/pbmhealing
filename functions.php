<?php 

function theme_main_asstes(){

wp_enqueue_style( 'fontawesome', get_template_directory_uri().'/assets/font-awesome-4.7.0/css/font-awesome.min.css' );
wp_enqueue_style( 'mmenu', get_template_directory_uri().'/assets/plugin/mmenu-light-master/dist/mmenu-light.css' );

wp_enqueue_style( 'lightboxcss', get_template_directory_uri().'/assets/plugin/lightbox2/dist/css/lightbox.min.css' );

wp_enqueue_style( 'main-styleheet', get_stylesheet_uri() );
wp_enqueue_style( 'custom-styleheet', get_template_directory_uri().'/main.css' );


wp_enqueue_script( 'jquery3.5.1', get_template_directory_uri() . '/assets/js/jquery.min3.5.1.js', array(), '3.5.1', true );
wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/assets/bootstrap4.5/js/bootstrap.bundle.min.js', array(), '', true );
wp_enqueue_script( 'mmenu-main', get_template_directory_uri() . '/assets/plugin/mmenu-light-master/dist/mmenu-light.js', array(), '', true );
wp_enqueue_script( 'mmenu-polyfill', get_template_directory_uri() . '/assets/plugin/mmenu-light-master/dist/mmenu-light.polyfills.js', array(), '', true );

wp_enqueue_script( 'owlcarousel', get_template_directory_uri() . '/assets/plugin/OwlCarousel2-2.3.4/dist/owl.carousel.min.js', array(), '', true );
wp_enqueue_script( 'lightboxjs', get_template_directory_uri() . '/assets/plugin/lightbox2/dist/js/lightbox.min.js', array(), '', true );


wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom.js', array(), false, true );

}


add_action( 'wp_enqueue_scripts', 'theme_main_asstes' );



if ( ! function_exists( 'theme_setup' ) ) :
	function theme_setup() {	

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
				// This theme uses wp_nav_menu() in two locations.

		register_nav_menus(

			array(
				'menu-1' => __( 'Primary', 'hello-theme' ),
                'footer-menu' => __( 'Footer Menu', 'hello-theme' )
			)

		);


		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */

		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
			)
		);

		add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );
		// Add support for editor styles.
		add_theme_support( 'editor-styles' );
		add_theme_support( 'widgets' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );
		// Add custom editor font sizes.	

	}

endif;

add_action( 'after_setup_theme', 'theme_setup' );


function register_sidebar_function() {

    register_sidebar( array(

        'name'          => __( 'Footer Nav', 'hello-theme' ),
        'id'            => 'footer-1',
        'description'   => __( 'Widgets in this area will be shown on footer.', 'hello-theme' ),
        'before_widget' => '<div class="menuFooter">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',

    ) );

    register_sidebar( array(

        'name'          => __( 'Recent Article', 'hello-theme' ),
        'id'            => 'recent-article',
        'description'   => __( 'Widgets in this area will be shown on right sidebar.', 'hello-theme' ),
        'before_widget' => '<div class="recentArticleWidget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',

    ) );

}

add_action( 'widgets_init', 'register_sidebar_function' );



// move comment form at bottom
function wpb_move_comment_field_to_bottom( $fields ) {
$comment_field = $fields['comment'];
$cookies = $fields['cookies'];
unset( $fields['comment'] );
unset( $fields['cookies'] );
$fields['comment'] = $comment_field;
$fields['cookies'] = $cookies;
return $fields;
}
 
add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom');

