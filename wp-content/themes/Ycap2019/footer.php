<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ycap
 */
$address = get_field('address');
$phone = get_field('phone');
?>





<footer>
<section class="form">
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="sign">
					<div class="marg">
					<h2 class="title nc">Sign up for our newsletter</h2>
					<form action="">
					<?php echo do_shortcode( '[contact-form-7 id="51" title="Contact form 1"]' ); ?>
					</form>
				
					<span class="cont">Contact Us</span>

					<span class="address">
						<p class="cap">Ycap</p>
						<p><?php echo $address;?></p>
						<p><?php echo $phone;?></p>
						<p>INFO@EMAIL.COM</p>
					</span>

					<div class="social d-flex">
						<div class="snap">
							<a href=""> 
								<i class="fab fa-snapchat"></i>
							</a>
						</div>
						<div class="facebook">
							<a href="">
								<i class="fab fa-facebook-f"></i>
							</a>
						</div>
						<div class="twitter">
							<a href=""> 
								<i class="fab fa-twitter"></i> 
							</a>	
						</div>
					</div>

				</div>
			</div>
			</div>
		</div>
	</div>
</section>

	<div class="botnav">
		<div class="container-fluid">
			<div class="container">
				<div class="nav">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'footer',
						'menu_class' => 'footnav',
					) );
					?>
				</div>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>

</body>
</html>
