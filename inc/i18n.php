<?php
defined( 'ABSPATH' ) || exit;

add_action( 'init', 'sodepy_i18n_setup' );
function sodepy_i18n_setup(): void {
	// Soporte WPML
	if ( defined( 'ICL_SITEPRESS_VERSION' ) ) {
		do_action( 'wpml_multilingual_options', null );
	}
}

// Compatibilidad Polylang: registrar strings traducibles
add_action( 'init', 'sodepy_register_polylang_strings' );
function sodepy_register_polylang_strings(): void {
	if ( ! function_exists( 'pll_register_string' ) ) {
		return;
	}

	$strings = [
		'Lema del sitio'          => get_bloginfo( 'description' ),
		'Texto botón hero'        => __( 'Ver servicios', 'sodepy' ),
		'Texto botón CTA'         => __( 'Solicitar presupuesto', 'sodepy' ),
		'Texto pie de copyright'  => __( '© {year} Sodepy. Todos los derechos reservados.', 'sodepy' ),
	];

	foreach ( $strings as $name => $string ) {
		pll_register_string( $name, $string, 'Sodepy Tema' );
	}
}

// Hreflang links para multilenguaje sin plugin (fallback básico)
add_action( 'wp_head', 'sodepy_hreflang_fallback', 5 );
function sodepy_hreflang_fallback(): void {
	// Si WPML o Polylang están activos, ellos ya añaden hreflang
	if ( defined( 'ICL_SITEPRESS_VERSION' ) || function_exists( 'pll_the_languages' ) ) {
		return;
	}

	echo '<link rel="alternate" hreflang="x-default" href="' . esc_url( home_url( '/' ) ) . '">' . "\n";
}
