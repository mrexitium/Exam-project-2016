<?php get_header(); ?>
		
			
			<div class="vidya">
				
			</div>

			<?php $query = new WP_Query(array( 'category_name' => 'instagram' ) ); 

			while($query->have_posts()) : $query->the_post(); ?> <!-- Shorthand while loop that takes the posts that fits the criteria 3 lines up -->
				<?php the_content(); ?>

			<?php endwhile; wp_reset_postdata(); ?> <!-- Important to reset the postdata so another custom loop can be made later -->
			

<?php get_footer(); ?>
