<?php 
	$post   = get_post( 23 );
	$title = $post->post_title;

	$output =  apply_filters( 'the_content', $post->post_content );
	
	$linkme = get_permalink();
 ?>


<section id="about">
	<div class="inner">
		<div class="wrap">
			<div class="main-image">
				<?php echo get_the_post_thumbnail( $post, 'large' ); ?>
<!-- 				<img src="/wp-content/themes/Ycap2019/assets/img/pic-image.png" alt="">
 -->			</div>

			<div class="about-info">
				<div class="title">
					<a href="<?php echo $linkme; ?>">
						<?php echo $title; ?>
					</a>
					</div>
				<div class="statement">
					<?php echo $output; ?>
				
					<a href="<?php echo $linkme; ?>">
						read more
					</a>
				</div>
			</div>

		</div>
	</div>
</section>