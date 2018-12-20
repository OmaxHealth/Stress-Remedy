<?php
// WordPress: Enables GZip Compression
add_action('after_setup_theme','enable_gzip_compression');
function enable_gzip_compression(){
	if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'],'gzip')){ob_start('ob_gzhandler');}
	else {ob_start();}	
}

// WordPress: Strips information out of head
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

// WordPress: Removes the default Post types from the admin section
add_action( 'admin_menu', 'remove_menus' );
function remove_menus(){
	// Removes for Everyone
	remove_menu_page('edit.php');                   //Posts
	remove_menu_page('edit-comments.php');          //Comments
	
	// Removes for non-Admin Users
	if(!current_user_can('update_core')) {
		remove_menu_page('tools.php');					//Tools
	}
}

// WordPress: Disable WordPress Admin Bar for all users
show_admin_bar(false);

// WordPress: Forces page templates to load without needing to set template type
add_action('template_include','force_page_template');
function force_page_template($template){
	global $post;
	
	if (is_front_page() || is_page('home')){//Front Page must be assigned in Setting > Reading
		$new_template = locate_template(array('page-template-home.php'));
		if (!empty($new_template)) {return $new_template;}
	}
	if (is_page('select-your-plan')){
		$new_template = locate_template(array('page-template-select-your-plan.php'));
		if (!empty($new_template)) {return $new_template;}
	}
	if (is_page('reviews')){
		$new_template = locate_template(array('page-template-reviews.php'));
		if (!empty($new_template)) {return $new_template;}
	}
	if (is_page('faq')){
		$new_template = locate_template(array('page-template-faq.php'));
		if (!empty($new_template)) {return $new_template;}
	}
	if (is_page('contact-us')){
		$new_template = locate_template(array('page-template-contact-us.php'));
		if (!empty($new_template)) {return $new_template;}
	}
	if (is_page('terms-and-conditions')){
		$new_template = locate_template(array('page-template-terms-and-conditions.php'));
		if (!empty($new_template)) {return $new_template;}
	}
	if (is_page('privacy-policy')){
		$new_template = locate_template(array('page-template-privacy-policy.php'));
		if (!empty($new_template)) {return $new_template;}
	}
	return $template;
}

// WordPress: Sets a cookie based on what offer is first seen
//add_action('wp','set_offer_cookie');
function set_offer_cookie(){
	global $post;

	// Sets the offerID once a page is fired
	if (is_front_page() || is_page('home')){
		$offerID = 'main';
	} else if (is_page('bulu')){
		$offerID = 'bulu';
	} else if (is_page('lp1004')){
		$offerID = 'lp1004';
	}
	
	// Sets the Cookie and updates global $_COOKIE variable
	if (isset($offerID) && $offerID){
		setcookie('offerID',$offerID);
		$_COOKIE['offerID'] = $offerID;			
	}
}
function is_offer($offerID){
	if (isset($_COOKIE['offerID']) && $_COOKIE['offerID'] == $offerID) {return true;}
	else {return false;}
}

// WordPress: Hides editor on template pages
add_action('admin_init','hide_editor');
function hide_editor() {
	$postID = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'];
	if(isset($postID)){
		$post = get_post($postID); 
		$slug = $post->post_name;
		$show_editor = true;
		
		// Comment out pages that should show the editor
		if ($slug == 'home'){$show_editor = false;}
		if ($slug == 'how-it-works'){$show_editor = false;}
		if ($slug == 'real-user-stories'){$show_editor = false;}
		if ($slug == 'terms-and-conditions'){$show_editor = false;}
		if ($slug == 'privacy-policy'){$show_editor = false;}
		if ($slug == 'contact-us'){$show_editor = false;}
		if ($slug == 'faq'){$show_editor = false;}	
		
		if (!$show_editor){
			remove_post_type_support('page','editor');
		}	
	}
}

// WordPress: Changes the outgoing Email Name
add_filter('wp_mail_from_name','wpb_sender_name');
function wpb_sender_name($original_email_from){
    return 'Omax Health';
}

// WordPress: Changes the outgoing Email Address
add_filter('wp_mail_from','wpb_sender_email');
function wpb_sender_email($original_email_address){
    return 'noreply@omaxhealth.com';
}

// WordPress: Add slug name to body class
add_filter('body_class','add_body_class');
function add_body_class($classes){
	global $post;
	if (isset($post)){
		$classes[] = $post->post_type.'-'.$post->post_name;
	}
	return $classes;
}

// WordPress: Sets the number of pages to show in Admin View
add_filter('get_user_metadata','pages_per_page_wpse_23503', 10, 4);
function pages_per_page_wpse_23503($check, $object_id, $meta_key, $single){ 
	if('edit_page_per_page' == $meta_key){
		return 50;
	} else {
		return $check;
	}
}

// WordPress: Prevents Thumbnail Generation of uploaded images
add_filter('intermediate_image_sizes_advanced','add_image_insert_override');
function add_image_insert_override($sizes){
	//unset($sizes['thumbnail']);
	unset($sizes['medium']);
	unset($sizes['medium_large']);
	unset($sizes['large']);
	return $sizes;
}

// WordPress: Forces lowercase on all files uploaded to the Media Library
add_filter('sanitize_file_name', 'media_library_filename_lowercase', 10);
function media_library_filename_lowercase($filename){
	$info = pathinfo($filename);
	$ext  = empty($info['extension']) ? '' : '.' . $info['extension'];
	$name = basename($filename, $ext);
	return strtolower($name) . $ext;
}

// WordPress: Disable WP Emojicons
add_action('init','disable_wp_emojicons');
function disable_wp_emojicons(){
  // all actions related to emojis
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

  // filter to remove TinyMCE emojis
  add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
  
	function disable_emojicons_tinymce($plugins){
		if (is_array($plugins)) {
			return array_diff($plugins, array('wpemoji'));
		} else {
			return array();
		}
	}
}


// WordPress: Adds Custom Post Type for FAQ
add_action('init','create_faq_cpt',0);
function create_faq_cpt() {
	$labels = array(
		'name' => 'FAQs',
		'singular_name' => 'FAQ',
		'menu_name' => 'FAQs',
		'name_admin_bar' => 'FAQ',
		'attributes' => 'FAQ Attributes',
		'parent_item_colon' => 'Parent FAQ:',
		'all_items' => 'All FAQs',
		'add_new_item' => 'Add New FAQ',
		'add_new' => 'Add New',
		'new_item' => 'New FAQ',
		'edit_item' => 'Edit FAQ',
		'update_item' => 'Update FAQ',
		'view_item' => 'View FAQ',
		'view_items' => 'View FAQs',
		'search_items' => 'Search FAQ',
		'not_found' => 'FAQ Not found',
		'not_found_in_trash' => 'FAQ Not found in Trash'
	);
	$args = array(
		'label' => 'FAQ',
		'description' => 'FAQ Question and Answer Block',
		'labels' => $labels,
		'menu_icon' => 'dashicons-book-alt',
		'supports' => array('title','editor'),
		'taxonomies' => array(),
		'public' => false,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => false,
		'show_in_nav_menus' => false,
		'can_export' => true,
		'has_archive' => false,
		'hierarchical' => false,
		'exclude_from_search' => true,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type('faq',$args);
}

/**
 * Register our sidebars and widgetized areas.
 *
 */
function phytomax_widgets_init() {

	register_sidebar( array(
		'name'          => 'Newsletter',
		'id'            => 'newsletter',
		'before_widget' => '<div class="newsletter-form">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

}
add_action( 'widgets_init', 'phytomax_widgets_init' );

// WordPress: Makes sure there is a session set (used for tracking offer landing)
add_action('init', 'WPSession', 1);
function WPSession() {
	if(!session_id()) {
		session_start();
	}
}

?>
