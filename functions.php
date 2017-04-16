<?php 

/*-------------- Enable Widgets--------------- */
function blank_widgets_init() {			//defining a function
	register_sidebar( array(
		'name' => ('Footer Widget One'),
		'id' => 'footer-widget-one',
		'description' => 'First widget for our footer', 
		'before_widget' => '<div class="widget-footer-one">', 
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'						
	));

    register_sidebar( array(
        'name' => ('Home Widget One'),
        'id' => 'home-widget-one',
        'description' => 'First widget for our homepage', 
        'before_widget' => '<div class="widget-home-one">', 
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'                        
    ));

    register_sidebar( array(
        'name' => ('Sidebar Widget One'),
        'id' => 'sidebar-widget-one',
        'description' => 'Widget for our sidebar', 
        'before_widget' => '<div class="widget-sidebar-one">', 
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'                        
    ));
}
add_action('widgets_init', 'blank_widgets_init');	

/*-------------- Enable Menu ---------------*/ 
add_theme_support('menus');

/*--- Enable Post Thumbnails ---*/
add_theme_support( 'post-thumbnails' ); 

/* adding taxonomies */
function custom_taxonomy_wie_init() {
	register_taxonomy(
	    'webdevelopment',
	    'post',
	    array(
	      'hierarchical' => true,	// asks whether the custom taxonomy will have the characteristics of embedded levels like a category
	      'label'        => 'Web Development Types',	//the displayed label of the taxonomy
	      'query_var'    => true 	//allows us to search and sort based on this custom taxonomy
	    )
  	);
}
add_action( 'init', 'custom_taxonomy_wie_init' );

/* ----------- enqueue files ----------*/
function jquery_js() {
    wp_enqueue_script(
        'jquery-js',
        get_stylesheet_directory_uri() . '/javascripts/jquery-3.2.0.min.js',
        array( 'jquery' )
    );
}

add_action( 'wp_enqueue_scripts', 'jquery_js' );

function unslider_js() {
    wp_enqueue_script(
        'unslider-js',
        get_stylesheet_directory_uri() . '/javascripts/unslider.js',
        array( 'jquery' )
    );
}

add_action( 'wp_enqueue_scripts', 'unslider_js' );

function unslider_css() {
    wp_enqueue_style(
        'unslider-css',
        get_template_directory_uri() . '/css/unslider.css'
    );
}
add_action('wp_enqueue_scripts', 'unslider_css');

/*----------- short code ------------*/
function about_info_func( $atts ) {
    $a = shortcode_atts( array(
        'image' => '',
        'name' => 'the name',
        'info' => 'bio'
    ), $atts );

    return "<div class=\"bio\"><img src=\"{$a['image']}\" /><h4>{$a['name']}</h4><div class=\"bio-hover\"><p>{$a['info']}</p></div></div>";
}
add_shortcode( 'about_info', 'about_info_func' );

function services_func( $atts ) {
    $a = shortcode_atts( array(
        'image' => '',
        'name' => 'the name',
        'info' => 'bio'
    ), $atts );

    return "<div class=\"service\"><img src=\"{$a['image']}\" /><h4>{$a['name']}</h4><div class=\"service-hover\"><p>{$a['info']}</p><p><a href=\"contact.php\">Schedule</a></p></div></div>";
}
add_shortcode( 'services_info', 'services_func' );

function get_price_func( $atts ) {
    $a = shortcode_atts( array(
    	'name' => 'service name',
        'price' => '$'
    ), $atts );

    return "{$a['price']}";
}
add_shortcode( 'pricing', 'get_price_func' );

function get_promo_func( $atts ) {
    $a = shortcode_atts( array(
    	'image' => '',
    	'title' => 'promo title',
        'details' => 'promo details'
    ), $atts );

    return "<div class=\"promo\"><img src=\"{$a['image']}\" /><h4>{$a['title']}</h4><div class=\"promo-hover\"><p>{$a['details']}</p></div></div>";
}
add_shortcode( 'promos', 'get_promo_func' );

function get_location_func( $atts ) {
    $a = shortcode_atts( array(
    	'address' => 'store address',
    	'hours' => 'store houres'
     ), $atts );

    return "<div class=\"location\"><p>Address:</p><p>{$a['address']} <img src=\"http://www.designedbyreggie.com/businesssite/wp-content/themes/business-template/images/location.png\" /></p><br><br><p>Store Hours:</p><p>{$a['hours']}</p></div>";
}
add_shortcode( 'locations', 'get_location_func' );

function get_contact_func( $atts ) {
    $a = shortcode_atts( array(
    	'address' => 'address',
    	'phone' => 'phone number',
    	'fax' => 'fax number',
    	'email' => 'email',
    	'blog' => 'blog',
    ), $atts );

    return "</div><div class=\"six columns center\"><table>
    				<tr>
						<td><img src=\"http://www.designedbyreggie.com/businesssite/wp-content/themes/business-template/images/address.png\" alt=\"address\" title=\"address\" /></td>
						<td>{$a['address']}</td>
					</tr>
					<tr>
						<td><img src=\"http://www.designedbyreggie.com/businesssite/wp-content/themes/business-template/images/phone.png\" alt=\"phone\" title=\"phone\" /></td>
						<td>{$a['phone']}</td>
					</tr>
					<tr>
						<td><img src=\"http://www.designedbyreggie.com/businesssite/wp-content/themes/business-template/images/fax.png\" alt=\"fax\" title=\"fax\" /></td>
						<td>{$a['fax']}</td>
					</tr>
					<tr>
						<td><img src=\"http://www.designedbyreggie.com/businesssite/wp-content/themes/business-template/images/email.png\" alt=\"email\" title=\"email\" /></td>
						<td><a href=\"mailto:revital.peled@gmail.com\">{$a['email']}</a></td>
					</tr>
					<tr>
						<td><a href=\"blog.php\"><img src=\"http://www.designedbyreggie.com/businesssite/wp-content/themes/business-template/images/blog.png\" alt=\"blog\" title=\"blog\" /></a></td>
						<td><a href=\"blog.php\">{$a['blog']}</a></td>
					</tr>
				</table>";
}
add_shortcode( 'contacts', 'get_contact_func' );

/* -------------- Slider ---------------- */
function slider_tutorial() {
  $labels = array(
    'name'               => _x( 'Slides', 'post type general name' ),
    'singular_name'      => _x( 'Slide', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'slides' ),
    'add_new_item'       => __( 'Add Slide' ),
    'edit_item'          => __( 'Edit Slides' ),
    'new_item'           => __( 'New Slide' ),
    'all_items'          => __( 'All Slides' ),
    'view_item'          => __( 'View Slides' ),
    'search_items'       => __( 'Search Slides' ),
    'not_found'          => __( 'No slides found' ),
    'not_found_in_trash' => __( 'No slides found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Slider'
  );

  $args = array(
    /*--- Begin Arguments Options ---*/
    'labels'        => $labels,
    'description'   => 'Slides for our Unslider integration',
    'public'        => true,
    'menu_position' => 6,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt'),
    'has_archive'   => true,
  );

  register_post_type( 'slider', $args ); 
}

add_action( 'init', 'slider_tutorial' );