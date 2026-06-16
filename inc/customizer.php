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

	// Upload del logo — apunta al setting estándar de WordPress 'custom_logo'
	$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'sodepy_logo_upload', [
		'settings'  => 'custom_logo',
		'label'     => 'Subir / cambiar logo',
		'section'   => 'sodepy_s_logo',
		'mime_type' => 'image',
		'priority'  => 1,
	] ) );

	sodepy_add_setting( $wp_customize, 'sodepy_show_logo', true, 'wp_validate_boolean' );
	$wp_customize->add_control( 'sodepy_show_logo', [
		'label'    => 'Mostrar logo en el header',
		'section'  => 'sodepy_s_logo',
		'type'     => 'checkbox',
		'priority' => 2,
	] );

	sodepy_add_setting( $wp_customize, 'sodepy_logo_position', 'left', 'sodepy_san_position' );
	$wp_customize->add_control( 'sodepy_logo_position', [
		'label'    => 'Posición del logo',
		'section'  => 'sodepy_s_logo',
		'type'     => 'radio',
		'choices'  => [ 'left' => '← Izquierda', 'center' => '↔ Centro', 'right' => '→ Derecha' ],
		'priority' => 3,
	] );

	sodepy_add_setting( $wp_customize, 'sodepy_logo_width', 140, 'absint' );
	$wp_customize->add_control( 'sodepy_logo_width', [
		'label'       => 'Ancho del logo (px)',
		'section'     => 'sodepy_s_logo',
		'type'        => 'range',
		'input_attrs' => [ 'min' => 60, 'max' => 300, 'step' => 5 ],
		'priority'    => 4,
	] );

	/* ══════════════════════════════════════
	   Nombre del sitio
	══════════════════════════════════════ */
	$wp_customize->add_section( 'sodepy_s_nombre', [
		'title' => 'Nombre del sitio',
		'panel' => 'sodepy_cabecera',
	] );

	// Campo de texto que escribe directamente en el blogname de WordPress
	$wp_customize->add_control( 'sodepy_blogname_ctrl', [
		'settings'    => 'blogname',
		'label'       => 'Nombre del sitio',
		'description' => 'Este nombre aparece también en el título del navegador.',
		'section'     => 'sodepy_s_nombre',
		'type'        => 'text',
		'priority'    => 1,
	] );

	sodepy_add_setting( $wp_customize, 'sodepy_show_sitename', false, 'wp_validate_boolean' );
	$wp_customize->add_control( 'sodepy_show_sitename', [
		'label'    => 'Mostrar nombre en el header',
		'section'  => 'sodepy_s_nombre',
		'type'     => 'checkbox',
		'priority' => 2,
	] );

	sodepy_add_setting( $wp_customize, 'sodepy_sitename_position', 'left', 'sodepy_san_position' );
	$wp_customize->add_control( 'sodepy_sitename_position', [
		'label'    => 'Posición del nombre',
		'section'  => 'sodepy_s_nombre',
		'type'     => 'radio',
		'choices'  => [ 'left' => '← Izquierda', 'center' => '↔ Centro', 'right' => '→ Derecha' ],
		'priority' => 3,
	] );

	sodepy_add_setting( $wp_customize, 'sodepy_sitename_color', '#ffffff', 'sanitize_hex_color' );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sodepy_sitename_color', [
		'label'    => 'Color del nombre',
		'section'  => 'sodepy_s_nombre',
		'priority' => 4,
	] ) );

	sodepy_add_setting( $wp_customize, 'sodepy_sitename_size', 1.25, 'sodepy_san_float' );
	$wp_customize->add_control( 'sodepy_sitename_size', [
		'label'       => 'Tamaño (rem)',
		'section'     => 'sodepy_s_nombre',
		'type'        => 'range',
		'input_attrs' => [ 'min' => 0.75, 'max' => 3.0, 'step' => 0.05 ],
		'priority'    => 5,
	] );

	sodepy_add_setting( $wp_customize, 'sodepy_sitename_weight', '700', 'sodepy_san_weight' );
	$wp_customize->add_control( 'sodepy_sitename_weight', [
		'label'    => 'Grosor de la tipografía',
		'section'  => 'sodepy_s_nombre',
		'type'     => 'select',
		'choices'  => [
			'400' => 'Normal (400)',
			'500' => 'Medio (500)',
			'600' => 'Semi-negrita (600)',
			'700' => 'Negrita (700)',
			'800' => 'Extra negrita (800)',
		],
		'priority' => 6,
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
			'horizontal' => '— Horizontal (enlaces siempre visibles)',
			'hamburger'  => '≡ Hamburguesa (se despliega al pulsar)',
		],
	] );

	/* ══════════════════════════════════════
	   Botón CTA
	══════════════════════════════════════ */
	$wp_customize->add_section( 'sodepy_s_cta', [
		'title' => 'Botón CTA',
		'panel' => 'sodepy_cabecera',
	] );

	sodepy_add_setting( $wp_customize, 'sodepy_show_cta', true, 'wp_validate_boolean' );
	$wp_customize->add_control( 'sodepy_show_cta', [
		'label'    => 'Mostrar botón CTA',
		'section'  => 'sodepy_s_cta',
		'type'     => 'checkbox',
		'priority' => 1,
	] );

	sodepy_add_setting( $wp_customize, 'sodepy_cta_text', 'Solicitar info →', 'sanitize_text_field' );
	$wp_customize->add_control( 'sodepy_cta_text', [
		'label'    => 'Texto del botón',
		'section'  => 'sodepy_s_cta',
		'type'     => 'text',
		'priority' => 2,
	] );

	sodepy_add_setting( $wp_customize, 'sodepy_cta_url', '#contacto', 'esc_url_raw' );
	$wp_customize->add_control( 'sodepy_cta_url', [
		'label'    => 'Enlace del botón (URL o #ancla)',
		'section'  => 'sodepy_s_cta',
		'type'     => 'text',
		'priority' => 3,
	] );

	sodepy_add_setting( $wp_customize, 'sodepy_cta_position', 'right', 'sodepy_san_position' );
	$wp_customize->add_control( 'sodepy_cta_position', [
		'label'    => 'Posición del botón',
		'section'  => 'sodepy_s_cta',
		'type'     => 'radio',
		'choices'  => [ 'left' => '← Izquierda', 'center' => '↔ Centro', 'right' => '→ Derecha' ],
		'priority' => 4,
	] );

	sodepy_add_setting( $wp_customize, 'sodepy_cta_style', 'filled', 'sodepy_san_ctastyle' );
	$wp_customize->add_control( 'sodepy_cta_style', [
		'label'    => 'Estilo del botón',
		'section'  => 'sodepy_s_cta',
		'type'     => 'radio',
		'choices'  => [
			'filled'  => 'Relleno',
			'outline' => 'Contorno (outline)',
		],
		'priority' => 5,
	] );

	sodepy_add_setting( $wp_customize, 'sodepy_cta_bg_color', '#F28D0A', 'sanitize_hex_color' );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sodepy_cta_bg_color', [
		'label'       => 'Color de fondo del botón',
		'description' => 'Solo aplica en estilo "Relleno".',
		'section'     => 'sodepy_s_cta',
		'priority'    => 6,
	] ) );

	sodepy_add_setting( $wp_customize, 'sodepy_cta_text_color', '#ffffff', 'sanitize_hex_color' );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sodepy_cta_text_color', [
		'label'    => 'Color del texto del botón',
		'section'  => 'sodepy_s_cta',
		'priority' => 7,
	] ) );

	sodepy_add_setting( $wp_customize, 'sodepy_cta_border_radius', 6, 'absint' );
	$wp_customize->add_control( 'sodepy_cta_border_radius', [
		'label'       => 'Radio del borde (px)',
		'description' => '0 = esquinas rectas · 100 = píldora',
		'section'     => 'sodepy_s_cta',
		'type'        => 'range',
		'input_attrs' => [ 'min' => 0, 'max' => 100, 'step' => 2 ],
		'priority'    => 8,
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
		'label'       => 'Ancho máximo interior (px)',
		'description' => 'Escribe 0 para que ocupe todo el ancho.',
		'section'     => 'sodepy_s_design',
		'type'        => 'number',
		'input_attrs' => [ 'min' => 0, 'max' => 2560, 'step' => 10 ],
		'priority'    => 1,
	] );

	sodepy_add_setting( $wp_customize, 'sodepy_header_pad_y', 1.0, 'sodepy_san_float' );
	$wp_customize->add_control( 'sodepy_header_pad_y', [
		'label'    => 'Espaciado vertical (rem)',
		'section'  => 'sodepy_s_design',
		'type'     => 'range',
		'input_attrs' => [ 'min' => 0, 'max' => 4, 'step' => 0.25 ],
		'priority' => 2,
	] );

	// ── Fondo ───────────────────────────────────────────
	sodepy_add_setting( $wp_customize, 'sodepy_header_bg_type', 'color', 'sodepy_san_bgtype' );
	$wp_customize->add_control( 'sodepy_header_bg_type', [
		'label'       => 'Tipo de fondo',
		'description' => 'Selecciona qué tipo de fondo tendrá el header.',
		'section'     => 'sodepy_s_design',
		'type'        => 'select',
		'choices'     => [
			'transparent' => 'Sin fondo (transparente)',
			'color'       => 'Color sólido',
			'image'       => 'Imagen de fondo',
		],
		'priority'    => 10,
	] );

	sodepy_add_setting( $wp_customize, 'sodepy_header_bg_color', '#0A2650', 'sanitize_hex_color' );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sodepy_header_bg_color', [
		'label'       => 'Color de fondo',
		'description' => 'Solo aplica cuando el tipo es "Color sólido".',
		'section'     => 'sodepy_s_design',
		'priority'    => 11,
	] ) );

	sodepy_add_setting( $wp_customize, 'sodepy_header_bg_image', '', 'esc_url_raw' );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'sodepy_header_bg_image', [
		'label'       => 'Imagen de fondo',
		'description' => 'Solo aplica cuando el tipo es "Imagen de fondo".',
		'section'     => 'sodepy_s_design',
		'priority'    => 12,
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
function sodepy_san_ctastyle( string $v ): string {
	return in_array( $v, [ 'filled', 'outline' ], true ) ? $v : 'filled';
}
