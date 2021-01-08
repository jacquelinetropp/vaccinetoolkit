<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vaccine_toolkit
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Signika:wght@700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'vaccine_toolkit'); ?></a>

		<header id="masthead" class="site-header">
			<div class="header">
				<div class="header__branding">
					<a href="/wordpress">
						<div class="header__logo">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/logo.jpg" alt="Doctors For America Logo">
						</div>

					</a>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation navbar">
					<button class="menu-toggle primary-menu navbutton" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'dream'); ?></button>

					<?php
					wp_nav_menu(array(
						'theme_location' => 'menu-1',
						'depth'          => 2,
						'container'      => false,
						'menu_class'     => 'navbar-nav mr-auto',
						'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
						// Process nav menu using our custom nav walker.
						'walker'         => new WP_Bootstrap_Navwalker(),
					));
					?>
				</nav><!-- #site-navigation -->
			</div>

		</header><!-- #masthead -->