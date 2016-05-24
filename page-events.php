<?php get_header(); ?>
		
		<div class="content"> <!-- Div for everything between header and footer -->
			<div class="headline-events">
				<div class="color-box-events"></div>
				<h1>EVENTS &<br/>Konkurrencer</h1>
			</div>
			
			<!-- Sample of The Loop to use for later -->
			<?php $query = new WP_Query(array( 'category_name' => 'competitions' ) ); 

			while($query->have_posts()) : $query->the_post(); ?> <!-- Shorthand while loop that takes the posts that fits the criteria 3 lines up -->
				<div class="post-content-events">
					<div class="loop-content-events center">
						<h2>
							<?php the_title(); ?>
						</h2>
						<p>
							<?php the_excerpt(); ?>
						</p>

						<div class="see open hvr-outline-in" >See more</div>
					</div>
					<?php 
						$post_image_id = get_post_thumbnail_id($post_to_use->ID);
						if ($post_image_id) {
							$thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);
							if ($thumbnail) (string)$thumbnail = $thumbnail[0];
						}
					 ?>

					<div class="photo-content-events" style="background: url('<?php echo $thumbnail; ?>') no-repeat; background-position: top center; background-size: cover">
						<div class="open-content hidden">

							<div class="more-description">

								<div class="colour-box-description">
								</div>
								<div class="content-description">
									<p>
										<?php the_content(); ?>
									</p>
								</div>

							</div>
						</div>
					</div>
				</div>

			<?php endwhile; wp_reset_postdata(); ?> <!-- Important to reset the postdata so another custom loop can be made later -->
		
		</div> <!-- End of .content -->
<?php get_footer(); ?>