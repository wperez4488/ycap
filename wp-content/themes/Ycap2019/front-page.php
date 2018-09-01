<?php
/**
 Template Name: Home page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ycap


 */
$blurb_1 = get_field('blurb1');
$statement = get_field('statement');
$partner_1 = get_field('partner_1');
$partner_2 = get_field('partner_2');
$partner_3 = get_field('partner_3');
$partner_4 = get_field('partner_4');
$partner_5 = get_field('partner_5');
$partner_6 = get_field('partner_6');
$partner_7 = get_field('partner_7');
$partner_8 = get_field('partner_8');
get_header();
?>
<div class="hero">
	<div class="container-fluid">
		<div class="container">
			<div class="header text-left">
				<h1>Yonkers<br> Community <br> <span class="yellow">Action Program</span></h1>
			<hr>
			</div>
			
			<div class="subline">
				
				<p>Helping People. Changing Lives</p>
			</div> 

			<div class="hugs">
				<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/hugs.png" alt="">
				<div class="content col-md-6">
					<?php echo $blurb_1;?>
				</div>
			</div>
			
			<div class="group">
				<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/Group.png" alt="">
			</div>

		</div>
	</div>
</div>


<section class="about">
	<div class="container-fluid">
		<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img src="" alt="">
			</div>

			<div class="col-md-6">
				<div class="title">Our Mission</div>
				<div class="statement">
					<?php echo $statement;?>
				</div>
			</div>

			</div>
	</div>
</div>


</section>



<section class="learn">

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
				</div></div>
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
</section>






<?php
get_footer();
