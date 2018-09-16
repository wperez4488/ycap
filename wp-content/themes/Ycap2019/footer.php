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



<section id="take">
	<div class="inner">
		<div class="wrap">
			
			<div class="take">
				<h2 class="title">
					Take Action
				</h2>
				<a href="#join" class="btn">
					Join
				</a>

			</div>

		</div>
	</div>
</section>


<footer id="footer">
	<div class="form">
		<div class="inner">
			<div class="wrap">
				
				<div class="sign">
					<div class="marg">
					<h2 class="title nc">Sign up for our newsletter</h2>
					<form>
					<?php echo do_shortcode( '[contact-form-7 id="51" title="Contact form 1"]' ); ?>
					</form>
				
					<h2 class="title">Contact Us</h2>

					<span class="address">
						<p class="cap">Ycap</p>
						<p>222 somewhere in yonkjers</p>
						<p>222.222.2222</p>
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
			<div class="botnav">
				<div class="inner">
					<div class="wrap">
						
							<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'depth'             => 2,
								'menu_id'        => 'footer-nav',
								'container'         => 'div',
								'container-class' => 'dropdown',
								'menu_class' => 'nav',
								'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
								'walker'            => new WP_Bootstrap_Navwalker(),
							) );
							?>
						
					</div>
				</div>
			</div>
		</div>
	</div>

</footer>

<!-- modals -->
<!-- Modal -->
				<div class="modal fade" id="primary-menu" tabindex="-1" role="dialog" aria-labelledby="primary-menu" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				       <!--  <h5 class="modal-title" id="primary-menu">Menu</h5> -->
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
				   
				    </div>
				  </div>
				</div>
				<!-- end modal -->


<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>


<?php wp_footer(); ?>

</body>
</html>
