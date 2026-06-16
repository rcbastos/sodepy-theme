<?php
defined( 'ABSPATH' ) || exit;

/**
 * Dynamic <style> in <head> — background, width, logo, sitename, CTA button styles.
 * Grid-column assignments removed: positioning is now handled by the zone builder.
 */
add_action( 'wp_head', 'sodepy_header_dynamic_css', 20 );
function sodepy_header_dynamic_css(): void {

	$show_logo   = (bool) get_theme_mod( 'sodepy_show_logo', true );
	$logo_w      = absint( get_theme_mod( 'sodepy_logo_width', 140 ) );

	$show_name   = (bool) get_theme_mod( 'sodepy_show_sitename', false );
	$name_color  = sanitize_hex_color( get_theme_mod( 'sodepy_sitename_color', '#ffffff' ) ) ?: '#ffffff';
	$name_size   = (float) get_theme_mod( 'sodepy_sitename_size', 1.25 );
	$name_weight = get_theme_mod( 'sodepy_sitename_weight', '700' );

	$cta_bg      = sanitize_hex_color( get_theme_mod( 'sodepy_cta_bg_color', '#F28D0A' ) ) ?: '#F28D0A';
	$cta_color   = sanitize_hex_color( get_theme_mod( 'sodepy_cta_text_color', '#ffffff' ) ) ?: '#ffffff';
	$cta_radius  = absint( get_theme_mod( 'sodepy_cta_border_radius', 6 ) );
	$cta_style   = get_theme_mod( 'sodepy_cta_style', 'filled' );

	$hdr_width   = absint( get_theme_mod( 'sodepy_header_width', 1280 ) );
	$pad_y       = (float) get_theme_mod( 'sodepy_header_pad_y', 1.0 );
	$bg_type     = get_theme_mod( 'sodepy_header_bg_type', 'color' );
	$bg_color    = sanitize_hex_color( get_theme_mod( 'sodepy_header_bg_color', '#0A2650' ) ) ?: '#0A2650';
	$bg_image    = esc_url( get_theme_mod( 'sodepy_header_bg_image', '' ) );

	$css = '';

	// Background
	if ( 'transparent' === $bg_type ) {
		$css .= '.site-header{background:transparent!important;}';
	} elseif ( 'image' === $bg_type && $bg_image ) {
		$css .= '.site-header{background:url(' . $bg_image . ') center/cover no-repeat!important;}';
	} else {
		$css .= '.site-header{background-color:' . $bg_color . '!important;}';
	}

	// Inner width + padding
	$max_w = $hdr_width > 0 ? $hdr_width . 'px' : '100%';
	$css  .= '.header-inner{max-width:' . $max_w . ';padding-top:' . $pad_y . 'rem;padding-bottom:' . $pad_y . 'rem;}';

	// Logo
	if ( ! $show_logo ) {
		$css .= '.sodepy-logo{display:none!important;}';
	} elseif ( $logo_w && $logo_w !== 140 ) {
		$css .= '.sodepy-logo img{width:' . $logo_w . 'px!important;}';
	}

	// Site name
	if ( ! $show_name ) {
		$css .= '.site-header .wp-block-site-title{display:none!important;}';
	} else {
		$css .= '.site-header .wp-block-site-title{font-size:' . $name_size . 'rem!important;font-weight:' . absint( $name_weight ) . '!important;margin:0!important;}';
		$css .= '.site-header .wp-block-site-title,.site-header .wp-block-site-title a{color:' . $name_color . '!important;text-decoration:none!important;}';
	}

	// CTA button styles
	if ( 'outline' === $cta_style ) {
		$css .= '.header-btn-cta{background:transparent!important;border:2px solid ' . $cta_color . '!important;color:' . $cta_color . '!important;}';
		$css .= '.header-btn-cta:hover{background:' . $cta_color . '!important;color:#0A2650!important;}';
	} else {
		$css .= '.header-btn-cta{background-color:' . $cta_bg . '!important;color:' . $cta_color . '!important;border:2px solid transparent!important;}';
		$css .= '.header-btn-cta:hover{filter:brightness(1.1);}';
	}
	$css .= '.header-btn-cta{border-radius:' . $cta_radius . 'px!important;}';

	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	echo '<style id="sodepy-hdr">' . $css . '</style>' . "\n";
}

/**
 * Replace wp-block-site-logo with clean <img> — no block wrapper, no stray backgrounds.
 */
add_filter( 'render_block', 'sodepy_render_site_logo', 10, 2 );
function sodepy_render_site_logo( string $block_content, array $block ): string {
	if ( ( $block['blockName'] ?? '' ) !== 'core/site-logo' ) {
		return $block_content;
	}

	$show = (bool) get_theme_mod( 'sodepy_show_logo', true );
	if ( ! $show ) {
		return '';
	}

	$logo_id = (int) get_theme_mod( 'custom_logo', 0 );
	if ( ! $logo_id ) {
		return '';
	}

	$width = absint( get_theme_mod( 'sodepy_logo_width', 140 ) );
	$src   = wp_get_attachment_image_url( $logo_id, 'full' );
	$alt   = trim( (string) get_post_meta( $logo_id, '_wp_attachment_image_alt', true ) ) ?: get_bloginfo( 'name' );

	if ( ! $src ) {
		return '';
	}

	return '<div class="sodepy-logo">'
		. '<a href="' . esc_url( home_url( '/' ) ) . '" rel="home" aria-label="' . esc_attr( $alt ) . '">'
		. '<img src="' . esc_url( $src ) . '" alt="' . esc_attr( $alt ) . '" width="' . $width . '" loading="eager" decoding="async" style="height:auto;display:block;">'
		. '</a></div>';
}

/**
 * Inject CTA button into .header-cta (priority 10 — before zone capture at 11).
 */
add_filter( 'render_block', 'sodepy_inject_header_cta', 10, 2 );
function sodepy_inject_header_cta( string $block_content, array $block ): string {
	if ( ( $block['blockName'] ?? '' ) !== 'core/group' ) {
		return $block_content;
	}
	if ( strpos( $block['attrs']['className'] ?? '', 'header-cta' ) === false ) {
		return $block_content;
	}

	$show = (bool) get_theme_mod( 'sodepy_show_cta', true );
	if ( ! $show ) {
		return '<div class="wp-block-group header-cta"></div>';
	}

	$text = esc_html( get_theme_mod( 'sodepy_cta_text', 'Solicitar info →' ) );
	$url  = esc_url( get_theme_mod( 'sodepy_cta_url', '#contacto' ) );

	return '<div class="wp-block-group header-cta">'
		. '<a class="header-btn-cta" href="' . $url . '">' . $text . '</a>'
		. '</div>';
}

/**
 * Zone builder (priority 11).
 *
 * Logo and site-name are captured as INDEPENDENT zone elements so each can be
 * positioned separately via Customizer. The header-brand wrapper is discarded.
 *
 * Priority 10 filters (logo replacement, CTA injection) fire first, so we
 * always capture the final HTML for each element.
 *
 * Zone rules:
 *   – Each element goes to left / center / right per its Customizer setting.
 *   – Multiple elements in the same zone sit side-by-side (flex row, no wrapping).
 *   – Left/right zones flex-grow; center is auto-width → stays truly centered.
 */
add_filter( 'render_block', 'sodepy_zone_builder', 11, 2 );
function sodepy_zone_builder( string $content, array $block ): string {
	static $els = [];

	$name  = $block['blockName'] ?? '';
	$class = $block['attrs']['className'] ?? '';

	// ── Capture individual header elements ────────────

	// Logo — scoped by 'header-logo' class added in header.html
	if ( 'core/site-logo' === $name && strpos( $class, 'header-logo' ) !== false ) {
		$els['logo'] = $content;
		return $content;
	}

	// Site name — scoped by 'header-site-title' class in header.html
	if ( 'core/site-title' === $name && strpos( $class, 'header-site-title' ) !== false ) {
		$els['sitename'] = $content;
		return $content;
	}

	// Navigation
	if ( 'core/navigation' === $name && strpos( $class, 'site-nav' ) !== false ) {
		$els['nav'] = $content;
		return $content;
	}

	// CTA (already injected by sodepy_inject_header_cta at priority 10)
	if ( 'core/group' === $name && strpos( $class, 'header-cta' ) !== false ) {
		$els['cta'] = $content;
		return $content;
	}

	// header-brand wrapper: logo + sitename captured separately above → discard wrapper
	if ( 'core/group' === $name && strpos( $class, 'header-brand' ) !== false ) {
		return $content; // returned unchanged but NOT assigned to any zone
	}

	// ── Rebuild header-inner with zones ───────────────
	if ( 'core/group' !== $name || strpos( $class, 'header-inner' ) === false ) {
		return $content;
	}

	$logo_pos  = get_theme_mod( 'sodepy_logo_position', 'left' );
	$name_pos  = get_theme_mod( 'sodepy_sitename_position', 'left' );
	$nav_pos   = get_theme_mod( 'sodepy_nav_position', 'center' );
	$cta_pos   = get_theme_mod( 'sodepy_cta_position', 'right' );

	$show_logo     = (bool) get_theme_mod( 'sodepy_show_logo', true );
	$show_sitename = (bool) get_theme_mod( 'sodepy_show_sitename', false );
	$show_cta      = (bool) get_theme_mod( 'sodepy_show_cta', true );

	$zones = [ 'left' => [], 'center' => [], 'right' => [] ];

	if ( $show_logo && ! empty( $els['logo'] ) ) {
		$zones[ $logo_pos ][] = $els['logo'];
	}
	if ( $show_sitename && ! empty( $els['sitename'] ) ) {
		$zones[ $name_pos ][] = $els['sitename'];
	}
	if ( ! empty( $els['nav'] ) ) {
		$zones[ $nav_pos ][] = $els['nav'];
	}
	if ( $show_cta && ! empty( $els['cta'] ) ) {
		$zones[ $cta_pos ][] = $els['cta'];
	}

	$html = '<div class="wp-block-group header-inner">';
	foreach ( [ 'left', 'center', 'right' ] as $zone ) {
		$html .= '<div class="header-zone header-zone-' . $zone . '">';
		$html .= implode( '', $zones[ $zone ] );
		$html .= '</div>';
	}
	$html .= '</div>';

	$els = [];
	return $html;
}

/**
 * Change navigation overlayMenu based on Customizer nav style setting.
 */
add_filter( 'render_block_data', 'sodepy_header_nav_overlay', 10, 2 );
function sodepy_header_nav_overlay( array $block, array $source_block ): array {
	if ( ( $block['blockName'] ?? '' ) !== 'core/navigation' ) {
		return $block;
	}
	if ( strpos( $block['attrs']['className'] ?? '', 'site-nav' ) === false ) {
		return $block;
	}
	$style = get_theme_mod( 'sodepy_nav_style', 'horizontal' );
	$block['attrs']['overlayMenu'] = ( 'hamburger' === $style ) ? 'always' : 'never';
	return $block;
}
