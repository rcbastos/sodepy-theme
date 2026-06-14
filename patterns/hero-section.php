<?php
/**
 * Title: Sección Hero Principal
 * Slug: sodepy/hero-section
 * Categories: sodepy, featured
 * Description: Hero de pantalla completa con video de fondo, título, subtítulo y botones CTA.
 * Keywords: hero, portada, inicio, video
 * Block Types: core/cover
 * Inserter: true
 */
?>
<!-- wp:group {"tagName":"section","className":"hero-section","anchor":"inicio","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0"}}},"layout":{"type":"default"}} -->
<section class="wp-block-group hero-section" id="inicio">

	<!-- wp:cover {"url":"","dimRatio":50,"overlayColor":"primary","isRepeated":false,"minHeight":100,"minHeightUnit":"vh","isDark":true,"className":"hero-cover","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100"}}}} -->
	<div class="wp-block-cover is-light hero-cover" style="min-height:100vh">
		<span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim"></span>

		<!-- VIDEO DE FONDO (el usuario reemplaza con su propio video) -->
		<video
			class="hero-bg-video"
			autoplay
			muted
			loop
			playsinline
			aria-hidden="true"
			poster="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-poster.jpg' ); ?>"
		>
			<source src="" type="video/mp4" data-src-placeholder="Reemplaza con la URL de tu video .mp4">
		</video>

		<div class="wp-block-cover__inner-container">

			<!-- wp:group {"layout":{"type":"constrained"},"style":{"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}}} -->
			<div class="wp-block-group">

				<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","rowGap":"var:preset|spacing|50"},"style":{"maxWidth":"720px"}} -->
				<div class="wp-block-group" style="max-width:720px">

					<!-- wp:paragraph {"textColor":"highlight","style":{"typography":{"fontSize":"var:preset|font-size|sm","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.15em"}}} -->
					<p class="has-highlight-color has-text-color"><?php esc_html_e( 'Soluciones y Desarrollos para Pymes', 'sodepy' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:heading {"level":1,"textColor":"base","style":{"typography":{"fontSize":"var:preset|font-size|hero","fontWeight":"800","lineHeight":"1.1"}}} -->
					<h1 class="wp-block-heading has-base-color has-text-color"><?php esc_html_e( 'Digitalizamos tu negocio para vender más y controlar mejor', 'sodepy' ); ?></h1>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"textColor":"base","style":{"typography":{"fontSize":"var:preset|font-size|lg"},"color":{"text":"rgba(244,246,248,0.85)"}}} -->
					<p style="color:rgba(244,246,248,0.85)"><?php esc_html_e( 'Somos expertos en transformación digital para pequeñas y medianas empresas. Tecnología real, resultados medibles.', 'sodepy' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|60"}}}} -->
					<div class="wp-block-buttons">
						<!-- wp:button {"backgroundColor":"highlight","textColor":"base","style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"2rem","right":"2rem"}}},"fontSize":"md"} -->
						<div class="wp-block-button">
							<a class="wp-block-button__link has-highlight-background-color has-base-color has-text-color has-background wp-element-button" href="#servicios" style="border-radius:6px">
								<?php esc_html_e( 'Ver servicios', 'sodepy' ); ?>
							</a>
						</div>
						<!-- /wp:button -->

						<!-- wp:button {"className":"is-style-outline","textColor":"base","style":{"border":{"radius":"6px","color":"rgba(255,255,255,0.6)","width":"2px"},"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"2rem","right":"2rem"}}},"fontSize":"md"} -->
						<div class="wp-block-button is-style-outline">
							<a class="wp-block-button__link has-base-color has-text-color wp-element-button" href="#contacto" style="border-radius:6px;border:2px solid rgba(255,255,255,0.6)">
								<?php esc_html_e( 'Solicitar presupuesto', 'sodepy' ); ?>
							</a>
						</div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		</div>

		<!-- Indicador de scroll -->
		<div class="hero-scroll-indicator" aria-hidden="true">
			<span class="hero-scroll-dot"></span>
		</div>

	</div>
	<!-- /wp:cover -->

</section>
<!-- /wp:group -->
