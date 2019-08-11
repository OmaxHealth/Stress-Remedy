<?php
// *****************************************
// Site Configuration (Update for each site)	
// *****************************************

// WordPress: Returns TRUE/FALSE to specific environment, or returns environment name
function getHostingENV($checkENV = NULL){
	
	$domain = "omaxcbd.com";
	$cnamePROD = "omax004prod.wpengine.com";
	$cnameSTAGE = "omax004stage.wpengine.com";
	
	// Checks if we are in the specific environment
	if (isset($checkENV)){
		if ($checkENV == 'production' && ($_SERVER['SERVER_NAME'] == $cnamePROD || $_SERVER['SERVER_NAME'] == $domain || $_SERVER['SERVER_NAME'] == "www.".$domain)){
			return true;
		} else if ($checkENV == 'staging' && $_SERVER['SERVER_NAME'] == $cnameSTAGE){
			return true;
		} else if ($checkENV == 'local' && explode('.',$_SERVER['SERVER_NAME'])[0] == 'local'){
			return true;
		} else {
			return false;
		}
	} 
	// Returns what environment we are in	
	else {
		if ($_SERVER['SERVER_NAME'] == $cnamePROD || $_SERVER['SERVER_NAME'] == $domain || $_SERVER['SERVER_NAME'] == "www.".$domain){
			return "production";
		} else if ($_SERVER['SERVER_NAME'] == $cnameSTAGE){
			return "staging";
		} else if (explode('.',$_SERVER['SERVER_NAME'])[0] == 'local'){
			return "local";
		} else {
			return "unknown";
		}		
	}
}

// WordPress: Define Offer URLS for Buy Now button links
function getGTM_ID(){
	echo "GTM-MRL9544";
}

// WordPress: Define Offer URLS for Buy Now button links
function getOfferURL($offerID = NULL){
	$offerURL[1] = "https://omaxcbd.com/cart/buybutton.php?id=gmV9-c3SxkOsfu18wDoBRA"; /* $39.95 */
	$offerURL[2] = "https://omaxcbd.com/cart/buybutton.php?id=iMaGLjGry0mryUMgbFu94Q"; /* $109.95 */
	$offerURL[3] = "https://omaxcbd.com/cart/buybutton.php?id=_QTXXf7PaE-lZxAULjeZLQ"; /* $59.95 */
	
	// Outputs the Offer URL based on parameter
	if (isset($offerID) && is_int($offerID)){
		echo $offerURL[$offerID];
	} else {
		echo $offerURL[1];
	}
}
	
// WordPress: Forces page templates to load without needing to set template type
add_filter('template_include', 'force_page_template', 99);
function force_page_template($template){
	global $post;

	if (is_front_page() || is_page('home')){//Front Page must be assigned in Setting > Reading
		$new_template = locate_template(array('page-template-home.php'));
		if ('' != $new_template) {return $new_template;}
	}
	if (is_page('select-your-plan')){
		$new_template = locate_template(array('page-template-select-your-plan.php'));
		if ('' != $new_template) {return $new_template;}
	}
	if (is_page('terms-and-conditions')){
		$new_template = locate_template(array('page-template-terms-and-conditions.php'));
		if ('' != $new_template) {return $new_template;}
	}
	if (is_page('privacy-policy')){
		$new_template = locate_template(array('page-template-privacy-policy.php'));
		if ('' != $new_template) {return $new_template;}
	}
	if (is_page('how-it-works')){
		$new_template = locate_template(array('page-template-how-it-works.php'));
		if ('' != $new_template) {return $new_template;}
	}
	if (is_page('reviews')){
		$new_template = locate_template(array('page-template-reviews.php'));
		if ('' != $new_template) {return $new_template;}
	}
	if (is_page('faq')){
		$new_template = locate_template(array('page-template-faq.php'));
		if ('' != $new_template) {return $new_template;}
	}
	return $template;
}

// WordPress: Hides editor on template pages
add_action('admin_init','hide_editor');
function hide_editor(){
	$postID = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'];
	if(isset($postID)){
		$post = get_post($postID); 
		$slug = $post->post_name;
		$show_editor = true;
		
		// Comment out pages that should show the editor
		if ($slug == 'home'){$show_editor = false;}
		if ($slug == 'select-your-plan'){$show_editor = false;}
		if ($slug == 'how-it-works'){$show_editor = false;}
		if ($slug == 'reviews'){$show_editor = false;}
		if ($slug == 'faq'){$show_editor = false;}
		if ($slug == 'terms-and-conditions'){$show_editor = false;}
		if ($slug == 'privacy-policy'){$show_editor = false;}
				
		if (!$show_editor){
			remove_post_type_support('page','editor');
		}	
	}
}

// ************************************
// FAQ Section (Custom Post Type)
// ************************************	
/*
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
*/

// ************************************
// Global Settings (Same for all sites)
// ************************************	

// WordPress: Disable WordPress Gutenberg Editor (v5.0+)
add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('gutenberg_can_edit_post', '__return_false', 10);

// WordPress: Moves jQuery calls to the footer
add_action('wp_default_scripts','move_jquery_into_footer');
function move_jquery_into_footer($wp_scripts){
    if (is_admin()){return;}
    $wp_scripts->add_data('jquery','group',1);
    $wp_scripts->add_data('jquery-core','group',1);
    $wp_scripts->add_data('jquery-migrate','group',1);
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
	
// WordPress: Strips information out of head
add_action('init','clean_wp_head');
function clean_wp_head(){
	remove_action('wp_head','wp_generator');
	remove_action('wp_head','rsd_link');
	remove_action('wp_head','feed_links', 2);
	remove_action('wp_head','feed_links_extra', 3);
	remove_action('wp_head','index_rel_link');
	remove_action('wp_head','wlwmanifest_link');
	remove_action('wp_head','start_post_rel_link', 10, 0);
	remove_action('wp_head','parent_post_rel_link', 10, 0);
	remove_action('wp_head','adjacent_posts_rel_link', 10, 0);
	remove_action('wp_head','adjacent_posts_rel_link_wp_head', 10, 0);
	remove_action('wp_head','wp_shortlink_wp_head', 10, 0);
}

// WordPress: Remove JSON API links in header
add_action('after_setup_theme','remove_json_api');
function remove_json_api(){
	remove_action('wp_head','rest_output_link_wp_head', 10);
	remove_action('wp_head','wp_oembed_add_discovery_links', 10);
	remove_action('rest_api_init','wp_oembed_register_route');
	add_filter('embed_oembed_discover','__return_false');
	remove_filter('oembed_dataparse','wp_filter_oembed_result', 10);
	remove_action('wp_head','wp_oembed_add_discovery_links');
	remove_action('wp_head','wp_oembed_add_host_js');
	//add_filter( 'rewrite_rules_array','disable_embeds_rewrites');
}

// WordPress: Disable the REST API 
add_action('after_setup_theme','disable_json_api');
function disable_json_api(){
  // Filters for WP-API version 1.x
  add_filter('json_enabled','__return_false');
  add_filter('json_jsonp_enabled','__return_false');
  // Filters for WP-API version 2.x
  add_filter('rest_enabled','__return_false');
  add_filter('rest_jsonp_enabled','__return_false');
}

// WordPress: Removes the default Post types from the admin section
add_action('admin_menu','remove_menus');
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

// WordPress: Makes sure there is a session set
add_action('init', 'WPSession', 1);
function WPSession() {
	if(!session_id()) {
		session_start();
	}
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
?>
