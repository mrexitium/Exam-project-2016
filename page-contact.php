<?php get_header(); ?>
		
		<div class="content"> <!-- Div for everything between header and footer -->
			<div class="headline">
				<div class="color-box"></div>
				<h1>Contact</h1>
			</div>

			<div class="loop-wrapper">
			<!-- Sample of The Loop to use for later -->
			<?php $query = new WP_Query(array( 'category_name' => 'contact' ) ); 
		
			while($query->have_posts()) : $query->the_post(); ?> <!-- Shorthand while loop that takes the posts that fits the criteria 3 lines up -->
				<div class="post-content-contact">
					<div class="loop-content-contact">
						<h1>
							<?php the_title(); ?>
						</h1>
						<p>
							<?php the_content(); ?>
						</p>
					</div>
				</div>

			<?php endwhile; wp_reset_postdata(); ?> <!-- Important to reset the postdata so another custom loop can be made later -->

		<?php $query2 = new WP_Query(array( 'category_name' => 'contactpicture' ) ); 
		while($query2->have_posts()) : $query2->the_post(); ?> <!-- Shorthand while loop that takes the posts that fits the criteria 3 lines up -->
			<div class="contact-picture">
				 <?php the_post_thumbnail(); ?>
				 <h1>
					<?php the_title(); ?>
				 </h1>
			</div>
			<?php endwhile; wp_reset_postdata(); ?> <!-- Important to reset the postdata so another custom loop can be made later -->
		</div>
		
		</div> <!-- End of .content -->

<div id='map' style='width: 100%; height: 500px;'></div>
<script>
mapboxgl.accessToken = 'pk.eyJ1IjoiZG91dmFuam91IiwiYSI6ImNpbzlxMWF3YjAwMGt1cG0xNnpkZmwyMGIifQ.nlwCYAoC2rejHP_bRO5JdA';
  var map = new mapboxgl.Map({
      container: 'map',
      style: 'mapbox://styles/douvanjou/cio9q8imc004avemcqvono1va',
      center: [-122.420679, 37.772537],
	  zoom: 13,
	  hash: true

  });


</script>
<?php get_footer(); ?>