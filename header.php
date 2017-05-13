<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="container">
		<header class="site-header">
			<h1>
				<a href="<?php echo home_url(); ?>">
					<?php bloginfo('name'); ?>
				</a>			
			</h1>
			<h5><?php bloginfo('description') ?></h5>
			<nav class="site-nav">
				<?php wp_nav_menu(array("theme_location"=>"topmenu")); ?>
			</nav>

		</header>
