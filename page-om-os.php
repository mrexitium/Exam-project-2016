<?php get_header(); ?>
		
		<div class="content"> <!-- Div for everything between header and footer -->
			<div class="headline-about">
				<h1>Om os</h1>
			</div>
		<!-- HISTORY -->	
			<!-- Sample of The Loop to use for later -->
			<?php $query = new WP_Query(array(
				'category_name' => 'about', 
				'order' => 'asc',
				'orderby' => 'date',/*This is where you select what criteria your output should have*/
			)); 

			while($query->have_posts()) : $query->the_post(); ?> <!-- Shorthand while loop that takes the posts that fits the criteria 3 lines up -->
				<div class="post-content-about">
					<div class="loop-content-about">
						<h3>
							<?php the_title(); ?>
						</h3>
						<div class="color-box-history"></div>
						<p>
							<?php the_content(); ?>
						</p>
					</div>
					<?php 
						$post_image_id = get_post_thumbnail_id($post_to_use->ID);
						if ($post_image_id) {
							$thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);
							if ($thumbnail) (string)$thumbnail = $thumbnail[0];
						}
					 ?>
					<div class="photo-content-about" style="background: url('<?php echo $thumbnail; ?>') no-repeat; background-position: top center;">
					</div>


				</div>

			<?php endwhile; wp_reset_postdata(); ?> <!-- Important to reset the postdata so another custom loop can be made later -->
		<div class="staff-header">	
		<h4>Personale</h4>
		<div class="color-box-staff"></div>
		</div>
		<!-- STAFF -->
		<div class="loop-content-staff"><?php $query = new WP_Query([
						'category_name' => 'staff', 
						'order' => 'asc',
						'orderby' => 'date',/*This is where you select what criteria your output should have*/
					]); 
		
					while($query->have_posts()) : $query->the_post(); ?> <!-- Shorthand while loop that takes the posts that fits the criteria 3 lines up -->
						<div class="post-content-staff">
							<div class="photo-content-staff">
								<div class="hover">	
								<?php the_post_thumbnail(); ?>
								</div>
							</div>
							<h2>
								<?php the_title(); ?>
							</h2>
							<p>
								<?php the_content(); ?>
							</p>
						</div>
		
					<?php endwhile; wp_reset_postdata(); ?> <!-- Important to reset the postdata so another custom loop can be made later --></div>
		<!-- SPONSORS -->
		<div class="loop-content-sponsors"><?php $query = new WP_Query([
						'category_name' => 'sponsors', 
						'order' => 'asc',
						'orderby' => 'date',/*This is where you select what criteria your output should have*/
					]); 
		
					while($query->have_posts()) : $query->the_post(); ?> <!-- Shorthand while loop that takes the posts that fits the criteria 3 lines up -->
						<div class="post-content-sponsors">
							<h4>
								<?php the_title(); ?>
							</h4>
							<div class="color-box-sponsors"></div>
							<p>
								<?php the_content(); ?>
							</p>
						</div>
		
					<?php endwhile; wp_reset_postdata(); ?> <!-- Important to reset the postdata so another custom loop can be made later --></div>
		<div class="loop-content-sponsors-logo"><?php $query = new WP_Query([
						'category_name' => 'sponsors-logo', 
						'order' => 'asc',
						'orderby' => 'date',/*This is where you select what criteria your output should have*/
					]); 
		
					while($query->have_posts()) : $query->the_post(); ?> <!-- Shorthand while loop that takes the posts that fits the criteria 3 lines up -->
						<div class="post-content-sponsors-logo">
							<?php the_post_thumbnail(); ?>
						</div>
		
					<?php endwhile; wp_reset_postdata(); ?> <!-- Important to reset the postdata so another custom loop can be made later --></div>

		</div> <!-- End of .content -->

<?php get_footer(); ?>