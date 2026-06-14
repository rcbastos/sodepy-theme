<?php
/**
 * Title: Sección Hero Principal
 * Slug: sodepy/hero-section
 * Categories: sodepy, featured
 * Description: Hero de pantalla completa con video o imagen de fondo, título, subtítulo y botones CTA.
 * Keywords: hero, portada, inicio, video
 * Inserter: true
 */
?>
<!-- wp:group {"tagName":"section","className":"hero-section","anchor":"inicio","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0"}},"color":{"background":"var:preset|color|primary"}},"layout":{"type":"default"}} -->
<section class="wp-block-group hero-section" id="inicio" style="background:var(--wp--preset--color--primary)">

	<!-- wp:html -->
	<!-- 💡 INSTRUCCIÓN: Reemplaza src="" con la URL de tu video .mp4 subido a la biblioteca de medios -->
	<video class="hero-bg-video" autoplay muted loop playsinline aria-hidden="true" poster="">
		<source src="" type="video/mp4">
	</video>
	<div class="hero-overlay" aria-hidden="true"></div>
	<!-- /wp:html -->

	<!-- wp:group {"className":"hero-content","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group hero-content">

		<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","rowGap":"var:preset|spacing|50"},"style":{"maxWidth":"720px"}} -->
		<div class="wp-block-group" style="max-width:720px">

			<!-- wp:paragraph {"textColor":"highlight","style":{"typography":{"fontSize":"var:preset|font-size|sm","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.15em"}}} -->
			<p class="has-highlight-color has-text-color">✏️ Aquí va tu nicho o especialidad</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"textColor":"base","style":{"typography":{"fontSize":"var:preset|font-size|hero","fontWeight":"800","lineHeight":"1.1"}}} -->
			<h1 class="wp-block-heading has-base-color has-text-color">Aquí va el título principal de tu página</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"color":{"text":"rgba(244,246,248,0.85)"},"typography":{"fontSize":"var:preset|font-size|lg"}}} -->
			<p style="color:rgba(244,246,248,0.85)">Aquí va la descripción de tu propuesta de valor. Explica brevemente qué haces, para quién y cómo ayudas a tus clientes.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|60"}}}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"highlight","textColor":"base","style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"2rem","right":"2rem"}}},"fontSize":"md"} -->
				<div class="wp-block-button">
					<a class="wp-block-button__link has-highlight-background-color has-base-color has-text-color has-background wp-element-button" href="#servicios" style="border-radius:6px">
						Aquí va tu CTA principal
					</a>
				</div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline","textColor":"base","style":{"border":{"radius":"6px","color":"rgba(255,255,255,0.6)","width":"2px"},"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"2rem","right":"2rem"}}},"fontSize":"md"} -->
				<div class="wp-block-button is-style-outline">
					<a class="wp-block-button__link has-base-color has-text-color wp-element-button" href="#contacto" style="border-radius:6px;border:2px solid rgba(255,255,255,0.6)">
						Aquí va tu CTA secundario
					</a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

	<!-- wp:html -->
	<div class="hero-scroll-indicator" aria-hidden="true">
		<span class="hero-scroll-dot"></span>
	</div>
	<!-- /wp:html -->

</section>
<!-- /wp:group -->
