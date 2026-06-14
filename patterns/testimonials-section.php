<?php
/**
 * Title: Sección de Testimonios
 * Slug: sodepy/testimonials-section
 * Categories: sodepy
 * Description: Grid de testimonios de clientes con nombre, cargo y empresa.
 * Keywords: testimonios, clientes, reseñas, opiniones
 * Inserter: true
 */
?>
<!-- wp:group {"tagName":"section","anchor":"testimonios","className":"testimonials-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100"}},"color":{"background":"var:preset|color|surface"}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group testimonials-section" id="testimonios">

	<!-- wp:group {"className":"section-header","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|80"}},"textAlign":"center"},"layout":{"type":"constrained","contentSize":"600px"}} -->
	<div class="wp-block-group section-header" style="text-align:center">
		<!-- wp:paragraph {"textColor":"highlight","style":{"typography":{"fontSize":"var:preset|font-size|xs","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.15em"}}} -->
		<p class="has-highlight-color has-text-color">✏️ Aquí va la etiqueta de sección (ej: Lo que dicen)</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"var:preset|font-size|2xl","fontWeight":"700"}}} -->
		<h2 class="wp-block-heading">Aquí va el título de la sección de testimonios</h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"testimonials-grid","layout":{"type":"grid","minimumColumnWidth":"280px","columnCount":3},"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
	<div class="wp-block-group testimonials-grid">

		<?php for ( $i = 1; $i <= 3; $i++ ) : ?>

		<!-- wp:group {"className":"testimonial-card","style":{"border":{"radius":"12px"},"color":{"background":"var:preset|color|base"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"shadow":"var:preset|shadow|soft"},"layout":{"type":"flex","orientation":"vertical","rowGap":"var:preset|spacing|40"}} -->
		<div class="wp-block-group testimonial-card" style="border-radius:12px;background:var(--wp--preset--color--base);padding:var(--wp--preset--spacing--70) var(--wp--preset--spacing--60);box-shadow:var(--wp--preset--shadow--soft)">

			<!-- wp:paragraph {"textColor":"highlight","style":{"typography":{"fontSize":"1.25rem"}}} -->
			<p class="has-highlight-color has-text-color" style="font-size:1.25rem" aria-label="5 de 5 estrellas">★★★★★</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"contrast","style":{"typography":{"fontSize":"var:preset|font-size|md","lineHeight":"1.7"}}} -->
			<p class="has-contrast-color has-text-color">"Aquí va el texto del testimonio <?php echo $i; ?>. Reemplaza esto con la opinión real de tu cliente. Debe ser específica y mencionar un resultado concreto."</p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","columnGap":"var:preset|spacing|40"}} -->
			<div class="wp-block-group">
				<div class="testimonial-avatar" aria-hidden="true" style="width:48px;height:48px;border-radius:50%;background:linear-gradient(135deg,#0A2650,#176EB5);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;font-size:1.25rem;flex-shrink:0;">
					<?php echo $i; ?>
				</div>
				<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","rowGap":"2px"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"var:preset|font-size|sm"}}} -->
					<p style="font-weight:700;font-size:var(--wp--preset--font-size--sm);margin:0">Nombre del Cliente <?php echo $i; ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var:preset|font-size|xs"}}} -->
					<p class="has-muted-color has-text-color" style="font-size:var(--wp--preset--font-size--xs);margin:0">Cargo, Nombre de la Empresa</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

		<?php endfor; ?>

	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
