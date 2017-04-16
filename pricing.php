<?php 
/* 
Template name: pricing page 
*/ 
?>

<?php get_header(); ?>		<!--link to the header file-->
	<div class="row">		
		<div class="twelve columns center">
			<?php 
			if (have_posts()) : the_post(); ?>
				<header class="pricing">
					<?php if ( has_post_thumbnail() ) { ?>
						<figure>  
							<?php		
								the_post_thumbnail('full');
						  }?> 
						</figure>
						<h2>Prices and Promotions</h2>
				</header>
				<div class="container">
					<section class="pricing">
					<table>
						<tr>
							<td><img src="<?php echo get_theme_file_uri('images/air.png');?>" alt="Air" title="Air" /></td>
							<td>Air Conditioning Service</td>
							<td><?php echo do_shortcode('[pricing price="$500 - $1000"]'); ?></td>
						</tr>
						<tr>
							<td><img src="<?php echo get_theme_file_uri('images/battery.png');?>" alt="battery" title="battery" /></td>
							<td>Batteries, Alternator and Starter Maintenance</td>
							<td><?php echo do_shortcode('[pricing price="$650 - $1500"]'); ?></td>
						</tr>
						<tr>
							<td><img src="<?php echo get_theme_file_uri('images/engine.png');?>" alt="engine" title="engine" /></td>
							<td>Engine Replacement and Maintenance</td>
							<td><?php echo do_shortcode('[pricing price="$1500 - $3500"]'); ?></td>
						</tr>
						<tr>
							<td><img src="<?php echo get_theme_file_uri('images/light.png');?>" alt="light" title="light" /></td>
							<td>Car Headlight Replacement</td>
							<td><?php echo do_shortcode('[pricing price="$100 - $500"]'); ?></td>
						</tr>
						<tr>
							<td><img src="<?php echo get_theme_file_uri('images/wheel.png');?>" alt="wheel" title="wheel" /></td>
							<td>Wheel Alignment and Balance</td>
							<td><?php echo do_shortcode('[pricing price="$250 - $750"]'); ?></td>
						</tr>
					</table>
					</section>
				</div>
				<?php
				the_content();
			endif; ?>
		</div>
	</div>
<?php get_footer(); ?>		<!--link to the footer file-->