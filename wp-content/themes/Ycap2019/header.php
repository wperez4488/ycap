<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ycap
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/bootstrap.min.css"> -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<!-- 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
 -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
		<div class="navbar custom">
			<div class="container">
			<div class="navbar-brand">
				<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/logo2x.png" alt="">
			</div>
		</div>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'ycap' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'header',
			) );
			?>
			<li><i class="fas fa-chevron-right"></i>abc</li>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
