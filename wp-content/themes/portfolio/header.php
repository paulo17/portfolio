<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package portfolio
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="page">
		<header class="header-top">
			<nav id="navigation" class="nav-top">
				<div class="container">
					<div class="logo">

					</div>
					<div class="nav">
						<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
					</div>
				</div>
			</nav>
		</header>

	<div class="container">
