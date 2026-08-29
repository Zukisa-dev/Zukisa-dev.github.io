<?php
/**
 * SoftApps Digital Solutions — Theme Functions
 *
 * @package SoftApps_Digital
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'SOFTAPPS_THEME_VERSION', '1.0.0' );
define( 'SOFTAPPS_THEME_DIR', get_template_directory() );
define( 'SOFTAPPS_THEME_URI', get_template_directory_uri() );

/**
 * Theme setup.
 */
function softapps_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'custom-logo', array(
		'height'      => 80,
		'width'       => 240,
		'flex-height' => true,
		'flex-width'  => true,
	) );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'softapps-digital' ),
		'footer'  => __( 'Footer Menu', 'softapps-digital' ),
	) );
}
add_action( 'after_setup_theme', 'softapps_theme_setup' );

/**
 * Enqueue scripts and styles.
 */
function softapps_enqueue_assets() {
	wp_enqueue_style(
		'softapps-google-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Plus+Jakarta+Sans:wght@500;600;700&display=swap',
		array(),
		null
	);

	wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3' );
	wp_enqueue_style( 'bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css', array(), '1.11.3' );
	wp_enqueue_style( 'softapps-style', SOFTAPPS_THEME_URI . '/assets/css/style.css', array( 'bootstrap' ), SOFTAPPS_THEME_VERSION );

	wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), '5.3.3', true );
	wp_enqueue_script( 'softapps-script', SOFTAPPS_THEME_URI . '/assets/js/script-wp.js', array( 'bootstrap' ), SOFTAPPS_THEME_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'softapps_enqueue_assets' );

/**
 * Register widget areas.
 */
function softapps_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer Column', 'softapps-digital' ),
		'id'            => 'footer-1',
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'softapps_widgets_init' );

/**
 * Contact details — update here for site-wide use.
 */
function softapps_contact_phone() {
	return '063 160 4297';
}

function softapps_contact_phone_link() {
	return '+27631604297';
}

function softapps_contact_email() {
	return 'mabonazz@gmail.com';
}

function softapps_whatsapp_link() {
	return 'https://wa.me/27631604297?text=' . rawurlencode( 'Hello SoftApps Digital Solutions, I would like to enquire about your services.' );
}

/**
 * Future expansion: register GIS service category when ready.
 * Example: add 'gis-services' page template and nav item under Services dropdown.
 */

/**
 * Fallback navigation when no menu is assigned in WordPress admin.
 */
function softapps_fallback_menu() {
	$pages = array(
		'Home'     => home_url( '/' ),
		'About Us' => home_url( '/about-us/' ),
		'Services' => home_url( '/services/' ),
		'Training' => home_url( '/training/' ),
		'Contact'  => home_url( '/contact/' ),
	);
	echo '<ul class="navbar-nav ms-auto align-items-lg-center">';
	foreach ( $pages as $label => $url ) {
		printf(
			'<li class="nav-item"><a class="nav-link" href="%s">%s</a></li>',
			esc_url( $url ),
			esc_html( $label )
		);
	}
	echo '</ul>';
}
