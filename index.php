<?php get_header(); ?>



	<div class="angle2">
	<section class="page_intro">

	</section>
	</div>	
	

	<section class="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php endwhile; endif; ?>				
	</section>


<?php get_footer(); ?>