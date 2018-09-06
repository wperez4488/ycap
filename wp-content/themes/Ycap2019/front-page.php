<?php 
	get_header(); 
	?>

<!-- jumbotron or hero -->
<?php get_template_part( 'template-parts/home_parts/jumbotron' ); ?>

<!-- our Mission -->
<?php get_template_part( 'template-parts/home_parts/ourMission' ); ?>


<!-- <section class="learn">

		<div class="container-fluid">
			<div class="container">
				<h2 class="title text-center"> Learn About</h2>
			<div class="row">
				<div class="col">
					<div class="circle">
						<p>educational Programs</p>
					</div>
				</div>

				<div class="col spec">
					<div class="circle">
					<p>Our Programs</p>
				</div></div>f
				<div class="col">
						<div class="circle">
					<p>Healthful Recreation</p>
				</div>
			</div>

			</div>
		
			<div class="row">
				<div class="col">
					<div class="circle">
					<p>Proper Substanance</p>
				</div></div>
				<div class="col">
					<div class="circle">
					<p>Financial Independence</p>
				</div></div>

			</div>
			

			</div>
		</div>

</section>


<section class="partners">
	<div class="container-fluid">
	<div class="container">
		
	<h2 class="title text-center"> Our Partners</h2>
			<div class="d-flex flex-wrap align-items-center">
				<div class="row align-items-center margin-auto bb">
				<div class="br col-sm-3 text-center">
				<div class="square">	
					<?php if (!empty($partner_1)):?>

						<img src="<?php echo $partner_1['url'];?>" alt="?<php echo $partner_1['alt'?>" >

						<?php endif;?>
				</div>
				</div>	

				<div class="br col-sm-3 text-center">
					<div class="square">
						<?php if (!empty($partner_2)):?>

						<img src="<?php echo $partner_2['url'];?>" alt="?<php echo $partner_2['alt'?>" >

						<?php endif;?>
					</div>
					
				</div>
				<div class="br col-sm-3 text-center">
					<div class="square">
						<?php if (!empty($partner_3)):?>

						<img src="<?php echo $partner_3['url'];?>" alt="?<php echo $partner_3['alt'?>" >

						<?php endif;?>
					</div>
					
				</div>
				<div class=" col-sm-3 text-center">
					<div class="square">
						<?php if (!empty($partner_4)):?>

						<img src="<?php echo $partner_4['url'];?>" alt="?<php echo $partner_4['alt'?>" >

						<?php endif;?>
					</div>
					
				</div>
	
	</div>
</div>
				
			<div class="row align-items-center margin-auto">
				<div class="br col-sm-3  text-center">
				<div class="square">
					<?php if (!empty($partner_5)):?>

						<img src="<?php echo $partner_5['url'];?>" alt="?<php echo $partner_5['alt'?>" >

						<?php endif;?>
				</div>
				</div>	

				<div class="br col-sm-3  text-center">
					<div class="square">
						<?php if (!empty($partner_6)):?>

						<img src="<?php echo $partner_6['url'];?>" alt="?<php echo $partner_6['alt'?>" >

						<?php endif;?>
					</div>
					
				</div>
				<div class="br col-sm-3  text-center">
					<div class="square">
						<?php if (!empty($partner_7)):?>

						<img src="<?php echo $partner_7['url'];?>" alt="?<php echo $partner_7['alt'?>" >

						<?php endif;?>
					</div>
					
				</div>
				<div class=" col-sm-3  text-center ncc">
					<div class="square">
						<?php if (!empty($partner_8)):?>

						<img src="<?php echo $partner_8['url'];?>" alt="?<php echo $partner_8['alt'?>" >

						<?php endif;?>
					</div>
					
				</div>
	
	</div>

			
</div>
</div>
</section>


<section class="take">
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="d-flex justify-content-*-center take">
			<span class="action">
				Take Action
			</span>
			<button>Join</button>
		</div></div>
	</div>
	</div>
</section> -->






<?php
get_footer();
