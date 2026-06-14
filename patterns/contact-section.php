<?php
/**
 * Title: Sección de Contacto
 * Slug: sodepy/contact-section
 * Categories: sodepy, contact
 * Description: Sección de contacto con información de la empresa y formulario.
 * Keywords: contacto, formulario, email, teléfono
 * Inserter: true
 */
?>
<!-- wp:group {"tagName":"section","anchor":"contacto","className":"contact-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100"}},"color":{"background":"var:preset|color|base"}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group contact-section" id="contacto">

	<!-- wp:group {"layout":{"type":"grid","minimumColumnWidth":"300px","columnCount":2},"style":{"spacing":{"blockGap":"var:preset|spacing|90"}}} -->
	<div class="wp-block-group">

		<!-- COLUMNA IZQUIERDA: Info de contacto -->
		<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","rowGap":"var:preset|spacing|60"}} -->
		<div class="wp-block-group">

			<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","rowGap":"var:preset|spacing|20"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"textColor":"highlight","style":{"typography":{"fontSize":"var:preset|font-size|xs","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.15em"}}} -->
				<p class="has-highlight-color has-text-color">✏️ Aquí va la etiqueta (ej: Hablemos)</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"var:preset|font-size|2xl","fontWeight":"700"}}} -->
				<h2 class="wp-block-heading">Aquí va el título de tu sección de contacto</h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted"} -->
				<p class="has-muted-color has-text-color">Aquí va el texto de invitación al contacto. Indica el tiempo de respuesta y qué puede esperar el cliente.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"contact-info","layout":{"type":"flex","orientation":"vertical","rowGap":"var:preset|spacing|40"}} -->
			<div class="wp-block-group contact-info">

				<!-- wp:group {"className":"contact-item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","columnGap":"var:preset|spacing|40"}} -->
				<div class="wp-block-group contact-item">
					<div class="contact-icon" aria-hidden="true" style="width:48px;height:48px;background:rgba(23,110,181,0.1);border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:1.25rem;flex-shrink:0;">📧</div>
					<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","rowGap":"2px"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"var:preset|font-size|sm"}}} -->
						<p style="font-weight:600;font-size:var(--wp--preset--font-size--sm);margin:0">Email</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontSize":"var:preset|font-size|sm"}}} -->
						<p class="has-accent-color has-text-color" style="margin:0"><a href="mailto:tu@email.com">tu@email.com</a></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"contact-item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","columnGap":"var:preset|spacing|40"}} -->
				<div class="wp-block-group contact-item">
					<div class="contact-icon" aria-hidden="true" style="width:48px;height:48px;background:rgba(23,110,181,0.1);border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:1.25rem;flex-shrink:0;">📞</div>
					<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","rowGap":"2px"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"var:preset|font-size|sm"}}} -->
						<p style="font-weight:600;font-size:var(--wp--preset--font-size--sm);margin:0">Teléfono</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontSize":"var:preset|font-size|sm"}}} -->
						<p class="has-accent-color has-text-color" style="margin:0"><a href="tel:+00000000000">+00 000 000 000</a></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"contact-item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","columnGap":"var:preset|spacing|40"}} -->
				<div class="wp-block-group contact-item">
					<div class="contact-icon" aria-hidden="true" style="width:48px;height:48px;background:rgba(23,110,181,0.1);border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:1.25rem;flex-shrink:0;">📍</div>
					<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","rowGap":"2px"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"var:preset|font-size|sm"}}} -->
						<p style="font-weight:600;font-size:var(--wp--preset--font-size--sm);margin:0">Ubicación</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var:preset|font-size|sm"}}} -->
						<p class="has-muted-color has-text-color" style="margin:0">Tu ciudad, País</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

		<!-- COLUMNA DERECHA: Formulario -->
		<!-- wp:group {"className":"contact-form-wrapper","style":{"border":{"radius":"16px"},"color":{"background":"var:preset|color|surface"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70","right":"var:preset|spacing|70"}},"shadow":"var:preset|shadow|medium"}} -->
		<div class="wp-block-group contact-form-wrapper" style="border-radius:16px;background:var(--wp--preset--color--surface);padding:var(--wp--preset--spacing--70);box-shadow:var(--wp--preset--shadow--medium)">
			<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|lg","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
			<h3 class="wp-block-heading">Envíanos un mensaje</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var:preset|font-size|sm"}}} -->
			<p class="has-muted-color has-text-color">
				💡 <strong>Instrucción:</strong> Instala el plugin <strong>Contact Form 7</strong> o <strong>WPForms</strong>, crea tu formulario, y reemplaza el shortcode de abajo con el tuyo.<br>
				— CF7: <code>[contact-form-7 id="TU-ID"]</code><br>
				— WPForms: <code>[wpforms id="TU-ID"]</code>
			</p>
			<!-- /wp:paragraph -->

			<!-- wp:shortcode -->
			<div class="wp-block-shortcode">
				[contact-form-7 id="TU-ID-AQUI" title="Contacto"]
			</div>
			<!-- /wp:shortcode -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
