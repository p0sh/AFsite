<?php get_header(); ?>

<!-- THIS SECTION WILL GET STYLED W/ THE TOP BLUE ANGLED BG -->
	<div class="angle2">
	<section class="page_intro">
	</section>
	</div>
	
	<section class="content gallery">

		<?php 
		
		$images = get_field('gallery');
		
		if( $images ): ?>

		        <?php foreach( $images as $image ): ?>
					<div class="chunk piece-of-media">
		                <a href="<?php echo $image['url']; ?>">
		                     <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
		                </a>
		                <p><?php echo $image['caption']; ?></p>
		            </div>
		        <?php endforeach; ?>

		<?php endif; ?>

	</section>

<?php get_footer(); ?>