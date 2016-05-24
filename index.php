<?php get_header(); ?>
		
			
			<div class="vidya">
				<div id="vid">
					<video autoplay  id="bgvid" loop class="fullscreen-bg__video">
		  				<source src="<?php echo get_template_directory_uri(); ?>/videobackground.mp4" type="video/webm">
					</video>
				</div>
			</div>

			<?php $query = new WP_Query(array( 'category_name' => 'instagram' ) ); 

			while($query->have_posts()) : $query->the_post(); ?> <!-- Shorthand while loop that takes the posts that fits the criteria 3 lines up -->
				<?php the_content(); ?>

			<?php endwhile; wp_reset_postdata(); ?> <!-- Important to reset the postdata so another custom loop can be made later -->
			

<?php get_footer(); ?>
