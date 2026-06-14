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
<!-- wp:group {"tagName":"section","className":"hero-section","anchor":"inicio","style":{"color":{"background":"var:preset|color|primary"},"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group hero-section" id="inicio" style="background:var(--wp--preset--color--primary)">

	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|70","left":"var:preset|spacing|80"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">

			<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","rowGap":"var:preset|spacing|50"}} -->
			<div class="wp-block-group">

				<!-- wp:paragraph {"textColor":"highlight","className":"hero-label","style":{"typography":{"fontSize":"var:preset|font-size|xs","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.15em"}}} -->
				<p class="has-highlight-color has-text-color hero-label">✏️ Tu categoría o sector de negocio</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":1,"textColor":"base","style":{"typography":{"fontSize":"var:preset|font-size|hero","fontWeight":"800","lineHeight":"1.1"}}} -->
				<h1 class="wp-block-heading has-base-color has-text-color">Aquí va el título principal que resume tu propuesta de valor</h1>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"color":{"text":"rgba(244,246,248,0.85)"},"typography":{"fontSize":"var:preset|font-size|lg","lineHeight":"1.65"}}} -->
				<p style="color:rgba(244,246,248,0.85);line-height:1.65">Aquí va la descripción breve de tu propuesta de valor. Explica qué haces, para quién y qué problema concreto resuelves en dos o tres líneas.</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|50"}}}} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"backgroundColor":"highlight","textColor":"base","style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"0.9rem","bottom":"0.9rem","left":"2rem","right":"2rem"}}}} -->
					<div class="wp-block-button">
						<a class="wp-block-button__link has-highlight-background-color has-base-color has-text-color has-background wp-element-button" href="#contacto" style="border-radius:6px">
							Aquí va tu CTA principal
						</a>
					</div>
					<!-- /wp:button -->
					<!-- wp:button {"className":"is-style-outline","textColor":"base","style":{"border":{"radius":"6px","color":"rgba(255,255,255,0.5)","width":"2px"},"spacing":{"padding":{"top":"0.9rem","bottom":"0.9rem","left":"2rem","right":"2rem"}}}} -->
					<div class="wp-block-button is-style-outline">
						<a class="wp-block-button__link has-base-color has-text-color wp-element-button" href="#servicios" style="border-radius:6px;border:2px solid rgba(255,255,255,0.5)">
							Ver servicios →
						</a>
					</div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->

				<!-- wp:paragraph {"className":"hero-trust-bar","style":{"color":{"text":"rgba(244,246,248,0.5)"},"typography":{"fontSize":"var:preset|font-size|xs"},"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
				<p class="hero-trust-bar" style="color:rgba(244,246,248,0.5);font-size:var(--wp--preset--font-size--xs);border-top:1px solid rgba(255,255,255,0.1);padding-top:1.25rem;margin-top:var(--wp--preset--spacing--50)">✓ Sin permanencia &nbsp;·&nbsp; ✓ Respuesta en 24h &nbsp;·&nbsp; ✓ Sin tecnicismos</p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">

			<!-- wp:group {"className":"hero-image-box","style":{"border":{"radius":"16px","color":"rgba(255,255,255,0.1)","width":"1px"},"color":{"background":"rgba(23,110,181,0.15)"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","rowGap":"var:preset|spacing|40"}} -->
			<div class="wp-block-group hero-image-box" style="border-radius:16px;border:1px solid rgba(255,255,255,0.1);background:rgba(23,110,181,0.15);padding:var(--wp--preset--spacing--70) var(--wp--preset--spacing--60)">

				<!-- wp:paragraph {"align":"center","style":{"color":{"text":"rgba(244,246,248,0.35)"},"typography":{"fontSize":"var:preset|font-size|hero"}}} -->
				<p class="has-text-align-center" style="color:rgba(244,246,248,0.35);font-size:var(--wp--preset--font-size--hero);line-height:1">🖼️</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"align":"center","style":{"color":{"text":"rgba(244,246,248,0.5)"},"typography":{"fontSize":"var:preset|font-size|sm","fontWeight":"500"}}} -->
				<p class="has-text-align-center" style="color:rgba(244,246,248,0.5);font-size:var(--wp--preset--font-size--sm)">✏️ Aquí va tu imagen principal,<br>captura de pantalla o mockup de tu producto</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"align":"center","style":{"color":{"text":"rgba(244,246,248,0.3)"},"typography":{"fontSize":"var:preset|font-size|xs"}}} -->
				<p class="has-text-align-center" style="color:rgba(244,246,248,0.3);font-size:var(--wp--preset--font-size--xs)">Reemplaza este bloque con un bloque Imagen desde el editor</p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</section>
<!-- /wp:group -->
