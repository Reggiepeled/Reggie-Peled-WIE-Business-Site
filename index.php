<?php get_header(); ?>		<!--link to the header file-->
	<div class="row">		
		<div class="twelve columns center">
			<header>
				<div class="my-slider"> 	<!-- slider -->
				    <ul>
				        <?php
					    $args   = array( 'post_type' => 'Slider' );
					    $slides = new WP_Query( $args );

					    if( $slides->have_posts() ) {
					      while( $slides->have_posts() ) {
					        $slides->the_post();

					        /*--- Build Thumbnail URL ---*/
					        $thumb_id        = get_post_thumbnail_id();
					        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
					        $thumb_url       = $thumb_url_array[0];
					        ?>
				            <li style="background-image: url('<?php echo $thumb_url ?>');
				            background-size: cover" class="slide-container"></li>      </li>
					        <?php
					      }
					    }
					    else {
					      echo 'No Slides';
					    }
					?>
				    </ul>
				</div>
				<div class="title-wrap">
					<h2><?php the_title(); ?></h2>
					<a href="contact.php">Visit Us Today</a>
				</div>
			</header>
		</div>
	</div>
<div class="container">
	<div class="row">		
		<div class="twelve columns">
			<?php dynamic_sidebar('home-widget-one'); ?>
		</div>
	</div>	
</div>
<?php get_footer(); ?>		<!--link to the footer file-->

<!-- for slider -->
<script>
    $(function() { $('.my-slider').unslider({
        autoplay: true 
        });
    });
</script>	