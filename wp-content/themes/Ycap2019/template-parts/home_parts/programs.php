<?php 
	global $post;
	$post = $post->ID;

?>


<section id="programs">
	<div class="inner">
		<h2 class="title">Yonkers Community Action Program</h2>
		
		<div class="wrap">
			<!-- loop -->
			
			<div class="col category">
				<div class="circle">
					
					<a class="title" href="<?php echo get_category_link(1); ?>">
							<?php echo get_cat_name( 1 ) ?>
					
					</a>
					
				</div>
			</div>
			<!-- end loop -->

			<!-- loop -->
			<div class="col category">
				<div class="circle">
					<a class="title" href="<?php echo get_category_link(3); ?>">
							<?php echo get_cat_name( 3 ) ?>
					</a>
				</div>
			</div>
			<!-- end loop -->

			<!-- loop -->
			<div class="col category">
				<div class="circle">
					<a class="title" href="<?php echo get_category_link(4); ?>">
							<?php echo get_cat_name( 4 ) ?>
					</a>
				</div>
			</div>
			<!-- end loop -->

			<!-- loop -->
			<div class="col category">
				<div class="circle">
					<a class="title" href="<?php echo get_category_link(5); ?>">
							<?php echo get_cat_name( 5 ) ?>
					</a>
				</div>
			</div>
			<!-- end loop -->

		</div>
	</div>
</section>