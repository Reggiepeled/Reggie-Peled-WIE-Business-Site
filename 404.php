<?php 
get_header(); ?>

<div class="container error-wrapper">
	<div class="row">
		<div class="nine columns">
			<h2>Not Found</h2>
			<h3>It looks like nothing was found at this location.</h3>
			<h3>Try searching for what you need:</h3>
			<?php get_search_form(); ?>
		</div>
		<div class="three columns">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>