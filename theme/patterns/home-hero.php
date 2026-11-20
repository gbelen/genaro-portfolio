<?php
/**
 * Title: Home: hero
 * Slug: genaro/home-hero
 * Inserter: no
 *
 * Two columns on desktop (text + isologo), stacked on mobile.
 * The stats are facts from the CV: never client data.
 *
 * @package Genaro
 */

?>
<!-- wp:group {"tagName":"section","align":"full","className":"genaro-section genaro-hero","layout":{"type":"constrained","contentSize":"1200px"}} -->
<section class="wp-block-group alignfull genaro-section genaro-hero">
	<!-- wp:columns {"verticalAlignment":"center","className":"genaro-hero__cols"} -->
	<div class="wp-block-columns are-vertically-aligned-center genaro-hero__cols">
		<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
			<!-- wp:paragraph {"className":"genaro-eyebrow"} -->
			<p class="genaro-eyebrow">Genaro Heredia Belen</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1} -->
			<h1 class="wp-block-heading">Senior WordPress &amp; WooCommerce Developer</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"genaro-lead"} -->
			<p class="genaro-lead">I build custom themes, plugins and payment integrations from scratch: fast, SEO-ready and measurable from day one. Now building AI integrations with MCP.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/cv/' ) ); ?>">Download CV</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://www.linkedin.com/in/genaroheredia/">LinkedIn</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:paragraph {"className":"genaro-availability","fontSize":"small"} -->
			<p class="genaro-availability has-small-font-size">Open to remote roles · Santo Domingo, GMT-4</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
			<!-- wp:image {"sizeSlug":"full","className":"genaro-hero__art"} -->
			<figure class="wp-block-image size-full genaro-hero__art"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/isologo.svg' ) ); ?>" alt=""/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"className":"genaro-stats","layout":{"type":"grid","minimumColumnWidth":"11rem"}} -->
	<div class="wp-block-group genaro-stats">
		<!-- wp:paragraph -->
		<p><strong>14+</strong>years building for the web</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p><strong>6</strong>products built and running</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p><strong>10+</strong>WordPress sites maintained</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p><strong>70 → 95</strong>PageSpeed on fondesa.org</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
