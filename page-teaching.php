<?php get_header(); ?>
		
		<div class="content"> <!-- Div for everything between header and footer -->
			<div class="headline">
				<div class="color-box"></div>
				<h1>TEACHING</h1>
			</div>
			
			<!-- Sample of The Loop to use for later -->
			<?php $query = new WP_Query(array( 'category_name' => 'teaching' ) ); 

			while($query->have_posts()) : $query->the_post(); ?> <!-- Shorthand while loop that takes the posts that fits the criteria 3 lines up -->
				<div class="post-content">
					<div class="loop-content">
						<h1>
							<?php the_title(); ?>
						</h1>
						<p>
							<?php the_content(); ?>
						</p>
					</div>
				
				</div>

			<?php endwhile; wp_reset_postdata(); ?> <!-- Important to reset the postdata so another custom loop can be made later -->
		
		</div> <!-- End of .content -->

<?php get_footer(); ?>