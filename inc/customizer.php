<?php
defined( 'ABSPATH' ) || exit;

add_action( 'customize_register', 'sodepy_customizer_header' );

function sodepy_customizer_header( WP_Customize_Manager $wp_customize ): void {

	/* ── PANEL ─────────────────────────────────────────── */
	$wp_customize->add_panel( 'sodepy_cabecera', [
		'title'    => 'Cabecera',
		'priority' => 25,
	] );

	/* ══════════════════════════════════════
	   Logo
	══════════════════════════════════════ */
	$wp_customize->add_section( 'sodepy_s_logo', [
		'title' => 'Logo',
		'panel' => 'sodepy_cabecera',
	] );

	sodepy_add_setting( $wp_customize, 'sodepy_show_logo', true, 'wp_validate_boolean' );
	$wp_customize->add_control( 'sodepy_show_logo', [
		'label'   => 'Mostrar logo',
		'section' => 'sodepy_s_logo',
		'type'    => 'checkbox',
	] );

	sodepy_add_setting( $wp_customize, 'sodepy_logo_position', 'left', 'sodepy_san_position' );
	$wp_customize->add_control( 'sodepy_logo_position', [
		'label'   => 'Posición del logo',
		'section' => 'sodepy_s_logo',
		'type'    => 'radio',
		'choices' => [ 'left' => '← Izquierda', 'center' => '↔ Centro', 'right' => '→ Derecha' ],
	] );

	sodepy_add_setting( $wp_customize, 'sodepy_logo_width', 140, 'absint' );
	$wp_customize->add_control( 'sodepy_logo_width', [
		'label'       => 'Ancho del logo (px)',
		'section'     => 'sodepy_s_logo',
		'type'        => 'range',
		'input_attrs' => [ 'min' => 60, 'max' => 300, 'step' => 5 ],
	] );

	/* ══════════════════════════════════════
	   Nombre del sitio
	══════════════════════════════════════ */
	$wp_customize->add_section( 'sodepy_s_nombre', [
		'title' => 'Nombre del sitio',
		'panel' => 'sodepy_cabecera',
	] );

	sodepy_add_setting( $wp_customize, 'sodepy_show_sitename', false, 'wp_validate_boolean' );
	$wp_customize->add_control( 'sodepy_show_sitename', [
		'label'   => 'Mostrar nombre del sitio',
		'section' => 'sodepy_s_nombre',
		'type'    => 'checkbox',
	] );

	sodepy_add_setting( $wp_customize, 'sodepy_sitename_position', 'left', 'sodepy_san_position' );
	$wp_customize->add_control( 'sodepy_sitename_position', [
		'label'   => 'Posición del nombre',
		'section' => 'sodepy_s_nombre',
		'type'    => 'radio',
		'choices' => [ 'left' => '← Izquierda', 'center' => '↔ Centro', 'right' => '→ Derecha' ],
	] );

	sodepy_add_setting( $wp_customize, 'sodepy_sitename_color', '#ffffff', 'sanitize_hex_color' );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sodepy_sitename_color', [
		'label'   => 'Color del nombre',
		'section' => 'sodepy_s_nombre',
	] ) );

	sodepy_add_setting( $wp_customize, 'sodepy_sitename_size', 1.25, 'sodepy_san_float' );
	$wp_customize->add_control( 'sodepy_sitename_size', [
		'label'       => 'Tamaño (rem)',
		'section'     => 'sodepy_s_nombre',
		'type'        => 'range',
		'input_attrs' => [ 'min' => 0.75, 'max' => 3.0, 'step' => 0.05 ],
	] );

	sodepy_add_setting( $wp_customize, 'sodepy_sitename_weight', '700', 'sodepy_san_weight' );
	$wp_customize->add_control( 'sodepy_sitename_weight', [
		'label'   => 'Grosor',
		'section' => 'sodepy_s_nombre',
		'type'    => 'select',
		'choices' => [
			'400' => 'Normal (400)',
			'500' => 'Medio (500)',
			'600' => 'Semi-negrita (600)',
			'700' => 'Negrita (700)',
			'800' => 'Extra negrita (800)',
		],
	] );

	/* ══════════════════════════════════════
	   Menú de navegación
	══════════════════════════════════════ */
	$wp_customize->add_section( 'sodepy_s_nav', [
		'title' => 'Menú de navegación',
		'panel' => 'sodepy_cabecera',
	] );

	sodepy_add_setting( $wp_customize, 'sodepy_nav_position', 'center', 'sodepy_san_position' );
	$wp_customize->add_control( 'sodepy_nav_position', [
		'label'   => 'Posición del menú',
		'section' => 'sodepy_s_nav',
		'type'    => 'radio',
		'choices' => [ 'left' => '← Izquierda', 'center' => '↔ Centro', 'right' => '→ Derecha' ],
	] );

	sodepy_add_setting( $wp_customize, 'sodepy_nav_style', 'horizontal', 'sodepy_san_navstyle' );
	$wp_customize->add_control( 'sodepy_nav_style', [
		'label'   => 'Estilo del menú',
		'section' => 'sodepy_s_nav',
		'type'    => 'radio',
		'choices' => [
			'horizontal' => '— Horizontal (siempre visible)',
			'hamburger'  => '≡ Hamburguesa (se despliega al pulsar)',
		],
	] );

	/* ══════════════════════════════════════
	   Diseño general
	══════════════════════════════════════ */
	$wp_customize->add_section( 'sodepy_s_design', [
		'title' => 'Diseño general',
		'panel' => 'sodepy_cabecera',
	] );

	sodepy_add_setting( $wp_customize, 'sodepy_header_width', 1280, 'absint' );
	$wp_customize->add_control( 'sodepy_header_width', [
		'label'       => 'Ancho máximo interior (px, 0 = completo)',
		'section'     => 'sodepy_s_design',
		'type'        => 'number',
		'input_attrs' => [ 'min' => 0, 'max' => 2560, 'step' => 10 ],
	] );

	sodepy_add_setting( $wp_customize, 'sodepy_header_pad_y', 1.0, 'sodepy_san_float' );
	$wp_customize->add_control( 'sodepy_header_pad_y', [
		'label'       => 'Espaciado vertical (rem)',
		'section'     => 'sodepy_s_design',
		'type'        => 'range',
		'input_attrs' => [ 'min' => 0, 'max' => 4, 'step' => 0.25 ],
	] );

	sodepy_add_setting( $wp_customize, 'sodepy_header_bg_type', 'color', 'sodepy_san_bgtype' );
	$wp_customize->add_control( 'sodepy_header_bg_type', [
		'label'   => 'Tipo de fondo',
		'section' => 'sodepy_s_design',
		'type'    => 'select',
		'choices' => [
			'transparent' => 'Sin fondo (transparente)',
			'color'       => 'Color sólido',
			'image'       => 'Imagen de fondo',
		],
	] );

	sodepy_add_setting( $wp_customize, 'sodepy_header_bg_color', '#0A2650', 'sanitize_hex_color' );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sodepy_header_bg_color', [
		'label'   => 'Color de fondo',
		'section' => 'sodepy_s_design',
	] ) );

	sodepy_add_setting( $wp_customize, 'sodepy_header_bg_image', '', 'esc_url_raw' );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'sodepy_header_bg_image', [
		'label'   => 'Imagen de fondo (cuando el tipo es "Imagen")',
		'section' => 'sodepy_s_design',
	] ) );
}

/* ── Helper: add setting with transport=refresh ───────── */
function sodepy_add_setting( WP_Customize_Manager $wpc, string $id, $default, string $sanitize ): void {
	$wpc->add_setting( $id, [
		'default'           => $default,
		'sanitize_callback' => $sanitize,
		'transport'         => 'refresh',
	] );
}

/* ── Sanitize callbacks ───────────────────────────────── */
function sodepy_san_position( string $v ): string {
	return in_array( $v, [ 'left', 'center', 'right' ], true ) ? $v : 'left';
}
function sodepy_san_navstyle( string $v ): string {
	return in_array( $v, [ 'horizontal', 'hamburger' ], true ) ? $v : 'horizontal';
}
function sodepy_san_bgtype( string $v ): string {
	return in_array( $v, [ 'transparent', 'color', 'image' ], true ) ? $v : 'color';
}
function sodepy_san_float( $v ): float {
	return is_numeric( $v ) ? (float) $v : 1.0;
}
function sodepy_san_weight( string $v ): string {
	return in_array( $v, [ '400', '500', '600', '700', '800' ], true ) ? $v : '700';
}
