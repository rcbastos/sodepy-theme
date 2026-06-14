<?php
/**
 * Title: Proceso en 3 Pasos
 * Slug: sodepy/process-section
 * Categories: sodepy, featured
 * Description: Sección que muestra el proceso de trabajo en 3 pasos numerados.
 * Keywords: proceso, pasos, cómo funciona, metodología
 * Inserter: true
 */
?>
<!-- wp:group {"tagName":"section","className":"process-section","anchor":"proceso","style":{"color":{"background":"var:preset|color|surface"},"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group process-section" id="proceso" style="background:var(--wp--preset--color--surface)">

	<!-- wp:group {"className":"section-header","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|80"}},"textAlign":"center"},"layout":{"type":"constrained","contentSize":"640px"}} -->
	<div class="wp-block-group section-header" style="text-align:center">
		<!-- wp:paragraph {"textColor":"highlight","style":{"typography":{"fontSize":"var:preset|font-size|xs","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.15em"}}} -->
		<p class="has-highlight-color has-text-color">✏️ Aquí va la etiqueta (ej: Cómo trabajamos)</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":2,"textColor":"primary","style":{"typography":{"fontSize":"var:preset|font-size|2xl","fontWeight":"700","lineHeight":"1.2"}}} -->
		<h2 class="wp-block-heading has-primary-color has-text-color">Del diagnóstico al resultado en tres pasos</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var:preset|font-size|md","lineHeight":"1.65"}}} -->
		<p class="has-muted-color has-text-color">Aquí va una descripción breve de tu metodología. Transmite sencillez, claridad y resultados concretos.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|70","left":"var:preset|spacing|70"}}}} -->
	<div class="wp-block-columns">

		<!-- Paso 1 -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"process-step","style":{"color":{"background":"var:preset|color|base"},"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"shadow":"var:preset|shadow|soft"},"layout":{"type":"flex","orientation":"vertical","rowGap":"var:preset|spacing|40"}} -->
			<div class="wp-block-group process-step" style="background:var(--wp--preset--color--base);border-radius:12px;padding:var(--wp--preset--spacing--70) var(--wp--preset--spacing--60);box-shadow:var(--wp--preset--shadow--soft)">

				<!-- wp:paragraph {"className":"process-number","style":{"typography":{"fontSize":"3.5rem","fontWeight":"800","lineHeight":"1"},"color":{"text":"rgba(10,38,80,0.08)"}}} -->
				<p class="process-number" style="font-size:3.5rem;font-weight:800;line-height:1;color:rgba(10,38,80,0.08);margin:0">01</p>
				<!-- /wp:paragraph -->

				<!-- wp:group {"style":{"spacing":{"padding":{"left":"0"}}},"layout":{"type":"flex","orientation":"vertical","rowGap":"var:preset|spacing|30"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.75rem"}}} -->
					<p style="font-size:1.75rem;margin:0;line-height:1">🔍</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"textColor":"primary","style":{"typography":{"fontSize":"var:preset|font-size|md","fontWeight":"700"}}} -->
					<h3 class="wp-block-heading has-primary-color has-text-color">✏️ Paso 1: Aquí va el nombre del primer paso</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var:preset|font-size|sm","lineHeight":"1.65"}}} -->
					<p class="has-muted-color has-text-color">Describe qué sucede en este paso. Sé concreto: qué hace tu equipo, qué necesita el cliente y cuánto tiempo toma.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- Paso 2 -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"process-step","style":{"color":{"background":"var:preset|color|base"},"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"shadow":"var:preset|shadow|soft"},"layout":{"type":"flex","orientation":"vertical","rowGap":"var:preset|spacing|40"}} -->
			<div class="wp-block-group process-step" style="background:var(--wp--preset--color--base);border-radius:12px;padding:var(--wp--preset--spacing--70) var(--wp--preset--spacing--60);box-shadow:var(--wp--preset--shadow--soft)">
				<!-- wp:paragraph {"className":"process-number","style":{"typography":{"fontSize":"3.5rem","fontWeight":"800","lineHeight":"1"},"color":{"text":"rgba(10,38,80,0.08)"}}} -->
				<p class="process-number" style="font-size:3.5rem;font-weight:800;line-height:1;color:rgba(10,38,80,0.08);margin:0">02</p>
				<!-- /wp:paragraph -->
				<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","rowGap":"var:preset|spacing|30"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.75rem"}}} -->
					<p style="font-size:1.75rem;margin:0;line-height:1">⚡</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"textColor":"primary","style":{"typography":{"fontSize":"var:preset|font-size|md","fontWeight":"700"}}} -->
					<h3 class="wp-block-heading has-primary-color has-text-color">✏️ Paso 2: Aquí va el nombre del segundo paso</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var:preset|font-size|sm","lineHeight":"1.65"}}} -->
					<p class="has-muted-color has-text-color">Describe qué sucede en este paso. Sé concreto: qué hace tu equipo, qué necesita el cliente y cuánto tiempo toma.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- Paso 3 -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"process-step","style":{"color":{"background":"var:preset|color|base"},"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"shadow":"var:preset|shadow|soft"},"layout":{"type":"flex","orientation":"vertical","rowGap":"var:preset|spacing|40"}} -->
			<div class="wp-block-group process-step" style="background:var(--wp--preset--color--base);border-radius:12px;padding:var(--wp--preset--spacing--70) var(--wp--preset--spacing--60);box-shadow:var(--wp--preset--shadow--soft)">
				<!-- wp:paragraph {"className":"process-number","style":{"typography":{"fontSize":"3.5rem","fontWeight":"800","lineHeight":"1"},"color":{"text":"rgba(10,38,80,0.08)"}}} -->
				<p class="process-number" style="font-size:3.5rem;font-weight:800;line-height:1;color:rgba(10,38,80,0.08);margin:0">03</p>
				<!-- /wp:paragraph -->
				<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","rowGap":"var:preset|spacing|30"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.75rem"}}} -->
					<p style="font-size:1.75rem;margin:0;line-height:1">🚀</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"textColor":"primary","style":{"typography":{"fontSize":"var:preset|font-size|md","fontWeight":"700"}}} -->
					<h3 class="wp-block-heading has-primary-color has-text-color">✏️ Paso 3: Aquí va el nombre del tercer paso</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var:preset|font-size|sm","lineHeight":"1.65"}}} -->
					<p class="has-muted-color has-text-color">Describe qué sucede en este paso. Incluye el entregable o resultado que el cliente recibe al finalizar el proceso.</p>
					<!-- /wp:paragraph -->
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
