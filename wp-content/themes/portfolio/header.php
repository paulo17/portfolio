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
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="page">
		<header class="header-top">
			<nav id="navigation" class="nav-top">
				<div class="container">
					<div class="logo">
						<a href="<?= home_url(); ?>">
							<img src="<?= get_template_directory_uri() . '/img/logo.png'; ?>" alt="">
						</a>
					</div>
					<div class="nav">
						<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
						<div class="search">
							<i id="search" class="fa fa-search"></i>
							<div id="search-form" class="search-form">
								<?php get_search_form(); ?>
							</div>
						</div>

					</div>
				</div>
			</nav>
			<div class="intro">
				<span><?= get_field('introduction', 'options'); ?></span>
				<?php //get_search_form(); ?>
			</div>
		</header>

	<div id="container" class="container">
