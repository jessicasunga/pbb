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
		<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon.png">
		<script src="https://use.typekit.net/pey4mrd.js"></script>
	    <script>try{Typekit.load({ async: true });}catch(e){}</script>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="title-bar" data-responsive-toggle="site-navigation">
			<button class="menu-icon" type="button" data-toggle="mobile-menu"></button>
			<div class="title-bar-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
			<div class="yellow-bar"></div>
			<div class="top-bar-left">
				<div class="row">
					<div class="small-4 columns">
						<img src="wp-content/themes/pbb/assets/images/newLogo.png" />
					</div>
					<div class="small-8 columns">
						<ul class="dropdown menu" role="menubar">
							<li role="menuitem" class="is-dropdown-submenu-parent opens-right" aria-haspopup="true" aria-expanded="false" aria-label="Item 1" data-is-click="false"><a tabindex="0">Home</a></li>
							<li role="menuitem" class="is-dropdown-submenu-parent opens-right" aria-haspopup="true" aria-expanded="false" aria-label="Item 1" data-is-click="false"><a tabindex="0">Awards</a></li>
							<li role="menuitem" class="is-dropdown-submenu-parent opens-right" aria-haspopup="true" aria-expanded="false" aria-label="Item 1" data-is-click="false"><a tabindex="0">Photos</a></li>
							<li role="menuitem" class="is-dropdown-submenu-parent opens-right" aria-haspopup="true" aria-expanded="false" aria-label="Item 1" data-is-click="false"><a tabindex="0">About</a></li>
							<li role="menuitem" class="is-dropdown-submenu-parent opens-right" aria-haspopup="true" aria-expanded="false" aria-label="Item 1" data-is-click="false"><a tabindex="0">Awards</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="top-bar-right">
				<div class="header-buttons">
					<a href="#" class="header-button medium button">Donate</a>
					<a href="#" class="header-button medium button">Apply</a>
				</div>
				<br>
				<?php foundationpress_top_bar_r(); ?>
				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
		</nav>
	</header>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
