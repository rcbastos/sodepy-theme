<?php
defined( 'ABSPATH' ) || exit;

add_action( 'after_setup_theme', 'sodepy_setup' );
function sodepy_setup(): void {
	load_theme_textdomain( 'sodepy', SODEPY_DIR . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ] );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'custom-logo', [
		'height'               => 60,
		'width'                => 200,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => [ 'site-title', 'site-description' ],
		'unlink-homepage-logo' => true,
	] );

	add_image_size( 'sodepy-hero',      1920, 1080, true );
	add_image_size( 'sodepy-wide',      1280, 720,  true );
	add_image_size( 'sodepy-card',      640,  480,  true );
	add_image_size( 'sodepy-square',    600,  600,  true );
	add_image_size( 'sodepy-portrait',  480,  640,  true );
	add_image_size( 'sodepy-thumbnail', 320,  240,  true );

	register_nav_menus( [
		'primary'   => __( 'Menú principal', 'sodepy' ),
		'footer'    => __( 'Menú pie de página', 'sodepy' ),
		'secondary' => __( 'Menú secundario / legal', 'sodepy' ),
	] );

	sodepy_register_portfolio_cpt();
}

function sodepy_register_portfolio_cpt(): void {
	$labels = [
		'name'               => __( 'Portfolio', 'sodepy' ),
		'singular_name'      => __( 'Proyecto', 'sodepy' ),
		'add_new'            => __( 'Añadir proyecto', 'sodepy' ),
		'add_new_item'       => __( 'Añadir nuevo proyecto', 'sodepy' ),
		'edit_item'          => __( 'Editar proyecto', 'sodepy' ),
		'new_item'           => __( 'Nuevo proyecto', 'sodepy' ),
		'view_item'          => __( 'Ver proyecto', 'sodepy' ),
		'search_items'       => __( 'Buscar proyectos', 'sodepy' ),
		'not_found'          => __( 'No se encontraron proyectos', 'sodepy' ),
		'not_found_in_trash' => __( 'No hay proyectos en la papelera', 'sodepy' ),
		'menu_name'          => __( 'Portfolio', 'sodepy' ),
	];

	register_post_type( 'portfolio', [
		'labels'              => $labels,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'             => [ 'slug' => 'portfolio' ],
		'supports'            => [ 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ],
		'menu_icon'           => 'dashicons-portfolio',
		'show_in_rest'        => true,
		'taxonomies'          => [ 'portfolio_category' ],
		'template'            => [],
	] );

	register_taxonomy( 'portfolio_category', 'portfolio', [
		'labels'            => [
			'name'          => __( 'Categorías de portfolio', 'sodepy' ),
			'singular_name' => __( 'Categoría', 'sodepy' ),
		],
		'hierarchical'  => true,
		'public'        => true,
		'show_in_rest'  => true,
		'rewrite'       => [ 'slug' => 'portfolio-categoria' ],
	] );
}

add_filter( 'image_size_names_choose', 'sodepy_custom_image_sizes' );
function sodepy_custom_image_sizes( array $sizes ): array {
	return array_merge( $sizes, [
		'sodepy-hero'      => __( 'Hero (1920×1080)', 'sodepy' ),
		'sodepy-wide'      => __( 'Ancho (1280×720)', 'sodepy' ),
		'sodepy-card'      => __( 'Tarjeta (640×480)', 'sodepy' ),
		'sodepy-square'    => __( 'Cuadrado (600×600)', 'sodepy' ),
		'sodepy-portrait'  => __( 'Retrato (480×640)', 'sodepy' ),
		'sodepy-thumbnail' => __( 'Miniatura (320×240)', 'sodepy' ),
	] );
}

add_filter( 'excerpt_length', fn() => 25 );
add_filter( 'excerpt_more',   fn() => '&hellip;' );
