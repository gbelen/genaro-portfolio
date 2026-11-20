<?php
/**
 * Title: Header logo
 * Slug: genaro/header-logo
 * Inserter: no
 *
 * The logo lives in the theme (versioned in Git), not in the Media Library.
 * HTML templates can't run PHP, so this pattern builds the image URL.
 *
 * @package Genaro
 */

?>
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group">
	<!-- wp:html -->
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="genaro-logo">
		<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/logo.svg' ) ); ?>" alt="<?php esc_attr_e( 'Genaro web development, home', 'genaro' ); ?>" width="180" height="47">
	</a>
	<!-- /wp:html -->

	<!-- wp:navigation {"overlayMenu":"mobile","layout":{"type":"flex","justifyContent":"right"}} /-->
</div>
<!-- /wp:group -->
