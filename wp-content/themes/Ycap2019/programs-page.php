<?php
/*
Template Name: programs
*/


get_header(); ?>

<select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
    <option value=""><?php esc_attr( _e( 'Select Month', 'textdomain' ) ); ?></option> 
    <?php wp_get_archives( array( 'type' => 'alpha', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
</select>
	

	</div><!-- #content -->
</div><!-- #container -->

<?php// get_sidebar(); ?>
<?php get_footer(); ?>

