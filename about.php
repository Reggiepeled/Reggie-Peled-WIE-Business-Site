<?php 
/* 
Template name: about page 
*/ 
?>

<?php get_header(); ?>		<!--link to the header file-->
	<div class="row">		
		<div class="twelve columns center">
			<?php 
			if (have_posts()) : the_post(); ?>
				<header class="about">
					<?php if ( has_post_thumbnail() ) { ?>
						<figure>  
							<?php		
								the_post_thumbnail('full');
						  }?> 
						</figure>
					<h2>Meet<br>the<br>Experts</h2>
				</header>
				<div class="container">
					<?php the_content();?>
				</div>
				<?php
			endif; ?>
		</div>
	</div>
<?php get_footer(); ?>		<!--link to the footer file-->