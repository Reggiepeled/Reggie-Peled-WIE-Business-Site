<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>

    <!-- Links to Style.css file -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	
	<!-- Link to Google fonts --> 
	<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

	<?php wp_head(); ?>	
</head>

<body>
	<div class="header-container">
		<div class="row">
			<div class="six columns">
				<!-- social media links -->
				<article>
		            <a class="social" href="https://www.facebook.com/revital.peled.10" target="_blank" title="Facebook">
		                <img src="<?php echo get_theme_file_uri('images/facebook.png');?>" alt="Facebook" title="Facebook" /></a>
		            <a class="social" href="https://www.pinterest.com/revitalpeled/" target="_blank" title="Twitter">
		                <img src="<?php echo get_theme_file_uri('images/twitter.png');?>" alt="Twitter" title="Twitter" /></a>
		            <a class="social" href="https://www.pinterest.com/revitalpeled/" target="_blank" title="Instagram">
		                <img src="<?php echo get_theme_file_uri('images/instagram.png');?>" alt="Instagram" title="Instagram" /></a>	
		            <a class="social" href="https://www.pinterest.com/revitalpeled/" target="_blank" title="Blog">
		                <img src="<?php echo get_theme_file_uri('images/blogsite.png');?>" alt="Blog" title="Blog" /></a>
		        </article>
		    </div>
		</div>
		<!-- Navigation Menu -->
		<div class="row">
			<div class="twelve columns">
				<?php wp_nav_menu(array(
					'sort_column' => 'menu_order', 
					'container_class' => 'blank-menu-header'
					));?>
				<a href="<?php $url = home_url('/'); echo $url; ?>" alt="Home">
					<img class="logo" src="<?php echo get_theme_file_uri('images/slickslogoheader.png');?>" alt="Logo" title="Logo" />
				</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="twelve columns">
			<h1 class="hidden"><?php bloginfo('name'); ?></h1>		 <!-- dynamically add the header -->
			<h4 class="hidden"><?php bloginfo('description'); ?></h4> <!-- dynamically add the tagline -->
		</div>
	</div>
