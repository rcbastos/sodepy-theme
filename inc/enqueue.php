<?php
defined( 'ABSPATH' ) || exit;

add_action( 'wp_enqueue_scripts', 'sodepy_enqueue_assets' );
function sodepy_enqueue_assets(): void {
	wp_enqueue_style(
		'sodepy-theme',
		SODEPY_URI . '/assets/css/theme.min.css',
		[],
		SODEPY_VERSION
	);

	wp_enqueue_script(
		'sodepy-theme',
		SODEPY_URI . '/assets/js/theme.min.js',
		[],
		SODEPY_VERSION,
		[ 'strategy' => 'defer', 'in_footer' => true ]
	);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Pasar datos PHP → JS
	wp_localize_script( 'sodepy-theme', 'SodepyData', [
		'ajaxUrl' => admin_url( 'admin-ajax.php' ),
		'nonce'   => wp_create_nonce( 'sodepy_nonce' ),
		'isRtl'   => is_rtl(),
		'lang'    => get_locale(),
	] );
}

add_action( 'wp_enqueue_scripts', 'sodepy_preload_hero_image' );
function sodepy_preload_hero_image(): void {
	if ( ! is_front_page() ) {
		return;
	}

	echo '<link rel="preload" as="image" fetchpriority="high" href="'
		. esc_url( SODEPY_URI . '/assets/images/hero-placeholder.webp' )
		. '" />' . "\n";
}

add_action( 'wp_head', 'sodepy_critical_meta', 1 );
function sodepy_critical_meta(): void {
	echo '<meta name="viewport" content="width=device-width, initial-scale=1">' . "\n";
	echo '<meta name="theme-color" content="#0A2650">' . "\n";
}

add_action( 'admin_enqueue_scripts', 'sodepy_enqueue_editor_styles' );
function sodepy_enqueue_editor_styles(): void {
	wp_enqueue_style(
		'sodepy-editor',
		SODEPY_URI . '/assets/css/editor.css',
		[],
		SODEPY_VERSION
	);
}

add_editor_style( 'assets/css/editor.css' );

// Eliminar scripts de WordPress que no son necesarios en el front
add_action( 'wp_enqueue_scripts', 'sodepy_dequeue_unnecessary', 100 );
function sodepy_dequeue_unnecessary(): void {
	if ( ! is_admin() ) {
		wp_dequeue_style( 'wp-block-library-theme' );
		wp_dequeue_style( 'classic-theme-styles' );
	}
}
