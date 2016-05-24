<?php get_header(); ?>
		
		<div class="content"> <!-- Div for everything between header and footer -->
			<div class="headline">
				<div class="color-box"></div>
				<h1>Kontakt</h1>
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
		</div><!-- loop-wrapper -->

        <?php $query2 = new WP_Query(array( 'category_name' => 'contactpicture' ) ); 
        while($query2->have_posts()) : $query2->the_post(); ?> <!-- Shorthand while loop that takes the posts that fits the criteria 3 lines up -->
            <div class="contact-picture">
                 <a href="<?php echo get_post_meta($post->ID, 'value', true); ?>
"><?php the_post_thumbnail(); ?></a>
                 <h1>
                    <a href="<?php the_meta(); ?>"><?php the_title(); ?></a>
                 </h1>
            </div>
        <?php endwhile; wp_reset_postdata(); ?> <!-- Important to reset the postdata so another custom loop can be made later -->
		
		</div> <!-- End of .content -->

<div id='map' style='width: 100%; height: 500px;'></div>
<script>
mapboxgl.accessToken = 'pk.eyJ1IjoiZG91dmFuam91IiwiYSI6ImNpbzlxMWF3YjAwMGt1cG0xNnpkZmwyMGIifQ.nlwCYAoC2rejHP_bRO5JdA';
  var map = new mapboxgl.Map({
      container: 'map',
      style: 'mapbox://styles/douvanjou/cio9q8imc004avemcqvono1va',
      center: [10.353518099999974, 55.40931699999999],
	  zoom: 13,
	  hash: true

  });
  
map.on('load', function () {
    map.addSource("markers", {
        "type": "geojson",
        "data": {
            "type":"FeatureCollection",
            "features":[{
                "type":"Feature",
                "properties":{
                    "id":"marker-iod3cl120",
                    "title":"Fyens Rideklub",
                    "description":"Adresse: TarupgÃ¥rdsvej 3, 5210 Odense <br>\nTelefon: 66 17 98 64",
                    "marker-size":"large",
                    "marker-color":"#e7857f",
                    "marker-symbol":""
                    
                },
                "geometry":{
                    "coordinates":[10.353523,55.409392],
                    "type":"Point"
                },
            }],
        }
    });

    map.addLayer({
        "id": "markers",
        "type": "symbol",
        "source": "markers",
        "layout": {
            "icon-image": "marker-15",
            "text-field": "{title}",
            "text-font": ["Open Sans Regular", "Arial Unicode MS Bold"],
            "text-offset": [0, 0.6],
            "text-anchor": "top"
        }
    });

    map.scrollZoom.disable();
});



</script>
<?php get_footer(); ?>