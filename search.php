<?php get_header(); ?>

<div class="container search-wrapper">
	<div class="row">
		<div class="nine columns">
			<?php if( have_posts() ) :?>
				<h2><?php printf(
					__('Search Results for: %s'), 
					'<span>' . get_search_query() . '</span>' );
				?></h2>
				<?php while (have_posts()) : the_post(); ?>
					<h3><?php the_title(); ?></h3>
					<?php the_content();
				endwhile;
			 else : ?>
				<h2>Nothing Found</h2>
				<p>Sorry, but nothing matched your search criteria. Please try again with different search terms.</p>
			<?php endif; ?>
		</div>
		<div class="three columns">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>