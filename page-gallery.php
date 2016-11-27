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

		
		
<!--
		<div class="chunk piece-of-media">
			<img src="img/Purple%20Shirt_800%20copy.jpg" alt="Purple%20Shirt_800%20copy">
			<h1>Name of show</h1>
			<p id="date"><span class="detail-data">Date:</span> June 33rd - July 34th</p>
		</div>
-->
		
		
		

<!--
		<?php 
		
		$images = get_field('gallery');
		
		if( $images ): ?>
		    <ul>
		        <?php foreach( $images as $image ): ?>
		            <li>
		                <a href="<?php echo $image['url']; ?>">
		                     <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
		                </a>
		                <p><?php echo $image['caption']; ?></p>
		            </li>
		        <?php endforeach; ?>
		    </ul>
		<?php endif; ?>
-->


	</section>

<?php get_footer(); ?>