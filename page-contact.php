<?php get_header(); ?>

<!-- THIS SECTION WILL GET STYLED W/ THE TOP BLUE ANGLED BG -->
	<div class="angle2">
	<section class="page_intro">
	</section>
	</div>
	
	<section class="content contact-form">

	<?php
	if (have_posts()) :
	   while (have_posts()) :
	      the_post();
	      the_content();
	   endwhile;
	endif;
	?>

	</section>


<?php get_footer(); ?>