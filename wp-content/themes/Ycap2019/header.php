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


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
		
	<header>

		<nav class="top-navigation">
		  <div class="main-container">
		  	<!-- wp custome logo -->
		  	<?php the_custom_logo( $blog_id = 0 ); ?>
		  	<!-- <a class="navbar-brand" href="#">
		  		<img src="/assets/img/logo2x.png" alt="">
		  	  </a> -->
		  	
		  	<div class="burger">
		  		<a href="/contact-us" class="btn btn-outline-light contact">
		  			contact us
		  		</a>
				<a class="btn btn-outline-light ham" data-toggle="modal" data-target="#primary-menu" href="">
					<i class="fas fa-bars"></i>
				</a>
				<!-- modal in footer  -->
		  	</div>
		  </div>
		</nav>


	</header>



	<div id="content" class="site-content">
