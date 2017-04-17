<footer class="row">
	<div class="four columns">
		<a href="<?php $url = home_url('/'); echo $url; ?>" alt="Home">
			<img class="foot" src="<?php echo get_theme_file_uri('images/slickslogo.png');?>" alt="Logo" title="Logo" />
		</a>
	</div>
	<div class="four columns">
		<p>Follow Us</p>
		<article>
            <a class="social" href="https://www.facebook.com/revital.peled.10" target="_blank" title="Facebook">
                <img src="<?php echo get_theme_file_uri('images/facebook.png');?>" alt="Facebook" title="Facebook" /></a>
            <a class="social" href="https://twitter.com/ReggiePeled" target="_blank" title="Twitter">
                <img src="<?php echo get_theme_file_uri('images/twitter.png');?>" alt="Twitter" title="Twitter" /></a>
            <a class="social" href="https://www.instagram.com/peledreggie/?hl=en" target="_blank" title="Instagram">
                <img src="<?php echo get_theme_file_uri('images/instagram.png');?>" alt="Instagram" title="Instagram" /></a>	
            <a class="social" href="http://www.designedbyreggie.com/businesssite/blog/" target="_blank" title="Blog">
                <img src="<?php echo get_theme_file_uri('images/blogsite.png');?>" alt="Blog" title="Blog" /></a>
        </article>
		<p>800 - 510 - 1670</p>
		<p>&#169; 2017 Slick's Automotive Repairs</p> 	      
	</div>
	<div class="four columns">
		<?php dynamic_sidebar('footer-widget-one'); ?>
	</div>
</footer>
<?php wp_footer(); ?>

</body>
</html>