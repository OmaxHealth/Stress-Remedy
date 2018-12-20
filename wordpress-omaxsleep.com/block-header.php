<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<!-- Google Tag Manager -->
	<script>var dataLayer = [];</script>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-N853725');</script>
	<!-- End Google Tag Manager -->
	
	<title><?php wp_title(); ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900|Oswald:200,300,400,500,700" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" media="all" />
	<?php wp_enqueue_style('styles',get_bloginfo('template_directory').'/style.css',array()); ?>
	<?php wp_head(); ?>
	
</head>
<body <?php body_class(get_query_var('custom_body_class')); ?> ontouchstart="">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N853725" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header>
	<div class="header-top">
		<div class="container">
			<?php if (get_query_var('offer') == 'main-v1'){ ?>
			<div id="toggle-bars">
				<div class="bar"></div>
			</div>
			<?php } ?>
			<div class="logo">
				<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo-omax-stress-remedy.png" alt="Omax Health" /></a>
			</div>
			<?php /*
			<nav>
				<ul>
					<li><a href="<?php bloginfo('url'); ?>">Home</a></li>
				</ul>
			</nav>
			*/ ?>
			<?php if (!is_page('select-your-plan')){ ?>
			<div class="shop">
				<?php if (get_query_var('offer') == 'main-v1'){ ?>
					<a href="#shop"><div class="shop-btn">Shop</div></a>
				<?php } else { ?>
					<a href="<?php bloginfo('url'); ?>/select-your-plan/"><div class="shop-btn">Shop</div></a>
				<?php } ?>
			</div>
			<?php } ?>
		</div>
	</div>
	<div class="header-eyebrow">
		<div class="container">
			<img src="<?php bloginfo('template_directory'); ?>/images/eyebrow-truck.png" alt="Free Shipping">
			<p> Free Shipping</p>
			<span class="pipe">|</span>
			<img src="<?php bloginfo('template_directory'); ?>/images/eyebrow-calendar.png" alt="60-Day Guarantee">
			<p> 60-Day Guarantee</p>
		</div>
	</div>
	<?php if (get_query_var('offer') == 'main-v1'){ ?>
	<div class="mobile-menu">
		<div id="close-btn"></div>
			<nav>
				<ul>
					<li><a href="<?php bloginfo('url'); ?>">Home</a></li>
					<li><a href="<?php bloginfo('url'); ?>/reviews/">Reviews</a></li>
					<li><a href="<?php bloginfo('url'); ?>/faq/">FAQ</a></li>
					<li><a href="<?php bloginfo('url'); ?>/contact-us/">Contact Us</a></li>
		    	</ul>
			</nav>
			<?php if (!is_page('select-your-plan')){ ?>
			<div class="shop">
				<a href="#shop"><div class="shop-btn">Shop</div></a>
			</div>
			<?php } ?>
		<div class="bottom">
			<ul class="share">
	            <li><a href="https://twitter.com/omaxhealth"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
	            <li><a href="https://www.youtube.com/omaxhealth"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
	            <li><a href="https://facebook.com/omaxhealth"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
	            <li><a href="https://instagram.com/omaxhealth"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
  			</ul>
  			<p><a href="<?php bloginfo('url'); ?>/terms-and-conditions/">Terms &amp; Conditions</a> | <a href="<?php bloginfo('url'); ?>/privacy-policy/">Privacy Policy</a></p>
  			<p>&copy; 2018 Omax Health, Inc.</p>
		</div>
	</div>
	<?php } ?>
</header>