<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
    <title><?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

</head>
<body>

	<div class="container">
		<header class="row">
			<div class="twelve columns">
				<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
			</div>
		</header>
		<!-- Add Menu Here -->
		<div class="row">
		    <div class="nine columns">
		        <?php wp_nav_menu(array(
					'menu' => 'Main Menu',
		            'sort_column' => 'menu_order',
		            'container_class' => 'blank-menu-header'
		            ));?>
		    </div>
			<div class="three columns">
				<?php get_search_form(); ?>
			</div>
		</div>
