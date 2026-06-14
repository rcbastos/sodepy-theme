<?php
/**
 * Title: Sección Hero Principal
 * Slug: sodepy/hero-section
 * Categories: sodepy, featured
 * Description: Hero de dos columnas con texto a la izquierda e imagen a la derecha.
 * Keywords: hero, portada, inicio, dos columnas
 * Inserter: true
 */
?>
<!-- wp:group {"tagName":"section","className":"hero-section","anchor":"inicio"} -->
<section class="wp-block-group hero-section" id="inicio">

	<!-- wp:columns {"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- wp:column {"width":"55%"} -->
		<div class="wp-block-column" style="flex-basis:55%">

			<!-- wp:group {"className":"hero-text"} -->
			<div class="wp-block-group hero-text">

				<!-- wp:paragraph {"textColor":"highlight","className":"hero-label"} -->
				<p class="has-highlight-color has-text-color hero-label">✏️ Tu categoría o sector de negocio</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":1,"textColor":"base","className":"hero-title"} -->
				<h1 class="wp-block-heading has-base-color has-text-color hero-title">Aquí va el título principal que resume tu propuesta de valor</h1>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"className":"hero-description"} -->
				<p class="hero-description">Aquí va la descripción breve de tu propuesta de valor. Explica qué haces, para quién y qué problema concreto resuelves en dos o tres líneas.</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"className":"hero-buttons"} -->
				<div class="wp-block-buttons hero-buttons">
					<!-- wp:button {"backgroundColor":"highlight","textColor":"base"} -->
					<div class="wp-block-button">
						<a class="wp-block-button__link has-highlight-background-color has-base-color has-text-color has-background wp-element-button" href="#contacto">Aquí va tu CTA principal</a>
					</div>
					<!-- /wp:button -->
					<!-- wp:button {"className":"is-style-outline hero-btn-outline","textColor":"base"} -->
					<div class="wp-block-button is-style-outline hero-btn-outline">
						<a class="wp-block-button__link has-base-color has-text-color wp-element-button" href="#servicios">Ver servicios →</a>
					</div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->

				<!-- wp:paragraph {"className":"hero-trust"} -->
				<p class="hero-trust">✓ Sin permanencia &nbsp;·&nbsp; ✓ Respuesta en 24h &nbsp;·&nbsp; ✓ Sin tecnicismos</p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"45%"} -->
		<div class="wp-block-column" style="flex-basis:45%">

			<!-- wp:group {"className":"hero-image-box"} -->
			<div class="wp-block-group hero-image-box">

				<!-- wp:paragraph {"align":"center","className":"hero-img-icon"} -->
				<p class="has-text-align-center hero-img-icon">🖼️</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"align":"center","className":"hero-img-label"} -->
				<p class="has-text-align-center hero-img-label">✏️ Aquí va tu imagen principal,<br>captura de pantalla o mockup de tu producto</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"align":"center","className":"hero-img-hint"} -->
				<p class="has-text-align-center hero-img-hint">Reemplaza este bloque con un bloque Imagen desde el editor</p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</section>
<!-- /wp:group -->
