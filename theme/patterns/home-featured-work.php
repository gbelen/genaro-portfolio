<?php
/**
 * Title: Home: featured work
 * Slug: genaro/home-featured-work
 * Inserter: no
 *
 * Static cards for now. In step 24.5 they will come from the case_study post type.
 *
 * @package Genaro
 */

?>
<!-- wp:group {"tagName":"section","align":"full","backgroundColor":"surface","className":"genaro-section","layout":{"type":"constrained","contentSize":"1200px"}} -->
<section class="wp-block-group alignfull genaro-section has-surface-background-color has-background">
	<!-- wp:heading -->
	<h2 class="wp-block-heading">Featured work</h2>
	<!-- /wp:heading -->

	<!-- wp:group {"layout":{"type":"grid","minimumColumnWidth":"18rem"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"className":"genaro-card","layout":{"type":"default"}} -->
		<div class="wp-block-group genaro-card">
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading"><a href="<?php echo esc_url( home_url( '/work/mio-connect/' ) ); ?>">MIO Connect</a></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Commercial WooCommerce payment gateway. Four independent confirmation paths and an idempotency lock, so a paid order never stays unpaid, even with 3D Secure.</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">PHP · WooCommerce · Blocks checkout · HPOS</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"genaro-card","layout":{"type":"default"}} -->
		<div class="wp-block-group genaro-card">
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading"><a href="<?php echo esc_url( home_url( '/work/genaro-maintenance-web-report/' ) ); ?>">Genaro Maintenance Web Report</a></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>White-label plugin on WordPress.org: logs maintenance tasks, scans the site and generates branded PDF reports, synced through an API to my client portal.</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">PHP · REST API · PDF · Next.js</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"genaro-card","layout":{"type":"default"}} -->
		<div class="wp-block-group genaro-card">
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading"><a href="<?php echo esc_url( home_url( '/work/this-portfolio/' ) ); ?>">This portfolio</a></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Custom block theme and block plugin, built in public, with CI/CD from GitHub Actions to my own Ubuntu VPS.</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">theme.json · Custom blocks · GitHub Actions · Caddy</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
