<?php get_header(); ?>

<div class="content">
	
	<div class="headline">
		<div class="color-box color-livery"></div>
		<h1>Opstaldning</h1>
	</div>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="image-wrapper">
			<?php the_post_thumbnail(); ?>
		</div>

		<div class="livery-content">
			<?php the_content(); ?>
		</div>



	<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>








</div><!-- .content -->


<?php get_footer(); ?>