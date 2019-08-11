<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

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
			<nav class="global">
				<a class="phone" href="tel:xxx-xxx-xxxx"><span>Click to Call</span></a>
				<a class="button red" href="<?php bloginfo('url'); ?>/select-your-plan/"><span>Order Now</span></a>
			</nav>
		</div>
	</div>
	<div class="lower">
		<div class="container">
			<div class="offer">Risk Free Offer!</div>
		</div>
	</div>
</header>