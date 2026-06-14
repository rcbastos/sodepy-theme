<?php
defined( 'ABSPATH' ) || exit;

add_action( 'wp_head', 'sodepy_schema_organization', 5 );
function sodepy_schema_organization(): void {
	if ( ! is_front_page() ) {
		return;
	}

	$schema = [
		'@context' => 'https://schema.org',
		'@type'    => 'ProfessionalService',
		'name'     => get_bloginfo( 'name' ),
		'description' => get_bloginfo( 'description' ),
		'url'      => home_url( '/' ),
		'logo'     => [
			'@type'  => 'ImageObject',
			'url'    => SODEPY_URI . '/assets/images/logo.png',
			'width'  => 200,
			'height' => 60,
		],
		'sameAs'   => array_filter( [
			get_option( 'sodepy_social_linkedin', '' ),
			get_option( 'sodepy_social_instagram', '' ),
			get_option( 'sodepy_social_facebook', '' ),
			get_option( 'sodepy_social_twitter', '' ),
		] ),
		'address'  => [
			'@type'           => 'PostalAddress',
			'addressCountry'  => get_option( 'sodepy_country', 'ES' ),
		],
		'contactPoint' => [
			'@type'             => 'ContactPoint',
			'contactType'       => 'customer service',
			'availableLanguage' => [ 'Spanish', 'English' ],
		],
	];

	$email = get_option( 'admin_email' );
	if ( $email ) {
		$schema['email'] = sanitize_email( $email );
	}

	echo '<script type="application/ld+json">' . "\n"
		. wp_json_encode( $schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT )
		. "\n</script>\n";
}

add_action( 'wp_head', 'sodepy_schema_breadcrumbs', 5 );
function sodepy_schema_breadcrumbs(): void {
	if ( is_front_page() ) {
		return;
	}

	$items = [ [ 'name' => __( 'Inicio', 'sodepy' ), 'url' => home_url( '/' ) ] ];

	if ( is_singular( 'portfolio' ) ) {
		$items[] = [ 'name' => __( 'Portfolio', 'sodepy' ), 'url' => home_url( '/portfolio/' ) ];
		$items[] = [ 'name' => get_the_title(), 'url' => get_permalink() ];
	} elseif ( is_singular( 'product' ) ) {
		$items[] = [ 'name' => __( 'Tienda', 'sodepy' ), 'url' => wc_get_page_permalink( 'shop' ) ];
		$items[] = [ 'name' => get_the_title(), 'url' => get_permalink() ];
	} elseif ( is_singular() ) {
		$items[] = [ 'name' => get_the_title(), 'url' => get_permalink() ];
	} elseif ( is_archive() ) {
		$items[] = [ 'name' => get_the_archive_title(), 'url' => get_permalink() ];
	}

	$list_items = [];
	foreach ( $items as $i => $item ) {
		$list_items[] = [
			'@type'    => 'ListItem',
			'position' => $i + 1,
			'name'     => $item['name'],
			'item'     => $item['url'],
		];
	}

	$schema = [
		'@context'        => 'https://schema.org',
		'@type'           => 'BreadcrumbList',
		'itemListElement' => $list_items,
	];

	echo '<script type="application/ld+json">' . "\n"
		. wp_json_encode( $schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT )
		. "\n</script>\n";
}

add_action( 'wp_head', 'sodepy_open_graph', 5 );
function sodepy_open_graph(): void {
	global $post;

	$title       = is_singular() ? get_the_title() : get_bloginfo( 'name' );
	$description = is_singular() && $post
		? wp_strip_all_tags( get_the_excerpt() )
		: get_bloginfo( 'description' );
	$url         = is_singular() ? get_permalink() : home_url( '/' );
	$image       = is_singular() && has_post_thumbnail()
		? get_the_post_thumbnail_url( null, 'sodepy-wide' )
		: SODEPY_URI . '/assets/images/og-default.jpg';
	$type        = is_singular( [ 'post' ] ) ? 'article' : 'website';

	$og = [
		'og:type'                => $type,
		'og:url'                 => $url,
		'og:title'               => $title,
		'og:description'         => $description,
		'og:image'               => $image,
		'og:site_name'           => get_bloginfo( 'name' ),
		'og:locale'              => str_replace( '_', '-', get_locale() ),
		'twitter:card'           => 'summary_large_image',
		'twitter:title'          => $title,
		'twitter:description'    => $description,
		'twitter:image'          => $image,
	];

	foreach ( $og as $prop => $content ) {
		if ( empty( $content ) ) {
			continue;
		}
		$attr = str_starts_with( $prop, 'twitter:' ) ? 'name' : 'property';
		echo '<meta ' . esc_attr( $attr ) . '="' . esc_attr( $prop ) . '" content="' . esc_attr( $content ) . '">' . "\n";
	}
}
