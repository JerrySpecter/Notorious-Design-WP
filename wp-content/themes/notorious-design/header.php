<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
		<link rel="stylesheet" href="wp-content/themes/notorious-design/dist/assets/css/app.css">
		<script src="wp-content/themes/notorious-design/dist/assets/js/app.js"></script>
	</head>
	<body <?php body_class(); ?>>

	<header class="Site-Menu" role="banner">
		<button class="js-close-menu">X</button>
		<nav class="Site-Menu-List">
			<?php foundationpress_top_bar_r(); ?>
		</nav>
	</header>
	<div class="Side-navigation">
		<div class="Side-navigation-logo">
			<img src="https://picsum.photos/50/50">
		</div>
		<div class="Side-navigation-button">
			<button class="js-menu-open">
				<div class="menu-icon-1">
					<span class="line line-1"></span>
					<span class="line line-2"></span>
					<span class="line line-3"></span>
				</div>
				<div class="menu-icon-2">
					<span class="line2 line2-1"></span>
					<span class="line2 line2-2"></span>
					<span class="line2 line2-3"></span>
				</div>
			</button>
		</div>
		<div class="Side-navigation-info">
			<span>Notorious Design</span>
		</div>
	</div>
