<?php 

add_filter('show_admin_bar', '__return_false');

add_theme_support('post-thumbnails');

register_nav_menus([
	'left-nav' => 'left menu',
	'right-nav' => 'right menu',
]);

