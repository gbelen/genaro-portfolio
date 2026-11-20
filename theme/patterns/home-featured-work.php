<?php
/**
 * Title: Home: featured work
 * Slug: genaro/home-featured-work
 * Inserter: no
 *
 * Static cards for now. In step 24.5 they will come from the case_study post type.
 * The whole card is clickable: the title link stretches over it (see theme.json css).
 *
 * @package Genaro
 */

?>
<!-- wp:group {"tagName":"section","align":"full","backgroundColor":"surface","className":"genaro-section","layout":{"type":"constrained","contentSize":"1200px"}} -->
<section class="wp-block-group alignfull genaro-section has-surface-background-color has-background">
	<!-- wp:paragraph {"className":"genaro-eyebrow"} -->
	<p class="genaro-eyebrow">Case studies</p>
	<!-- /wp:paragraph -->

	<!-- wp:heading -->
	<h2 class="wp-block-heading">Featured work</h2>
	<!-- /wp:heading -->

	<!-- wp:group {"className":"genaro-grid-3","layout":{"type":"grid","minimumColumnWidth":"18rem"}} -->
	<div class="wp-block-group genaro-grid-3">
		<!-- wp:group {"className":"genaro-card genaro-card--link","layout":{"type":"default"}} -->
		<div class="wp-block-group genaro-card genaro-card--link">
			<!-- wp:paragraph {"className":"genaro-metric"} -->
			<p class="genaro-metric">4 confirmation paths</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading"><a href="<?php echo esc_url( home_url( '/work/mio-connect/' ) ); ?>">MIO Connect</a></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Commercial WooCommerce payment gateway. Return URL, signed webhook, cron and a rescue check, plus an idempotency lock: a paid order never stays unpaid, even with 3D Secure.</p>
			<!-- /wp:paragraph -->

			<!-- wp:list {"className":"genaro-chips"} -->
			<ul class="wp-block-list genaro-chips">
				<!-- wp:list-item -->
				<li>WooCommerce</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li>Blocks checkout</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li>HPOS</li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->

			<!-- wp:paragraph {"className":"genaro-more"} -->
			<p class="genaro-more">Read case study →</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"genaro-card genaro-card--link","layout":{"type":"default"}} -->
		<div class="wp-block-group genaro-card genaro-card--link">
			<!-- wp:paragraph {"className":"genaro-metric"} -->
			<p class="genaro-metric">On WordPress.org</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading"><a href="<?php echo esc_url( home_url( '/work/genaro-maintenance-web-report/' ) ); ?>">Genaro Maintenance Web Report</a></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>White-label plugin that logs maintenance tasks, scans the site and generates branded PDF reports, synced through an API to my client portal.</p>
			<!-- /wp:paragraph -->

			<!-- wp:list {"className":"genaro-chips"} -->
			<ul class="wp-block-list genaro-chips">
				<!-- wp:list-item -->
				<li>PHP</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li>REST API</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li>Next.js</li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->

			<!-- wp:paragraph {"className":"genaro-more"} -->
			<p class="genaro-more">Read case study →</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"genaro-card genaro-card--link","layout":{"type":"default"}} -->
		<div class="wp-block-group genaro-card genaro-card--link">
			<!-- wp:paragraph {"className":"genaro-metric"} -->
			<p class="genaro-metric">Built in public</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading"><a href="<?php echo esc_url( home_url( '/work/this-portfolio/' ) ); ?>">This portfolio</a></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Custom block theme and block plugin, with CI/CD from GitHub Actions to my own Ubuntu VPS.</p>
			<!-- /wp:paragraph -->

			<!-- wp:list {"className":"genaro-chips"} -->
			<ul class="wp-block-list genaro-chips">
				<!-- wp:list-item -->
				<li>theme.json</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li>Custom blocks</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li>GitHub Actions</li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->

			<!-- wp:paragraph {"className":"genaro-more"} -->
			<p class="genaro-more">Read case study →</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
