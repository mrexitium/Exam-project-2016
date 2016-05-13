<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fyens Rideklub</title>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>style.css">
	<!-- Insert below the logo url for the mini logo that will be shown on the tab in the browser-->
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/images/name.png">
	<!-- Insert all fonts below this -->

</head>
<body>
	<div id="site-wrapper">
		<!-- Header with the navigation -->
		<header class="site-header">
			<nav class="site-nav">
				<?php wp_nav_menu(); ?>
			</nav>
		</header>