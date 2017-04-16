<?php 
/* 
Template name: services page 
*/ 
?>

<?php get_header(); ?>		<!--link to the header file-->
	<div class="row">		
		<div class="twelve columns center">
			<?php 
			if (have_posts()) : the_post(); ?>
				<header class="services">
					<?php if ( has_post_thumbnail() ) { ?>
						<figure>  
							<?php		
								the_post_thumbnail('full');
						  }?> 
						</figure>
						<h2>Our Services</h2>
				</header>
				<div class="container">
					<main class="services">
						<?php the_content();?>
						<h3>Touch a service to see details</h3>
					</main>
				</div>
				<?php
			endif; ?>
		</div>
	</div>
<?php get_footer(); ?>		<!--link to the footer file-->