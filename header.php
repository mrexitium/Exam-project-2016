<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fyens Rideklub</title>
	<?php wp_head(); ?>
	<!-- Insert below the logo url for the mini logo that will be shown on the tab in the browser-->
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/images/logo.png">
	<!-- Insert all fonts below this -->
	<link href='https://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display+SC' rel='stylesheet' type='text/css'>

	<script src='https://api.mapbox.com/mapbox-gl-js/v0.18.0/mapbox-gl.js'></script>
	<link href='https://api.mapbox.com/mapbox-gl-js/v0.18.0/mapbox-gl.css' rel='stylesheet' />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

</head>
<body>
	<div id="site-wrapper">
		<!-- Header with the navigation -->
		<header class="site-header">
			<nav class="site-nav">
				<?php wp_nav_menu(['theme_location' => 'left-nav']); ?>
				<div class="logo-wrapper">
					<a href="http://fyensrideklub.jespers-design.dk/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo"></a>
				</div>
				<?php wp_nav_menu(['theme_location' => 'right-nav']); ?>
			</nav>
		</header>