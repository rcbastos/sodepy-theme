<?php
/**
 * Title: Sección de Servicios
 * Slug: sodepy/services-section
 * Categories: sodepy, services
 * Description: Grid de servicios/productos con ícono, título y descripción.
 * Keywords: servicios, grid, cards, productos
 * Inserter: true
 */
?>
<!-- wp:group {"tagName":"section","anchor":"servicios","className":"services-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100"}},"color":{"background":"var:preset|color|surface"}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group services-section" id="servicios">

	<!-- wp:group {"className":"section-header","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|80"}},"textAlign":"center"},"layout":{"type":"constrained","contentSize":"600px"}} -->
	<div class="wp-block-group section-header" style="text-align:center">
		<!-- wp:paragraph {"textColor":"highlight","style":{"typography":{"fontSize":"var:preset|font-size|xs","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.15em"}}} -->
		<p class="has-highlight-color has-text-color">✏️ Aquí va la etiqueta de sección (ej: Lo que hacemos)</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"var:preset|font-size|2xl","fontWeight":"700"}}} -->
		<h2 class="wp-block-heading">Aquí va el título de tu sección de servicios</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"muted"} -->
		<p class="has-muted-color has-text-color">Aquí va una breve descripción introductoria de tus servicios o productos. Una o dos frases son suficientes.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"services-grid","layout":{"type":"grid","minimumColumnWidth":"280px","columnCount":3},"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
	<div class="wp-block-group services-grid">

		<?php
		$services = [
			[ 'icon' => '⭐', 'title' => 'Nombre del Servicio 1', 'desc' => 'Aquí va la descripción de este servicio. Explica qué incluye y qué beneficio obtiene el cliente.' ],
			[ 'icon' => '🚀', 'title' => 'Nombre del Servicio 2', 'desc' => 'Aquí va la descripción de este servicio. Explica qué incluye y qué beneficio obtiene el cliente.' ],
			[ 'icon' => '💡', 'title' => 'Nombre del Servicio 3', 'desc' => 'Aquí va la descripción de este servicio. Explica qué incluye y qué beneficio obtiene el cliente.' ],
			[ 'icon' => '🎯', 'title' => 'Nombre del Servicio 4', 'desc' => 'Aquí va la descripción de este servicio. Explica qué incluye y qué beneficio obtiene el cliente.' ],
			[ 'icon' => '📊', 'title' => 'Nombre del Servicio 5', 'desc' => 'Aquí va la descripción de este servicio. Explica qué incluye y qué beneficio obtiene el cliente.' ],
			[ 'icon' => '🔧', 'title' => 'Nombre del Servicio 6', 'desc' => 'Aquí va la descripción de este servicio. Explica qué incluye y qué beneficio obtiene el cliente.' ],
		];
		foreach ( $services as $service ) : ?>

		<!-- wp:group {"className":"service-card","style":{"border":{"radius":"12px"},"color":{"background":"var:preset|color|base"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"shadow":"var:preset|shadow|soft"},"layout":{"type":"flex","orientation":"vertical","rowGap":"var:preset|spacing|40"}} -->
		<div class="wp-block-group service-card" style="border-radius:12px;background:var(--wp--preset--color--base);padding:var(--wp--preset--spacing--70) var(--wp--preset--spacing--60);box-shadow:var(--wp--preset--shadow--soft)">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"2.5rem"}}} -->
			<p style="font-size:2.5rem;margin:0"><?php echo $service['icon']; ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|lg","fontWeight":"700"}}} -->
			<h3 class="wp-block-heading"><?php echo esc_html( $service['title'] ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var:preset|font-size|sm"}}} -->
			<p class="has-muted-color has-text-color"><?php echo esc_html( $service['desc'] ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><a href="#contacto" class="service-card-link">Saber más →</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<?php endforeach; ?>

	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
