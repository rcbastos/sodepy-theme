<?php
/**
 * Title: Sección Problema / Puntos de Dolor
 * Slug: sodepy/problem-section
 * Categories: sodepy, featured
 * Description: Sección que presenta el problema del cliente y las situaciones que tu empresa resuelve.
 * Keywords: problema, dolor, situación, necesidad
 * Inserter: true
 */
?>
<!-- wp:group {"tagName":"section","className":"problem-section","anchor":"problema","style":{"color":{"background":"var:preset|color|surface"},"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group problem-section" id="problema" style="background:var(--wp--preset--color--surface)">

	<!-- wp:group {"className":"section-header","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|80"}},"textAlign":"center"},"layout":{"type":"constrained","contentSize":"640px"}} -->
	<div class="wp-block-group section-header" style="text-align:center">
		<!-- wp:paragraph {"textColor":"highlight","style":{"typography":{"fontSize":"var:preset|font-size|xs","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.15em"}}} -->
		<p class="has-highlight-color has-text-color">✏️ Aquí va la etiqueta de contexto (ej: El problema)</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":2,"textColor":"primary","style":{"typography":{"fontSize":"var:preset|font-size|2xl","fontWeight":"700","lineHeight":"1.2"}}} -->
		<h2 class="wp-block-heading has-primary-color has-text-color">¿Reconoces alguna de estas situaciones en tu negocio?</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var:preset|font-size|md","lineHeight":"1.65"}}} -->
		<p class="has-muted-color has-text-color">Aquí va una introducción que valida el problema del cliente. Hazle saber que entiendes su situación antes de presentar tu solución.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"problem-card","style":{"color":{"background":"var:preset|color|base"},"border":{"radius":"12px","color":"rgba(10,38,80,0.06)","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"shadow":"var:preset|shadow|soft"},"layout":{"type":"flex","orientation":"vertical","rowGap":"var:preset|spacing|30"}} -->
			<div class="wp-block-group problem-card" style="background:var(--wp--preset--color--base);border-radius:12px;border:1px solid rgba(10,38,80,0.06);padding:var(--wp--preset--spacing--60);box-shadow:var(--wp--preset--shadow--soft)">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"2rem"}}} -->
				<p style="font-size:2rem;margin:0;line-height:1">😓</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"textColor":"primary","style":{"typography":{"fontSize":"var:preset|font-size|md","fontWeight":"700"}}} -->
				<h3 class="wp-block-heading has-primary-color has-text-color">✏️ Aquí va el primer problema (ej: Vendes sin orden)</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var:preset|font-size|sm","lineHeight":"1.6"}}} -->
				<p class="has-muted-color has-text-color">Describe la situación concreta que vive tu cliente potencial cuando no tiene tu solución. Sé específico y empático.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"problem-card","style":{"color":{"background":"var:preset|color|base"},"border":{"radius":"12px","color":"rgba(10,38,80,0.06)","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"shadow":"var:preset|shadow|soft"},"layout":{"type":"flex","orientation":"vertical","rowGap":"var:preset|spacing|30"}} -->
			<div class="wp-block-group problem-card" style="background:var(--wp--preset--color--base);border-radius:12px;border:1px solid rgba(10,38,80,0.06);padding:var(--wp--preset--spacing--60);box-shadow:var(--wp--preset--shadow--soft)">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"2rem"}}} -->
				<p style="font-size:2rem;margin:0;line-height:1">📉</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"textColor":"primary","style":{"typography":{"fontSize":"var:preset|font-size|md","fontWeight":"700"}}} -->
				<h3 class="wp-block-heading has-primary-color has-text-color">✏️ Aquí va el segundo problema (ej: Sin presencia digital)</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var:preset|font-size|sm","lineHeight":"1.6"}}} -->
				<p class="has-muted-color has-text-color">Describe otra situación dolorosa para tu cliente. Puede ser la falta de herramienta, de visibilidad o de control sobre sus operaciones.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"problem-card","style":{"color":{"background":"var:preset|color|base"},"border":{"radius":"12px","color":"rgba(10,38,80,0.06)","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"shadow":"var:preset|shadow|soft"},"layout":{"type":"flex","orientation":"vertical","rowGap":"var:preset|spacing|30"}} -->
			<div class="wp-block-group problem-card" style="background:var(--wp--preset--color--base);border-radius:12px;border:1px solid rgba(10,38,80,0.06);padding:var(--wp--preset--spacing--60);box-shadow:var(--wp--preset--shadow--soft)">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"2rem"}}} -->
				<p style="font-size:2rem;margin:0;line-height:1">⏳</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"textColor":"primary","style":{"typography":{"fontSize":"var:preset|font-size|md","fontWeight":"700"}}} -->
				<h3 class="wp-block-heading has-primary-color has-text-color">✏️ Aquí va el tercer problema (ej: Pierdes tiempo en tareas manuales)</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var:preset|font-size|sm","lineHeight":"1.6"}}} -->
				<p class="has-muted-color has-text-color">Describe un tercer punto de dolor. Cuantos más clientes se identifiquen, más probable es que contacten. Sé concreto.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}},"textAlign":"center"},"layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center","flexWrap":"wrap","columnGap":"var:preset|spacing|40"}} -->
	<div class="wp-block-group" style="text-align:center;margin-top:var(--wp--preset--spacing--70)">
		<!-- wp:paragraph {"textColor":"primary","style":{"typography":{"fontSize":"var:preset|font-size|md","fontWeight":"600"}}} -->
		<p class="has-primary-color has-text-color">→ ✏️ Aquí va cómo tu empresa resuelve todo esto.</p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"primary","textColor":"base","style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem","left":"1.75rem","right":"1.75rem"}}}} -->
			<div class="wp-block-button">
				<a class="wp-block-button__link has-primary-background-color has-base-color has-text-color has-background wp-element-button" href="#servicios" style="border-radius:6px">
					Ver soluciones →
				</a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
