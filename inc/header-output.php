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
 * Floating CTA button — rendered in <footer>, visible on mobile/tablet via CSS.
 * Reuses .header-btn-cta so it inherits all Customizer color/radius styles.
 * Not rendered at all when sodepy_show_cta is false.
 */
add_action( 'wp_footer', 'sodepy_floating_cta' );
function sodepy_floating_cta(): void {
	if ( ! (bool) get_theme_mod( 'sodepy_show_cta', true ) ) {
		return;
	}
	$text = esc_html( get_theme_mod( 'sodepy_cta_text', 'Solicitar info →' ) );
	$url  = esc_url( get_theme_mod( 'sodepy_cta_url', '#contacto' ) );
	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	echo '<a href="' . $url . '" class="header-btn-cta floating-cta-btn" aria-label="' . esc_attr( $text ) . '">' . $text . '</a>' . "\n";
}

/**
 * Nav block data filter — sets overlayMenu attribute from Customizer.
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
	$block['attrs']['overlayMenu'] = ( 'hamburger' === $style ) ? 'always' : 'mobile';
	return $block;
}

/**
 * Walker that outputs nav-block-compatible HTML for classic wp_nav_menu items.
 * Matches the classes and structure WordPress navigation block produces so
 * our existing CSS and the nav block JS both work unchanged.
 */
class Sodepy_Nav_Walker extends Walker_Nav_Menu {

	public function start_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '<ul class="wp-block-navigation__submenu-container wp-block-navigation__container">';
	}

	public function end_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '</ul>';
	}

	public function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
		$item   = $data_object;
		$title  = apply_filters( 'the_title', $item->title, $item->ID );
		$url    = $item->url ?? '#';
		$target = ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) . '"' : '';
		$rel    = ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) . '"' : '';

		$li_class = 'wp-block-navigation-item wp-block-pages-list__item';
		if ( in_array( 'current-menu-item', (array) $item->classes, true ) ) {
			$li_class .= ' current-menu-item';
		}

		$output .= '<li class="' . esc_attr( $li_class ) . '">'
			. '<a class="wp-block-navigation-item__content" href="' . esc_url( $url ) . '"' . $target . $rel . '>'
			. esc_html( $title )
			. '</a>';
	}

	public function end_el( &$output, $data_object, $depth = 0, $args = null ) {
		$output .= '</li>';
	}
}

/**
 * Replace the rendered navigation block with a direct wp_nav_menu() render.
 *
 * Priority 9 — fires before sodepy_zone_builder (11) captures the element.
 *
 * Root cause this fixes: if the FSE header template part is stored in the
 * database (e.g. after using the Site Editor), it may have a `ref` pointing
 * to a wp_navigation post that contains old items ("Sample Page"). WordPress
 * resolves that ref BEFORE render_block fires, so modifying attrs afterwards
 * is too late. By replacing the full rendered output here, we guarantee the
 * header always shows the classic menu assigned to Apariencia → Menús →
 * Menú principal — regardless of database template state.
 */
add_filter( 'render_block', 'sodepy_nav_use_classic_menu', 9, 2 );
function sodepy_nav_use_classic_menu( string $content, array $block ): string {
	if ( ( $block['blockName'] ?? '' ) !== 'core/navigation' ) {
		return $content;
	}
	if ( strpos( $block['attrs']['className'] ?? '', 'site-nav' ) === false ) {
		return $content;
	}
	if ( ! has_nav_menu( 'primary' ) ) {
		return $content;
	}

	$nav_items = wp_nav_menu( [
		'theme_location' => 'primary',
		'container'      => false,
		'items_wrap'     => '%3$s',
		'echo'           => false,
		'fallback_cb'    => false,
		'walker'         => new Sodepy_Nav_Walker(),
	] );

	if ( ! $nav_items ) {
		return $content;
	}

	$style = get_theme_mod( 'sodepy_nav_style', 'horizontal' );
	$uid   = wp_unique_id( 'sodepy-nav-' );

	$open_class      = 'wp-block-navigation__responsive-container-open';
	$container_class = 'wp-block-navigation__responsive-container';
	if ( 'hamburger' === $style ) {
		$open_class      .= ' always-shown';
		$container_class .= ' hidden-by-default';
	}

	$icon_open  = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><rect x="4" y="7.5" width="16" height="1.5"/><rect x="4" y="11" width="16" height="1.5"/><rect x="4" y="14.5" width="16" height="1.5"/></svg>';
	$icon_close = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M13 11.8l6.1-6.3-1-1-6.1 6.2-6.1-6.2-1 1 6.1 6.3-6.5 6.7 1 1 6.5-6.6 6.5 6.6 1-1z"/></svg>';

	// phpcs:disable WordPress.Security.EscapeOutput.OutputNotEscaped
	return '<nav class="wp-block-navigation site-nav" aria-label="' . esc_attr__( 'Menú principal', 'sodepy' ) . '">'
		. '<button class="' . esc_attr( $open_class ) . '" aria-haspopup="true" aria-label="' . esc_attr__( 'Abrir menú', 'sodepy' ) . '" aria-controls="' . esc_attr( $uid ) . '" aria-expanded="false">'
		. $icon_open
		. '</button>'
		. '<div id="' . esc_attr( $uid ) . '" class="' . esc_attr( $container_class ) . '">'
		. '<div class="wp-block-navigation__responsive-container-content">'
		. '<button class="wp-block-navigation__responsive-container-close" aria-label="' . esc_attr__( 'Cerrar menú', 'sodepy' ) . '">'
		. $icon_close
		. '</button>'
		. '<ul class="wp-block-navigation__container">'
		. $nav_items
		. '</ul>'
		. '</div>'
		. '</div>'
		. '</nav>';
	// phpcs:enable
}
