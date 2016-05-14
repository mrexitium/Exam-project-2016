<?php get_header(); ?>
		
		<div class="content"> <!-- Div for everything between header and footer -->
			
			<!-- Sample of The Loop to use for later -->
			<?php $query = new WP_Query([
				'category-name' => 'horses', /*This is where you select what criteria your output should have*/
			]); 

			while($query->have_posts()) : $query->the_post(); ?> <!-- Shorthand while loop that takes the posts that fits the criteria 3 lines up -->
				<div class="loop-content">
					<?php the_title(); ?>
					<?php the_content(); ?>
				</div>

			<?php endwhile; wp_reset_postdata(); ?> <!-- Important to reset the postdata so another custom loop can be made later -->
		
		</div> <!-- End of .content -->

<?php get_footer(); ?>