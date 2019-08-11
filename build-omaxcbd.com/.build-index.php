<?php // Last Updated: 2019.01.07

	// Start the session (used for WP Query Variables), clears previous values
	session_start();
	session_unset();

	// Global Variable: $host (Gets HTTP or HTTPS) & Site URL
	if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off'){
		$host = "https://";
	} else {
		$host = "http://";
	}
	
	// Global Variable: $folder (Gets Development Folder - has to be one-level off of root)
	foreach (explode('/',$_SERVER['REQUEST_URI']) as $part){
		if ($part && is_dir(realpath($_SERVER["DOCUMENT_ROOT"])."/".$part)){
			$folder = $part;
			break;
		}
	}
	
	// Global Variable: $siteRoot (URL for Site Root)
	if (isset($folder) && $folder != ''){
		$siteRoot = $host.$_SERVER['SERVER_NAME']."/".$folder;
	} else {
		$siteRoot = $host.$_SERVER['SERVER_NAME'];
	}	
	
	// Global Variables: $page_template / $body_class (Gets page template name and body class)
	if (isset($_GET['page'])){
		$page_template = "page-template-".$_GET['page'].".php";
		$body_class = "page-".$_GET['page'];
	} else {
		$page_template = "page-template-home.php";
		$body_class = "page-home";
	}
		
	// Simulated WordPress Functions
	function the_post(){return;}
	function the_content(){
		echo "<p>WordPress Generated Content</p>";
		return;
	}
	function do_shortcode($code){return;}
	function wp_head(){
		echo "<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.js'></script>\r\n";
		echo "<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.4.1/jquery-migrate.js'></script>\r\n";
	}
	function wp_footer(){return;}
	function wp_title($t=''){
		global $body_class;
		
		if ($t != ''){
			echo $t;
		} else {
			echo "Page: ".$body_class;
		}
	}
	function bloginfo($type){
		global $siteRoot;
		echo $siteRoot;
	}
	function get_bloginfo($type){
		global $siteRoot;
		return $siteRoot;
	}
	function body_class($custom_body_class=''){		
		global $body_class;
		if (isset($custom_body_class) && $custom_body_class != ''){
			echo "class='".$body_class." ".$custom_body_class."'";
		} else {
			echo "class='".$body_class."'";
		}
		
	}
	function wp_enqueue_style($id,$style,$array){		
		echo "<link rel='stylesheet' href='".$style."' type='text/css' media='all' />\r\n";
	}
	function wp_enqueue_script($id,$script,$array){
		echo "<script type='text/javascript' src='".$script."'></script>\r\n";
	}
	function get_template_part($f1,$f2=''){
		if (isset($f2) && $f2 != ''){
			include_once($f1."-".$f2.".php");
		} else {
			include_once($f1.".php");
		}
	}
	function is_page($page){
		if (isset($_GET['page']) && $_GET['page'] == $page){return true;}
		else {return false;}
	}
	function is_front_page(){
		if (!isset($_GET['page'])){return true;}
		else {return false;}
	}
	function set_query_var($key,$value){
		$_SESSION[$key]=$value;
	}
	function get_query_var($key){
		if (isset($_SESSION[$key])){
			return $_SESSION[$key];
		}
	}
	
	// Includes WordPress functions.php
	if (file_exists('functions.php')){
		include('functions.php');
	}
	function add_action(){return;}
	function remove_action(){return;}
	function add_filter(){return;}
	function remove_filter(){return;}
	function show_admin_bar(){return;}
	
	// Page: Sets Cookie (this is updated in WordPress functions.php)
	//set_offer_cookie();	
	function set_offer_cookie(){
		
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

	// Page: Template Loader 
	if (file_exists($page_template)){
		include($page_template);
	} else {
		echo "<main style='text-align:center'><p>page template not found: ".$page_template."</p></main>";
	}
	
?>