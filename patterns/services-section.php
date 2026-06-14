<?php
/**
 * Title: Sección de Servicios
 * Slug: sodepy/services-section
 * Categories: sodepy, services
 * Description: Grid de 6 servicios con icono, título, descripción y enlace.
 * Keywords: servicios, soluciones, grid, cards
 * Inserter: true
 */
?>
<!-- wp:group {"tagName":"section","className":"services-section","anchor":"servicios","style":{"color":{"background":"var:preset|color|base"},"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group services-section" id="servicios" style="background:var(--wp--preset--color--base)">

	<!-- wp:group {"className":"section-header","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|80"}},"textAlign":"center"},"layout":{"type":"constrained","contentSize":"640px"}} -->
	<div class="wp-block-group section-header" style="text-align:center">
		<!-- wp:paragraph {"textColor":"highlight","style":{"typography":{"fontSize":"var:preset|font-size|xs","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.15em"}}} -->
		<p class="has-highlight-color has-text-color">✏️ Aquí va la etiqueta (ej: Nuestros servicios)</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":2,"textColor":"primary","style":{"typography":{"fontSize":"var:preset|font-size|2xl","fontWeight":"700","lineHeight":"1.2"}}} -->
		<h2 class="wp-block-heading has-primary-color has-text-color">Elige la solución que tu negocio necesita ahora</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var:preset|font-size|md","lineHeight":"1.65"}}} -->
		<p class="has-muted-color has-text-color">Aquí va una descripción breve de tu oferta. Presenta el abanico de soluciones disponibles para tus clientes.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- Fila 1 -->
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"service-card","style":{"color":{"background":"var:preset|color|base"},"border":{"radius":"12px","color":"rgba(10,38,80,0.08)","width":"1px"},"shadow":"var:preset|shadow|soft"},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group service-card" style="background:var(--wp--preset--color--base);border-radius:12px;border:1px solid rgba(10,38,80,0.08);box-shadow:var(--wp--preset--shadow--soft);overflow:hidden">
				<!-- wp:group {"className":"service-card-image","style":{"color":{"background":"var:preset|color|surface"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
				<div class="wp-block-group service-card-image" style="background:var(--wp--preset--color--surface);padding:var(--wp--preset--spacing--60) 0">
					<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"2.5rem"}}} --><p class="has-text-align-center" style="font-size:2.5rem;margin:0;line-height:1">🌐</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","rowGap":"var:preset|spacing|30"}} -->
				<div class="wp-block-group" style="padding:var(--wp--preset--spacing--50)">
					<!-- wp:heading {"level":3,"textColor":"primary","style":{"typography":{"fontSize":"var:preset|font-size|md","fontWeight":"700"}}} --><h3 class="wp-block-heading has-primary-color has-text-color">✏️ Nombre del Servicio 1</h3><!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var:preset|font-size|sm","lineHeight":"1.6"}}} --><p class="has-muted-color has-text-color">Aquí va la descripción breve de este servicio. Explica el beneficio concreto que obtiene el cliente.</p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontSize":"var:preset|font-size|sm","fontWeight":"600"}}} --><p class="has-accent-color has-text-color"><a href="#contacto" style="color:inherit;text-decoration:none">Saber más →</a></p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"service-card","style":{"color":{"background":"var:preset|color|base"},"border":{"radius":"12px","color":"rgba(10,38,80,0.08)","width":"1px"},"shadow":"var:preset|shadow|soft"},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group service-card" style="background:var(--wp--preset--color--base);border-radius:12px;border:1px solid rgba(10,38,80,0.08);box-shadow:var(--wp--preset--shadow--soft);overflow:hidden">
				<!-- wp:group {"className":"service-card-image","style":{"color":{"background":"var:preset|color|surface"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
				<div class="wp-block-group service-card-image" style="background:var(--wp--preset--color--surface);padding:var(--wp--preset--spacing--60) 0">
					<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"2.5rem"}}} --><p class="has-text-align-center" style="font-size:2.5rem;margin:0;line-height:1">🛒</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","rowGap":"var:preset|spacing|30"}} -->
				<div class="wp-block-group" style="padding:var(--wp--preset--spacing--50)">
					<!-- wp:heading {"level":3,"textColor":"primary","style":{"typography":{"fontSize":"var:preset|font-size|md","fontWeight":"700"}}} --><h3 class="wp-block-heading has-primary-color has-text-color">✏️ Nombre del Servicio 2</h3><!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var:preset|font-size|sm","lineHeight":"1.6"}}} --><p class="has-muted-color has-text-color">Aquí va la descripción breve de este servicio. Explica el beneficio concreto que obtiene el cliente.</p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontSize":"var:preset|font-size|sm","fontWeight":"600"}}} --><p class="has-accent-color has-text-color"><a href="#contacto" style="color:inherit;text-decoration:none">Saber más →</a></p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"service-card","style":{"color":{"background":"var:preset|color|base"},"border":{"radius":"12px","color":"rgba(10,38,80,0.08)","width":"1px"},"shadow":"var:preset|shadow|soft"},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group service-card" style="background:var(--wp--preset--color--base);border-radius:12px;border:1px solid rgba(10,38,80,0.08);box-shadow:var(--wp--preset--shadow--soft);overflow:hidden">
				<!-- wp:group {"className":"service-card-image","style":{"color":{"background":"var:preset|color|surface"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
				<div class="wp-block-group service-card-image" style="background:var(--wp--preset--color--surface);padding:var(--wp--preset--spacing--60) 0">
					<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"2.5rem"}}} --><p class="has-text-align-center" style="font-size:2.5rem;margin:0;line-height:1">📊</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","rowGap":"var:preset|spacing|30"}} -->
				<div class="wp-block-group" style="padding:var(--wp--preset--spacing--50)">
					<!-- wp:heading {"level":3,"textColor":"primary","style":{"typography":{"fontSize":"var:preset|font-size|md","fontWeight":"700"}}} --><h3 class="wp-block-heading has-primary-color has-text-color">✏️ Nombre del Servicio 3</h3><!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var:preset|font-size|sm","lineHeight":"1.6"}}} --><p class="has-muted-color has-text-color">Aquí va la descripción breve de este servicio. Explica el beneficio concreto que obtiene el cliente.</p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontSize":"var:preset|font-size|sm","fontWeight":"600"}}} --><p class="has-accent-color has-text-color"><a href="#contacto" style="color:inherit;text-decoration:none">Saber más →</a></p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- Fila 2 -->
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--50)">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"service-card","style":{"color":{"background":"var:preset|color|base"},"border":{"radius":"12px","color":"rgba(10,38,80,0.08)","width":"1px"},"shadow":"var:preset|shadow|soft"},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group service-card" style="background:var(--wp--preset--color--base);border-radius:12px;border:1px solid rgba(10,38,80,0.08);box-shadow:var(--wp--preset--shadow--soft);overflow:hidden">
				<!-- wp:group {"className":"service-card-image","style":{"color":{"background":"var:preset|color|surface"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
				<div class="wp-block-group service-card-image" style="background:var(--wp--preset--color--surface);padding:var(--wp--preset--spacing--60) 0">
					<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"2.5rem"}}} --><p class="has-text-align-center" style="font-size:2.5rem;margin:0;line-height:1">📱</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","rowGap":"var:preset|spacing|30"}} -->
				<div class="wp-block-group" style="padding:var(--wp--preset--spacing--50)">
					<!-- wp:heading {"level":3,"textColor":"primary","style":{"typography":{"fontSize":"var:preset|font-size|md","fontWeight":"700"}}} --><h3 class="wp-block-heading has-primary-color has-text-color">✏️ Nombre del Servicio 4</h3><!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var:preset|font-size|sm","lineHeight":"1.6"}}} --><p class="has-muted-color has-text-color">Aquí va la descripción breve de este servicio. Explica el beneficio concreto que obtiene el cliente.</p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontSize":"var:preset|font-size|sm","fontWeight":"600"}}} --><p class="has-accent-color has-text-color"><a href="#contacto" style="color:inherit;text-decoration:none">Saber más →</a></p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"service-card","style":{"color":{"background":"var:preset|color|base"},"border":{"radius":"12px","color":"rgba(10,38,80,0.08)","width":"1px"},"shadow":"var:preset|shadow|soft"},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group service-card" style="background:var(--wp--preset--color--base);border-radius:12px;border:1px solid rgba(10,38,80,0.08);box-shadow:var(--wp--preset--shadow--soft);overflow:hidden">
				<!-- wp:group {"className":"service-card-image","style":{"color":{"background":"var:preset|color|surface"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
				<div class="wp-block-group service-card-image" style="background:var(--wp--preset--color--surface);padding:var(--wp--preset--spacing--60) 0">
					<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"2.5rem"}}} --><p class="has-text-align-center" style="font-size:2.5rem;margin:0;line-height:1">🤖</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","rowGap":"var:preset|spacing|30"}} -->
				<div class="wp-block-group" style="padding:var(--wp--preset--spacing--50)">
					<!-- wp:heading {"level":3,"textColor":"primary","style":{"typography":{"fontSize":"var:preset|font-size|md","fontWeight":"700"}}} --><h3 class="wp-block-heading has-primary-color has-text-color">✏️ Nombre del Servicio 5</h3><!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var:preset|font-size|sm","lineHeight":"1.6"}}} --><p class="has-muted-color has-text-color">Aquí va la descripción breve de este servicio. Explica el beneficio concreto que obtiene el cliente.</p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontSize":"var:preset|font-size|sm","fontWeight":"600"}}} --><p class="has-accent-color has-text-color"><a href="#contacto" style="color:inherit;text-decoration:none">Saber más →</a></p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"service-card","style":{"color":{"background":"var:preset|color|base"},"border":{"radius":"12px","color":"rgba(10,38,80,0.08)","width":"1px"},"shadow":"var:preset|shadow|soft"},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group service-card" style="background:var(--wp--preset--color--base);border-radius:12px;border:1px solid rgba(10,38,80,0.08);box-shadow:var(--wp--preset--shadow--soft);overflow:hidden">
				<!-- wp:group {"className":"service-card-image","style":{"color":{"background":"var:preset|color|surface"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
				<div class="wp-block-group service-card-image" style="background:var(--wp--preset--color--surface);padding:var(--wp--preset--spacing--60) 0">
					<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"2.5rem"}}} --><p class="has-text-align-center" style="font-size:2.5rem;margin:0;line-height:1">⚙️</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","rowGap":"var:preset|spacing|30"}} -->
				<div class="wp-block-group" style="padding:var(--wp--preset--spacing--50)">
					<!-- wp:heading {"level":3,"textColor":"primary","style":{"typography":{"fontSize":"var:preset|font-size|md","fontWeight":"700"}}} --><h3 class="wp-block-heading has-primary-color has-text-color">✏️ Nombre del Servicio 6</h3><!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var:preset|font-size|sm","lineHeight":"1.6"}}} --><p class="has-muted-color has-text-color">Aquí va la descripción breve de este servicio. Explica el beneficio concreto que obtiene el cliente.</p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontSize":"var:preset|font-size|sm","fontWeight":"600"}}} --><p class="has-accent-color has-text-color"><a href="#contacto" style="color:inherit;text-decoration:none">Saber más →</a></p><!-- /wp:paragraph -->
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
