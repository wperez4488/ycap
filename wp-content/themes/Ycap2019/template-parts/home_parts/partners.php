<?php 
	$args = array( 
		'post_type' => 'our_partners', 
		'posts_per_page' => 5 );
	$loop = new WP_Query( $args );
 ?>



<section id="partner">
	<div class="inner">
		<h2 class="title">Our Partners</h2>
		<div class="wrap">
			<?php 
				while ( $loop->have_posts() ) : $loop->the_post();
			 ?>
			<!-- partner -->
			<div class="inner-partner">

				<div class="partner-container">
					<?php echo get_the_post_thumbnail( $post, 'large' ); ?>
					<?php the_title() ?>

					<?php //the_content() ?>
				</div>

			</div>
			<!-- end partner -->
			<?php endwhile; ?>
		</div>
		<div class="more_partners">
			<a href=" http://ycap.com/our_partner">
				
				more
			</a>
		</div>
	</div>
</section>



