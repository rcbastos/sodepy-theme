<?php
/**
 * Title: Sección con Video Autoplay
 * Slug: sodepy/video-autoplay-section
 * Categories: sodepy, media
 * Description: Sección de pantalla completa con video que se reproduce automáticamente al entrar al viewport. Reutilizable.
 * Keywords: video, autoplay, scroll, section, media
 * Inserter: true
 */
?>
<!-- wp:group {"tagName":"section","className":"video-autoplay-section","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<section class="wp-block-group video-autoplay-section">

	<!-- wp:group {"className":"video-autoplay-wrapper","layout":{"type":"default"}} -->
	<div class="wp-block-group video-autoplay-wrapper">

		<!-- Contenedor del video: ocupa todo el ancho, altura configurable -->
		<div class="video-autoplay-container" style="position:relative;width:100%;min-height:80vh;overflow:hidden;background:#0A2650;">

			<video
				class="video-autoplay-media"
				muted
				loop
				playsinline
				preload="none"
				aria-hidden="true"
				style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;opacity:0;transition:opacity 0.6s ease;"
			>
				<source src="" type="video/mp4" data-src-placeholder="Reemplaza con la URL de tu video .mp4">
			</video>

			<!-- Overlay de color -->
			<div class="video-autoplay-overlay" style="position:absolute;inset:0;background:linear-gradient(135deg,rgba(10,38,80,0.75) 0%,rgba(23,110,181,0.4) 100%);z-index:1;"></div>

			<!-- Contenido sobre el video -->
			<div class="video-autoplay-content" style="position:relative;z-index:2;display:flex;align-items:center;justify-content:center;min-height:80vh;padding:4rem 2rem;">

				<!-- wp:group {"layout":{"type":"constrained"},"style":{"textAlign":"center","maxWidth":"800px"}} -->
				<div class="wp-block-group" style="text-align:center;max-width:800px;margin:0 auto;">

					<!-- wp:paragraph {"textColor":"highlight","style":{"typography":{"fontSize":"var:preset|font-size|sm","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.15em"}}} -->
					<p class="has-highlight-color has-text-color"><?php esc_html_e( 'Cómo trabajamos', 'sodepy' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:heading {"level":2,"textColor":"base","style":{"typography":{"fontSize":"var:preset|font-size|3xl","fontWeight":"700","lineHeight":"1.2"}}} -->
					<h2 class="wp-block-heading has-base-color has-text-color"><?php esc_html_e( 'Tecnología que transforma negocios reales', 'sodepy' ); ?></h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"style":{"color":{"text":"rgba(244,246,248,0.85)"},"typography":{"fontSize":"var:preset|font-size|lg"}}} -->
					<p style="color:rgba(244,246,248,0.85)"><?php esc_html_e( 'Cada solución que diseñamos está pensada para los desafíos específicos de las pymes. Sin complejidad innecesaria, sin costes ocultos.', 'sodepy' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
					<div class="wp-block-buttons">
						<!-- wp:button {"backgroundColor":"highlight","textColor":"base","style":{"border":{"radius":"6px"}}} -->
						<div class="wp-block-button">
							<a class="wp-block-button__link has-highlight-background-color has-base-color has-text-color has-background wp-element-button" href="#servicios" style="border-radius:6px">
								<?php esc_html_e( 'Conocer más', 'sodepy' ); ?>
							</a>
						</div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->

				</div>
				<!-- /wp:group -->

			</div>

		</div>

	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
