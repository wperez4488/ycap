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
		  	
		  	<div class="form-inline">
		  	  <a class="btn btn-primary" data-toggle="modal"data-target="#exampleModal" href="">
		  	  	<i class="fas fa-bars"></i>
		  	  </a>
		  				
				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Menu</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				      	<!-- registerd 'menu-1' in functions.php -->
				        <?php 
		                    wp_nav_menu( array(
		                            'theme_location'    => 'menu-1',
		                            'container'         => '',
		                            'container_class'   => '',
		                            'menu_class'        => 'menu-1 nav navbar-nav',
		                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback'
		                            // 'walker'            => new wp_bootstrap_navwalker()
		                        )
		                    );
		                ?>
				      </div>
				      <div class="modal-footer">
				       <!--  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="button" class="btn btn-primary">Save changes</button> -->
				      </div>
				    </div>
				  </div>
				</div>
				<!-- end modal -->
		  	</div>
		  </div>
		</nav>


	</header>



	<div id="content" class="site-content">
