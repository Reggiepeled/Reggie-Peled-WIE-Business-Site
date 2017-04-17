<?php get_header(); ?>
<div class="container single-wrapper">
	<section class="row">
		<div class="nine columns">
			<?php 
			if (have_posts()) :
				while (have_posts()) : the_post(); ?>
					<div class="blog-post">
						<?php if ( has_post_thumbnail() ) { ?>
						<figure>  
							<?php the_post_thumbnail('large'); 
							  }?> 
						</figure>
						<h2><?php the_title(); ?></h2>
						<h5><?php the_date(); ?></h5>
						<?php the_content(); ?>
					</div>
					<?php 
				endwhile;?>
				<!--Add the pagination-->
				<div class="row">
					<div class="six columns">
						<div class="pagination"><?php previous_post_link('< %link'); ?></div>
					</div>
					<div class="six columns alignright">
						<div class="pagination"><?php next_post_link('%link >'); ?></div>
					</div>
				</div>
				<?php
			endif; ?>
		</div>
		<!-- SIDEBAR -->
		<div class="three columns">
			<?php get_sidebar(); ?>
		</div>
	</section>
</div>
<!-- end container -->

<?php get_footer(); ?>
