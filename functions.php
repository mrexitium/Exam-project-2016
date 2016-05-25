<?php 

add_filter('show_admin_bar', '__return_false');

add_theme_support('post-thumbnails');

register_nav_menus([
	'left-nav' => 'left menu',
	'right-nav' => 'right menu',
]);

add_action( 'wp_enqueue_scripts', 'my_enqueue_assets' );

function my_enqueue_assets() {
    wp_enqueue_style( 'style', get_template_directory_uri().'/style.css' );
    wp_enqueue_script( 'ajax-lazy-load',  get_stylesheet_directory_uri() . '/scripts/js.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js' );


}

add_action("wp_ajax_lazy_load", "lazy_load");
add_action("wp_ajax_nopriv_lazy_load", "lazy_load");

function lazy_load() {

	$offset = $_GET['offset'];

	$args = array(
		'category_name' => 'horses',
		'posts_per_page' => 2,
		'orderby' => 'date',
		'order' => 'ASC',
		'offset' => $offset,

	);

	$query = new WP_Query( $args );

	for ($i=0; $i < count($query->posts); $i++) {
		$query->posts[$i]->post_content = apply_filters('the_content', $query->posts[$i]->post_content);
		$query->posts[$i]->thumbnail = get_the_post_thumbnail($query->posts[$i]->ID);
	}

	wp_send_json_success($query->posts);
	wp_die();

}
