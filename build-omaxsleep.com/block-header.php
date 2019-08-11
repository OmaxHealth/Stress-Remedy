<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="thumbnail" content="<?php bloginfo('template_directory'); ?>/images/home/single-box-HEMP.png" />

	<?php if (!getHostingENV('local')){ ?>
	<!-- Google Tag Manager -->
	<script>var dataLayer = [];</script>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','<?php getGTM_ID(); ?>');</script>
	<!-- End Google Tag Manager -->
	<?php } ?>
	
	<title><?php wp_title(); ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900|Oswald:200,300,400,500,700" />
	<?php wp_enqueue_style('styles',get_bloginfo('template_directory').'/style.css',array()); ?>
	<?php wp_head(); ?>

	<?php if (is_page('reviews')){ ?>
	<!-- judge.me script code -->
	<script>jdgm = window.jdgm || {};jdgm.SHOP_DOMAIN = 'omaxhealth.myshopify.com';jdgm.PLATFORM = 'shopify';jdgm.PUBLIC_TOKEN = '2ag0wZFs2m5QWnLHdqUqwnKipo4';</script>
	<script data-cfasync='false' type='text/javascript' async src='https://cdn.judge.me/widget_preloader.js'></script>
	<script data-cfasync='false' type='text/javascript' async src='https://cdn.judge.me/assets/installed.js'></script>
	<!-- end -->
	<?php } ?>

</head>
<body <?php body_class(get_query_var('custom_body_class')); ?> ontouchstart="">
<?php if (!getHostingENV('local')){ ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php getGTM_ID(); ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php } ?>
<header>
	<div class="upper">
		<div class="container">
			<a class="logo" href="<?php bloginfo('url'); ?>">Omax Sleep & Stress Remedy</a>
			<nav class="menu">
				<svg class="hamburger" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32">
					<path d="M2.5 9.25h27c1.242 0 2.25-1.008 2.25-2.25s-1.008-2.25-2.25-2.25h-27C1.258 4.75.25 5.758.25 7S1.258 9.25 2.5 9.25zm27 4.5h-27C1.258 13.75.25 14.758.25 16s1.008 2.25 2.25 2.25h27c1.242 0 2.25-1.008 2.25-2.25s-1.008-2.25-2.25-2.25zm0 9h-27C1.258 22.75.25 23.758.25 25s1.008 2.25 2.25 2.25h27c1.242 0 2.25-1.008 2.25-2.25s-1.008-2.25-2.25-2.25z"/>
				</svg>
				<div class="pages">
					<a href="<?php bloginfo('url'); ?>/reviews/">Reviews</a>
					<a href="<?php bloginfo('url'); ?>/how-it-works/">How it Works</a>
					<a class="mobile" href="<?php bloginfo('url'); ?>/faq/">FAQ</a>
					<a class="mobile" href="<?php bloginfo('url'); ?>/select-your-plans/">Shop</a>
				</div>
			</nav>
			<nav class="global">
				<a class="phone" href="tel:800-480-6370"><span>Click to Call</span></a>
				<a class="button red" href="<?php bloginfo('url'); ?>/select-your-plan/"><span>Order Now</span></a>
			</nav>
		</div>
	</div>
	<div class="lower">
		<div class="container">
			<div class="offer">Risk Free TV Offer!</div>
		</div>
	</div>
</header>