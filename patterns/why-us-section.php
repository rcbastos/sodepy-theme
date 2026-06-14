<?php
/**
 * Title: Por Qué Elegirnos
 * Slug: sodepy/why-us-section
 * Categories: sodepy, featured
 * Description: Sección con 6 razones o diferenciadores de la empresa.
 * Keywords: por qué, diferenciadores, ventajas, razones
 * Inserter: true
 */
?>
<!-- wp:group {"tagName":"section","className":"why-us-section","anchor":"nosotros","style":{"color":{"background":"var:preset|color|base"},"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group why-us-section" id="nosotros" style="background:var(--wp--preset--color--base)">

	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"var:preset|spacing|100"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- Columna izquierda: título + descripción -->
		<!-- wp:column {"verticalAlignment":"center","width":"38%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:38%">
			<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","rowGap":"var:preset|spacing|50"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"textColor":"highlight","style":{"typography":{"fontSize":"var:preset|font-size|xs","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.15em"}}} -->
				<p class="has-highlight-color has-text-color">✏️ Aquí va la etiqueta (ej: ¿Por qué elegirnos?)</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"textColor":"primary","style":{"typography":{"fontSize":"var:preset|font-size|2xl","fontWeight":"700","lineHeight":"1.2"}}} -->
				<h2 class="wp-block-heading has-primary-color has-text-color">Lo que nos hace diferentes de otras opciones del mercado</h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var:preset|font-size|md","lineHeight":"1.65"}}} -->
				<p class="has-muted-color has-text-color">Aquí va una descripción de tu enfoque único. Explica brevemente por qué tu empresa es la mejor opción para el cliente ideal que buscas atraer.</p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"backgroundColor":"primary","textColor":"base","style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"0.9rem","bottom":"0.9rem","left":"1.75rem","right":"1.75rem"}}}} -->
					<div class="wp-block-button">
						<a class="wp-block-button__link has-primary-background-color has-base-color has-text-color has-background wp-element-button" href="#contacto" style="border-radius:6px">
							Aquí va tu CTA →
						</a>
					</div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- Columna derecha: 6 diferenciadores en grid 2x3 -->
		<!-- wp:column {"verticalAlignment":"center","width":"62%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:62%">

			<!-- wp:group {"layout":{"type":"grid","minimumColumnWidth":"260px"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
			<div class="wp-block-group" style="display:grid;grid-template-columns:repeat(auto-fill,minmax(240px,1fr));gap:var(--wp--preset--spacing--40)">

				<!-- Diferenciador 1 -->
				<!-- wp:group {"className":"why-us-card","style":{"color":{"background":"var:preset|color|surface"},"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","rowGap":"var:preset|spacing|20"}} -->
				<div class="wp-block-group why-us-card" style="background:var(--wp--preset--color--surface);border-radius:10px;padding:var(--wp--preset--spacing--50)">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.75rem"}}} --><p style="font-size:1.75rem;margin:0;line-height:1">🎯</p><!-- /wp:paragraph -->
					<!-- wp:heading {"level":4,"textColor":"primary","style":{"typography":{"fontSize":"var:preset|font-size|sm","fontWeight":"700"}}} --><h4 class="wp-block-heading has-primary-color has-text-color">✏️ Diferenciador 1</h4><!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var:preset|font-size|xs","lineHeight":"1.5"}}} --><p class="has-muted-color has-text-color">Descripción corta de esta ventaja competitiva.</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- Diferenciador 2 -->
				<!-- wp:group {"className":"why-us-card","style":{"color":{"background":"var:preset|color|surface"},"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","rowGap":"var:preset|spacing|20"}} -->
				<div class="wp-block-group why-us-card" style="background:var(--wp--preset--color--surface);border-radius:10px;padding:var(--wp--preset--spacing--50)">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.75rem"}}} --><p style="font-size:1.75rem;margin:0;line-height:1">⚡</p><!-- /wp:paragraph -->
					<!-- wp:heading {"level":4,"textColor":"primary","style":{"typography":{"fontSize":"var:preset|font-size|sm","fontWeight":"700"}}} --><h4 class="wp-block-heading has-primary-color has-text-color">✏️ Diferenciador 2</h4><!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var:preset|font-size|xs","lineHeight":"1.5"}}} --><p class="has-muted-color has-text-color">Descripción corta de esta ventaja competitiva.</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- Diferenciador 3 -->
				<!-- wp:group {"className":"why-us-card","style":{"color":{"background":"var:preset|color|surface"},"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","rowGap":"var:preset|spacing|20"}} -->
				<div class="wp-block-group why-us-card" style="background:var(--wp--preset--color--surface);border-radius:10px;padding:var(--wp--preset--spacing--50)">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.75rem"}}} --><p style="font-size:1.75rem;margin:0;line-height:1">🤝</p><!-- /wp:paragraph -->
					<!-- wp:heading {"level":4,"textColor":"primary","style":{"typography":{"fontSize":"var:preset|font-size|sm","fontWeight":"700"}}} --><h4 class="wp-block-heading has-primary-color has-text-color">✏️ Diferenciador 3</h4><!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var:preset|font-size|xs","lineHeight":"1.5"}}} --><p class="has-muted-color has-text-color">Descripción corta de esta ventaja competitiva.</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- Diferenciador 4 -->
				<!-- wp:group {"className":"why-us-card","style":{"color":{"background":"var:preset|color|surface"},"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","rowGap":"var:preset|spacing|20"}} -->
				<div class="wp-block-group why-us-card" style="background:var(--wp--preset--color--surface);border-radius:10px;padding:var(--wp--preset--spacing--50)">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.75rem"}}} --><p style="font-size:1.75rem;margin:0;line-height:1">📈</p><!-- /wp:paragraph -->
					<!-- wp:heading {"level":4,"textColor":"primary","style":{"typography":{"fontSize":"var:preset|font-size|sm","fontWeight":"700"}}} --><h4 class="wp-block-heading has-primary-color has-text-color">✏️ Diferenciador 4</h4><!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var:preset|font-size|xs","lineHeight":"1.5"}}} --><p class="has-muted-color has-text-color">Descripción corta de esta ventaja competitiva.</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- Diferenciador 5 -->
				<!-- wp:group {"className":"why-us-card","style":{"color":{"background":"var:preset|color|surface"},"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","rowGap":"var:preset|spacing|20"}} -->
				<div class="wp-block-group why-us-card" style="background:var(--wp--preset--color--surface);border-radius:10px;padding:var(--wp--preset--spacing--50)">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.75rem"}}} --><p style="font-size:1.75rem;margin:0;line-height:1">🛡️</p><!-- /wp:paragraph -->
					<!-- wp:heading {"level":4,"textColor":"primary","style":{"typography":{"fontSize":"var:preset|font-size|sm","fontWeight":"700"}}} --><h4 class="wp-block-heading has-primary-color has-text-color">✏️ Diferenciador 5</h4><!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var:preset|font-size|xs","lineHeight":"1.5"}}} --><p class="has-muted-color has-text-color">Descripción corta de esta ventaja competitiva.</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- Diferenciador 6 -->
				<!-- wp:group {"className":"why-us-card","style":{"color":{"background":"var:preset|color|surface"},"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","rowGap":"var:preset|spacing|20"}} -->
				<div class="wp-block-group why-us-card" style="background:var(--wp--preset--color--surface);border-radius:10px;padding:var(--wp--preset--spacing--50)">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.75rem"}}} --><p style="font-size:1.75rem;margin:0;line-height:1">💡</p><!-- /wp:paragraph -->
					<!-- wp:heading {"level":4,"textColor":"primary","style":{"typography":{"fontSize":"var:preset|font-size|sm","fontWeight":"700"}}} --><h4 class="wp-block-heading has-primary-color has-text-color">✏️ Diferenciador 6</h4><!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var:preset|font-size|xs","lineHeight":"1.5"}}} --><p class="has-muted-color has-text-color">Descripción corta de esta ventaja competitiva.</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</section>
<!-- /wp:group -->
