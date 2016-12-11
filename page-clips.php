<?php get_header(); ?>

<!-- THIS SECTION WILL GET STYLED W/ THE TOP BLUE ANGLED BG -->
	<div class="angle2">
	<section class="page_intro">
	</section>
	</div>
	
	<section class="content clips">



	<?php
	if (have_posts()) :
	   while (have_posts()) :
	      the_post();
	      the_content();
	   endwhile;
	endif;
	?>




		<?php
		// check if the repeater field has rows of data
		if( have_rows('clips_gallery') ): ?>
		
		 	
		   <?php 
			   // loop through the rows of data and then display a sub field value
			   while ( have_rows('clips_gallery') ) : the_row(); ?>

		     
				<div class="chunk piece-of-media">
<!-- 					<?php the_sub_field('clip'); ?> -->
					
					
					
<!--
<?php

// get iframe HTML
$iframe = get_sub_field('clip');


// use preg_match to find iframe src
preg_match('/src="(.+?)"/', $iframe, $matches);
$src = $matches[1];


// add extra params to iframe src
$params = array(
    'controls'    => 0,
    'hd'        => 1,
    'autohide'    => 1
);

$new_src = add_query_arg($params, $src);

$iframe = str_replace($src, $new_src, $iframe);


// add extra attributes to iframe html
$attributes = 'frameborder="0"';

$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);


// echo $iframe
echo $iframe;

?>	
-->				
					
					
					
					<p><?php the_sub_field('caption'); ?></p>
				</div>
				
			<?php endwhile; ?>
		    
		
		<?php else :
		
		    // no rows found
		
		endif;
		
		?>


	</section>

<?php get_footer(); ?>