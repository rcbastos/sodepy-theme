<?php
defined( 'ABSPATH' ) || exit;

/**
 * Output dynamic <style> in <head> based on Cabecera customizer settings.
 */
add_action( 'wp_head', 'sodepy_header_dynamic_css', 20 );
function sodepy_header_dynamic_css(): void {

	/* ── Read settings ────────────────────────────── */
	$show_logo   = (bool) get_theme_mod( 'sodepy_show_logo', true );
	$logo_pos    = get_theme_mod( 'sodepy_logo_position', 'left' );
	$logo_w      = absint( get_theme_mod( 'sodepy_logo_width', 140 ) );

	$show_name   = (bool) get_theme_mod( 'sodepy_show_sitename', false );
	$name_pos    = get_theme_mod( 'sodepy_sitename_position', 'left' );
	$name_color  = sanitize_hex_color( get_theme_mod( 'sodepy_sitename_color', '#ffffff' ) ) ?: '#ffffff';
	$name_size   = (float) get_theme_mod( 'sodepy_sitename_size', 1.25 );
	$name_weight = get_theme_mod( 'sodepy_sitename_weight', '700' );

	$nav_pos     = get_theme_mod( 'sodepy_nav_position', 'center' );

	$hdr_width   = absint( get_theme_mod( 'sodepy_header_width', 1280 ) );
	$pad_y       = (float) get_theme_mod( 'sodepy_header_pad_y', 1.0 );
	$bg_type     = get_theme_mod( 'sodepy_header_bg_type', 'color' );
	$bg_color    = sanitize_hex_color( get_theme_mod( 'sodepy_header_bg_color', '#0A2650' ) ) ?: '#0A2650';
	$bg_image    = esc_url( get_theme_mod( 'sodepy_header_bg_image', '' ) );

	/* ── Column mapping ────────────────────────────── */
	$cols = [ 'left' => 1, 'center' => 2, 'right' => 3 ];
	$self = [ 'left' => 'start', 'center' => 'center', 'right' => 'end' ];

	$brand_col  = $cols[ $logo_pos ]  ?? 1;
	$brand_just = $self[ $logo_pos ]  ?? 'start';
	$nav_col    = $cols[ $nav_pos ]   ?? 2;
	$nav_just   = $self[ $nav_pos ]   ?? 'center';

	// CTA goes to the column not used by brand, defaulting to 3
	$cta_col    = ( $brand_col === 3 ) ? 1 : 3;
	$cta_just   = ( $cta_col === 1 ) ? 'start' : 'end';

	/* ── Build CSS ─────────────────────────────────── */
	$css = '';

	// Background
	if ( 'transparent' === $bg_type ) {
		$css .= '.site-header{background:transparent!important;}';
	} elseif ( 'image' === $bg_type && $bg_image ) {
		$css .= '.site-header{background:url(' . $bg_image . ') center/cover no-repeat!important;}';
	} else {
		$css .= '.site-header{background-color:' . $bg_color . '!important;}';
	}

	// Inner container width + padding
	$max_w = $hdr_width > 0 ? $hdr_width . 'px' : '100%';
	$css  .= '.header-inner{max-width:' . $max_w . ';padding-top:' . $pad_y . 'rem;padding-bottom:' . $pad_y . 'rem;}';

	// Grid positions
	$css .= '.header-brand{grid-column:' . $brand_col . ';justify-self:' . $brand_just . ';}';
	$css .= '.site-nav{grid-column:' . $nav_col . ';justify-self:' . $nav_just . ';}';
	$css .= '.header-cta{grid-column:' . $cta_col . ';justify-self:' . $cta_just . ';}';

	// Logo
	if ( ! $show_logo ) {
		$css .= '.site-header .wp-block-site-logo{display:none!important;}';
	} elseif ( $logo_w && $logo_w !== 140 ) {
		$css .= '.site-header .wp-block-site-logo img{width:' . $logo_w . 'px!important;height:auto!important;}';
	}

	// Site name
	if ( ! $show_name ) {
		$css .= '.site-header .wp-block-site-title{display:none!important;}';
	} else {
		$css .= '.site-header .wp-block-site-title{font-size:' . $name_size . 'rem!important;font-weight:' . absint( $name_weight ) . '!important;margin:0!important;}';
		$css .= '.site-header .wp-block-site-title a{color:' . $name_color . '!important;text-decoration:none!important;}';
		$css .= '.site-header .wp-block-site-title{color:' . $name_color . '!important;}';
	}

	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	echo '<style id="sodepy-hdr">' . $css . '</style>' . "\n";
}

/**
 * Change navigation overlayMenu based on Customizer nav style setting.
 * Targets only the header nav block (className = site-nav).
 */
add_filter( 'render_block_data', 'sodepy_header_nav_overlay', 10, 2 );
function sodepy_header_nav_overlay( array $block, array $source_block ): array {
	if ( ( $block['blockName'] ?? '' ) !== 'core/navigation' ) {
		return $block;
	}
	// Only affect the header navigation
	$class = $block['attrs']['className'] ?? '';
	if ( strpos( $class, 'site-nav' ) === false ) {
		return $block;
	}
	$style = get_theme_mod( 'sodepy_nav_style', 'horizontal' );
	$block['attrs']['overlayMenu'] = ( 'hamburger' === $style ) ? 'always' : 'never';
	return $block;
}
