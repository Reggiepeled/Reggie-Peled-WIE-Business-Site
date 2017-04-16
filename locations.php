<?php 
/* 
Template name: locations page 
*/ 
?>

<?php get_header(); ?>		<!--link to the header file-->
	<div class="row">		
		<div class="twelve columns center">
			<?php 
			if (have_posts()) : the_post(); ?>
				<header class="location">
					<?php if ( has_post_thumbnail() ) { ?>
						<figure>  
							<?php		
								the_post_thumbnail('full');
						  }?> 
						</figure>
						<h2>Find a Store</h2>
				</header>
				<div class="container">
					<main class="location">
						<?php the_content(); ?>
					</main>
				</div>
				<?php
			endif; ?>
		</div>
	</div>
<?php get_footer(); ?>		<!--link to the footer file-->