<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nature_Blog
 */

?><!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">

		<header id="masthead" class="site-header">
			<div class="container-1">


				<nav class="navbar" role="navigation" aria-label="main navigation">
					<div class="navbar-brand">
						<a class="navbar-item" href="<?php echo home_url('/') ?>">
							<img src="<?= get_stylesheet_directory_uri() . '/assets/images/cn-logo-v2-1.png' ?>">
						</a>

						<a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarmain">
							<span aria-hidden="true"></span>
							<span aria-hidden="true"></span>
							<span aria-hidden="true"></span>
						</a>
					</div>

					<?php wp_nav_menu( 
						array(
							'theme_location' => 'menu-1',
							'container_class' => 'navbar-menu',
							'menu_class' => 'navbar-end',
							'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
						) 
					) 
					?>
					<button class="header-search-toggle"><i class="fas fa-search"></i></button>
					<?php get_search_form(); ?>
				</nav>
			</div>
		</header><!-- #masthead -->

		<div id="content" class="site-content">