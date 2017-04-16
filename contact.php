<?php 
/* 
Template name: contact page 
*/ 
?>

<?php get_header(); ?>		<!--link to the header file-->
	<div class="row">		
		<div class="twelve columns">
			<?php 
			if (have_posts()) :	the_post(); ?>
				<header class="contact">
					<?php if ( has_post_thumbnail() ) { ?>
						<figure>  
							<?php		
								the_post_thumbnail('full');
						  }?> 
						</figure>
						<h2>Contact<br>Us</h2>
				</header>
				<div class="container">
					<main class="contact">
						<div class="row">		
							<div class="six columns">
								<h4>Send Us a Message</h4>
								<?php the_content(); ?>
							</div>
						</div>
					</main>
				</div>
				<?php
			endif; ?>
		</div>
	</div>
<?php get_footer(); ?>		<!--link to the footer file-->