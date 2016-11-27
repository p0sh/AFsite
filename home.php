<?php get_header(); ?>



	<div class="angle2">
	<section class="page_intro">

		<div class="headshot">
			<?php echo get_the_post_thumbnail( '182'); ?>
		</div>

<!-- TEXT FROM PAGE HOME -->		
		<p class="measure"><?php echo get_option('o_home_blurb'); ?></p>

	</section>
	</div>	
	

	<section class="content">
<!--  3 MOST RECENT APPEARANCES -->
	<?php $recent = new WP_Query("showposts=3");
	if($recent->have_posts()) :
	while($recent->have_posts()) : $recent->the_post();?>

			<div class="chunk appearance">
				<h1><?php foreach((get_the_category()) as $cat) { echo $cat->cat_name . ' '; } ?></h1>
				<?php the_title( '<h2>', '</h2>' ); ?>
				<?php the_content( '<p>', '</p>' ); ?>

<!-- ACF CODE -->
				<div class="details">
					
					<?php if( get_field('date') ): ?>
						<p>Date: <?php the_field('date'); ?></p>
					<?php endif; ?>
					<?php if( get_field('time') ): ?>
						<p>Time: <?php the_field('time'); ?></p>
					<?php endif; ?>
					<?php if( get_field('location') ): ?>
						<p>Location: <?php the_field('location'); ?></p>
					<?php endif; ?>
					<?php if( get_field('tickets') ): ?>
						<p id="tickets"><a class="CTA" href="<?php the_field('tickets'); ?>">Reserve seats</a></p>
					<?php endif; ?>

				</div>

<!-- END ACF CODE -->


<!-- WP FIELD CODE
				<div class="details">
					
					<?php if( get_post_meta($post->ID, 'Reserve seats', true) ) { ?>
						<p id="tickets"><a class="CTA" href="<?php echo get_post_meta($post->ID, 'Reserve seats', true); ?>">Reserve seats</a></p>
					<?php } ?>
					<?php if( get_post_meta($post->ID, 'Location', true) ) { ?>
						<p id="location"><span class="detail-data">Location:</span> <?php echo get_post_meta($post->ID, 'Location', true); ?></p>
					<?php } ?>
					<?php if( get_post_meta($post->ID, 'Date', true) ) { ?>
						<p id="date"><span class="detail-data">Date:</span> <?php echo get_post_meta($post->ID, 'Date', true); ?></p>
					<?php } ?>
					<?php if( get_post_meta($post->ID, 'Time', true) ) { ?>
						<p id="time"><span class="detail-data">Time:</span> <?php echo get_post_meta($post->ID, 'Time', true); ?></p>
					<?php } ?>
				</div>
END WP FIELD CODE -->
	
			</div>				   	

	<?php endwhile;
	else : ?>
	
		<?php
		$post_id = 261;
		$queried_post = get_post($post_id);
		?>
		<p><?php echo $queried_post->post_content; ?></p>
		
	
	<?php endif; ?>


	</section>


<?php get_footer(); ?>