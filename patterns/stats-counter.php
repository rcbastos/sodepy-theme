<?php
/**
 * Title: Contador de Estadísticas
 * Slug: sodepy/stats-counter
 * Categories: sodepy
 * Description: Banda de números/estadísticas con fondo degradado de marca.
 * Keywords: estadísticas, números, contador, logros
 * Inserter: true
 */
?>
<!-- wp:group {"tagName":"section","className":"stats-section","style":{"color":{"background":"linear-gradient(135deg,#0A2650 0%,#173A7A 100%)"},"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group stats-section" style="background:linear-gradient(135deg,#0A2650 0%,#173A7A 100%)">

	<!-- wp:group {"className":"stats-grid","layout":{"type":"grid","minimumColumnWidth":"180px","columnCount":4},"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
	<div class="wp-block-group stats-grid">

		<?php
		$stats = [
			[ 'number' => '00+',  'label' => 'Aquí va tu estadística 1' ],
			[ 'number' => '00%',  'label' => 'Aquí va tu estadística 2' ],
			[ 'number' => '00+',  'label' => 'Aquí va tu estadística 3' ],
			[ 'number' => '00h',  'label' => 'Aquí va tu estadística 4' ],
		];
		foreach ( $stats as $stat ) : ?>

		<!-- wp:group {"className":"stat-item","style":{"textAlign":"center"},"layout":{"type":"flex","orientation":"vertical","rowGap":"var:preset|spacing|20","justifyContent":"center"}} -->
		<div class="wp-block-group stat-item" style="text-align:center">
			<!-- wp:heading {"level":3,"textColor":"highlight","className":"stat-number","style":{"typography":{"fontSize":"var:preset|font-size|3xl","fontWeight":"800","lineHeight":"1"}}} -->
			<h3 class="wp-block-heading has-highlight-color has-text-color stat-number"><?php echo esc_html( $stat['number'] ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"color":{"text":"rgba(244,246,248,0.8)"},"typography":{"fontSize":"var:preset|font-size|sm"}}} -->
			<p style="color:rgba(244,246,248,0.8);font-size:var(--wp--preset--font-size--sm)"><?php echo esc_html( $stat['label'] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<?php endforeach; ?>

	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
