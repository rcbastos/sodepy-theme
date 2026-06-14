<?php
/**
 * Title: Grid de Portfolio
 * Slug: sodepy/portfolio-grid
 * Categories: sodepy, portfolio
 * Description: Sección de portfolio con grid filtrable de proyectos recientes.
 * Keywords: portfolio, proyectos, galería, grid
 * Inserter: true
 */
?>
<!-- wp:group {"tagName":"section","anchor":"portfolio","className":"portfolio-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group portfolio-section" id="portfolio">

	<!-- wp:group {"className":"section-header","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}},"textAlign":"center"},"layout":{"type":"constrained","contentSize":"600px"}} -->
	<div class="wp-block-group section-header" style="text-align:center">
		<!-- wp:paragraph {"textColor":"highlight","style":{"typography":{"fontSize":"var:preset|font-size|xs","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.15em"}}} -->
		<p class="has-highlight-color has-text-color">✏️ Aquí va la etiqueta de sección (ej: Nuestro trabajo)</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"var:preset|font-size|2xl","fontWeight":"700"}}} -->
		<h2 class="wp-block-heading">Aquí va el título de tu sección de portfolio o galería</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"muted"} -->
		<p class="has-muted-color has-text-color">Aquí va una breve descripción de los proyectos o trabajos que mostrarás. Esta sección muestra los proyectos del Custom Post Type "Portfolio".</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- Filtros (se generan automáticamente por JS con las categorías del CPT Portfolio) -->
	<!-- wp:group {"className":"portfolio-filters","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}},"textAlign":"center"},"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap","columnGap":"var:preset|spacing|30"}} -->
	<div class="wp-block-group portfolio-filters" data-portfolio-filters style="text-align:center"></div>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":10,"query":{"perPage":6,"pages":0,"offset":0,"postType":"portfolio","order":"desc","orderBy":"date","inherit":false},"className":"portfolio-query-grid"} -->
	<div class="wp-block-query portfolio-query-grid">
		<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:group {"className":"portfolio-item","layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group portfolio-item">
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"border":{"radius":"8px"}}} /-->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","orientation":"vertical","rowGap":"var:preset|spacing|20"}} -->
				<div class="wp-block-group">
					<!-- wp:post-terms {"term":"portfolio_category","textColor":"accent","style":{"typography":{"fontSize":"var:preset|font-size|xs","fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.06em"}}} /-->
					<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"var:preset|font-size|md","fontWeight":"700"}}} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}},"textAlign":"center"},"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-group" style="text-align:center">
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-outline","textColor":"primary","style":{"border":{"color":"var:preset|color|primary","width":"2px","radius":"6px"}}} -->
			<div class="wp-block-button is-style-outline">
				<a class="wp-block-button__link has-primary-color has-text-color wp-element-button" href="/portfolio" style="border-radius:6px;border:2px solid var(--wp--preset--color--primary)">
					Ver todos los proyectos →
				</a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
