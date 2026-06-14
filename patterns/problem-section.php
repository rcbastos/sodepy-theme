<?php
/**
 * Title: Sección Problema / Puntos de Dolor
 * Slug: sodepy/problem-section
 * Categories: sodepy, featured
 * Description: Tres tarjetas con los problemas que resuelve la empresa.
 * Keywords: problema, dolor, situación, necesidad
 * Inserter: true
 */
?>
<!-- wp:group {"tagName":"section","className":"problem-section","anchor":"problema"} -->
<section class="wp-block-group problem-section" id="problema">

	<!-- wp:group {"className":"section-header"} -->
	<div class="wp-block-group section-header">
		<!-- wp:paragraph {"textColor":"highlight","className":"section-label"} -->
		<p class="has-highlight-color has-text-color section-label">✏️ Aquí va la etiqueta de contexto (ej: El problema)</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":2,"textColor":"primary"} -->
		<h2 class="wp-block-heading has-primary-color has-text-color">¿Reconoces alguna de estas situaciones en tu negocio?</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"muted"} -->
		<p class="has-muted-color has-text-color">Aquí va una introducción que valida el problema del cliente. Hazle saber que entiendes su situación antes de presentar tu solución.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"className":"problem-grid"} -->
	<div class="wp-block-columns problem-grid">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"problem-card"} -->
			<div class="wp-block-group problem-card">
				<!-- wp:paragraph {"className":"problem-icon"} -->
				<p class="problem-icon">😓</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"textColor":"primary"} -->
				<h3 class="wp-block-heading has-primary-color has-text-color">✏️ Aquí va el primer problema (ej: Vendes sin orden)</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted"} -->
				<p class="has-muted-color has-text-color">Describe la situación concreta que vive tu cliente potencial cuando no tiene tu solución. Sé específico y empático.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"problem-card"} -->
			<div class="wp-block-group problem-card">
				<!-- wp:paragraph {"className":"problem-icon"} -->
				<p class="problem-icon">📉</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"textColor":"primary"} -->
				<h3 class="wp-block-heading has-primary-color has-text-color">✏️ Aquí va el segundo problema (ej: Sin presencia digital)</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted"} -->
				<p class="has-muted-color has-text-color">Describe otra situación dolorosa para tu cliente. Puede ser la falta de herramienta, de visibilidad o de control sobre sus operaciones.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"problem-card"} -->
			<div class="wp-block-group problem-card">
				<!-- wp:paragraph {"className":"problem-icon"} -->
				<p class="problem-icon">⏳</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"textColor":"primary"} -->
				<h3 class="wp-block-heading has-primary-color has-text-color">✏️ Aquí va el tercer problema (ej: Pierdes tiempo en tareas manuales)</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted"} -->
				<p class="has-muted-color has-text-color">Describe un tercer punto de dolor. Cuantos más clientes se identifiquen, más probable es que contacten. Sé concreto.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"className":"problem-cta"} -->
	<div class="wp-block-group problem-cta">
		<!-- wp:paragraph {"textColor":"primary","className":"problem-resolution"} -->
		<p class="has-primary-color has-text-color problem-resolution">→ ✏️ Aquí va cómo tu empresa resuelve todo esto.</p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"primary","textColor":"base"} -->
			<div class="wp-block-button">
				<a class="wp-block-button__link has-primary-background-color has-base-color has-text-color has-background wp-element-button" href="#servicios">Ver soluciones →</a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
