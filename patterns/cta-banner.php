<?php
/**
 * Title: Banner CTA
 * Slug: sodepy/cta-banner
 * Categories: sodepy, call-to-action
 * Description: Banda de llamada a la acción con degradado de marca y dos botones.
 * Keywords: cta, llamada, acción, banner
 * Inserter: true
 */
?>
<!-- wp:group {"tagName":"section","className":"cta-section","style":{"color":{"background":"linear-gradient(135deg,#173A7A 0%,#176EB5 100%)"},"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group cta-section" style="background:linear-gradient(135deg,#173A7A 0%,#176EB5 100%)">

	<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","rowGap":"var:preset|spacing|50","justifyContent":"center"},"style":{"textAlign":"center"}} -->
	<div class="wp-block-group" style="text-align:center">

		<!-- wp:heading {"level":2,"textColor":"base","style":{"typography":{"fontSize":"var:preset|font-size|2xl","fontWeight":"700"}}} -->
		<h2 class="wp-block-heading has-base-color has-text-color">¿Listo para dar el siguiente paso?</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"color":{"text":"rgba(244,246,248,0.85)"},"typography":{"fontSize":"var:preset|font-size|lg"}}} -->
		<p style="color:rgba(244,246,248,0.85)">Aquí va tu propuesta de valor. Anima al visitante a contactarte o tomar una acción concreta.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|50"}}}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"highlight","textColor":"base","style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"2.5rem","right":"2.5rem"}}}} -->
			<div class="wp-block-button">
				<a class="wp-block-button__link has-highlight-background-color has-base-color has-text-color has-background wp-element-button" href="#contacto" style="border-radius:6px">
					Aquí va tu CTA principal
				</a>
			</div>
			<!-- /wp:button -->
			<!-- wp:button {"className":"is-style-outline","textColor":"base","style":{"border":{"radius":"6px","color":"rgba(255,255,255,0.5)","width":"2px"}}} -->
			<div class="wp-block-button is-style-outline">
				<a class="wp-block-button__link has-base-color has-text-color wp-element-button" href="tel:+00000000000" style="border-radius:6px;border:2px solid rgba(255,255,255,0.5)">
					Aquí va tu CTA secundario
				</a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
