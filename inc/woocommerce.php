<?php
defined( 'ABSPATH' ) || exit;

add_action( 'after_setup_theme', 'sodepy_woocommerce_setup' );
function sodepy_woocommerce_setup(): void {
	add_theme_support( 'woocommerce', [
		'thumbnail_image_width' => 640,
		'gallery_thumbnail_image_width' => 160,
		'single_image_width'    => 800,
		'product_grid'          => [
			'default_rows'    => 3,
			'min_rows'        => 1,
			'default_columns' => 3,
			'min_columns'     => 1,
			'max_columns'     => 4,
		],
	] );

	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}

// Quitar sidebar por defecto de WooCommerce
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

// Ajustar número de productos por página
add_filter( 'loop_shop_per_page', fn() => 12, 20 );

// Breadcrumbs de WooCommerce con Schema
add_filter( 'woocommerce_breadcrumb_defaults', function( array $args ): array {
	$args['delimiter']   = ' <span aria-hidden="true">›</span> ';
	$args['wrap_before'] = '<nav class="wc-breadcrumb" aria-label="' . esc_attr__( 'Ruta de navegación', 'sodepy' ) . '"><ol itemscope itemtype="https://schema.org/BreadcrumbList">';
	$args['wrap_after']  = '</ol></nav>';
	$args['before']      = '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
	$args['after']       = '</li>';
	return $args;
} );

// Columnas en la tienda
add_filter( 'loop_shop_columns', fn() => 3 );

// Enqueue estilos WC personalizados
add_action( 'wp_enqueue_scripts', 'sodepy_woocommerce_styles' );
function sodepy_woocommerce_styles(): void {
	if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() && ! is_account_page() ) {
		return;
	}

	wp_enqueue_style(
		'sodepy-woocommerce',
		SODEPY_URI . '/assets/css/woocommerce.css',
		[ 'woocommerce-general' ],
		SODEPY_VERSION
	);
}

// Eliminar JS de WC en páginas que no lo necesitan
add_action( 'wp_enqueue_scripts', 'sodepy_dequeue_wc_scripts', 99 );
function sodepy_dequeue_wc_scripts(): void {
	if ( is_woocommerce() || is_cart() || is_checkout() || is_account_page() ) {
		return;
	}

	wp_dequeue_script( 'wc-cart-fragments' );
	wp_dequeue_script( 'woocommerce' );
	wp_dequeue_script( 'wc-add-to-cart' );
}

// Schema Product en páginas de producto individual
add_action( 'wp_head', 'sodepy_schema_product' );
function sodepy_schema_product(): void {
	if ( ! is_singular( 'product' ) ) {
		return;
	}

	global $post;
	$product = wc_get_product( $post->ID );

	if ( ! $product instanceof WC_Product ) {
		return;
	}

	$schema = [
		'@context'    => 'https://schema.org',
		'@type'       => 'Product',
		'name'        => $product->get_name(),
		'description' => wp_strip_all_tags( $product->get_description() ),
		'sku'         => $product->get_sku(),
		'url'         => get_permalink(),
		'image'       => wp_get_attachment_url( $product->get_image_id() ),
		'offers'      => [
			'@type'         => 'Offer',
			'price'         => $product->get_price(),
			'priceCurrency' => get_woocommerce_currency(),
			'availability'  => $product->is_in_stock()
				? 'https://schema.org/InStock'
				: 'https://schema.org/OutOfStock',
			'url'           => get_permalink(),
		],
	];

	$rating_count = $product->get_rating_count();
	if ( $rating_count > 0 ) {
		$schema['aggregateRating'] = [
			'@type'       => 'AggregateRating',
			'ratingValue' => $product->get_average_rating(),
			'reviewCount' => $rating_count,
		];
	}

	echo '<script type="application/ld+json">' . "\n"
		. wp_json_encode( $schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT )
		. "\n</script>\n";
}
