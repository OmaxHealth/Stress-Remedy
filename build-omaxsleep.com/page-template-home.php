<?php /* Template Name: Home - Main Offer */ ?>
<?php 
	//set_query_var('custom_body_class','page-home');
	get_template_part('block','header'); 
?>
<?php the_post(); ?>

<main>
	<section id="hero">
		<div class="image">
			<div class="container">
				<div class="intro">
					<h1><strong>Sleep</strong> like you never <br/>dreamed possible</h1>
					<p>Fall asleep faster. Stay asleep longer. <br/>Awake refreshed.</p>
				</div>
				<div class="cta">
					<a class="button red" href="<?php bloginfo('url'); ?>/select-your-plan/"><span>Order Now</span></a>
					<div class="ln1">Free Shipping!</div>
				</div>
				<div class="product">
					<picture class="product">
						<source srcset="<?php bloginfo('template_directory'); ?>/images/home/hero-product-desktop.png, <?php bloginfo('template_directory'); ?>/images/home/hero-product-desktop@2x.png 2x" media="(min-width: 1024px)">
						<source srcset="<?php bloginfo('template_directory'); ?>/images/home/hero-product-desktop.png" media="(max-width: 1023px)">
						<img srcset="<?php bloginfo('template_directory'); ?>/images/home/hero-product-desktop.png" alt="Omax Sleep & Stress Remedy">
					</picture>
				</div>
			</div>
		</div>
	</section>

	<section id="guarantee">
		<div class="container">
			<div class="flexcolumn">
				<div class="column left">
					<img src="<?php bloginfo('template_directory'); ?>/images/home/icon-guarantee-v2.svg" alt="guarantee"/>
				</div>
				<div class="column right">
					<h2>3-night risk-free <br/>sleep guarantee</h2>
					<p>If you don't sleep better after 3 nights, simply return for a refund.</p>
				</div>
			</div>
		</div>	
	</section>
	
	<section id="reviews">
		<div class="upper">
			<div class="container">		
				<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/F0D3HivxevM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
		<div class="lower">
			<div class="container">
				<div class="flexbox">
					<div class="box">
						<img class="stars" src="<?php bloginfo('template_directory'); ?>/images/home/icon-stars.svg" alt="stars"/>
						<h3>Amazing results!</h3>
						<p class="quote">This product is almost too good to be true! Within hours of taking the product you are experiencing a calmer, more present, less anxious, relaxed version of yourself.</p>
						<p class="person">Brittany P.</p>
					</div>
					<div class="box">
						<img class="stars" src="<?php bloginfo('template_directory'); ?>/images/home/icon-stars.svg" alt="stars"/>
						<h3>A Chill Pill!</h3>
						<p class="quote">Not only am I sleeping better, but my overall stress levels are low. I am finding it easier to “go with the flow” and relax, even when circumstances are more tense and demanding.</p>
						<p class="person">Amber H.</p>
					</div>
					<div class="box">
						<img class="stars" src="<?php bloginfo('template_directory'); ?>/images/home/icon-stars.svg" alt="stars"/>
						<h3>Best sleep supplement</h3>
						<p class="quote">Slows me down to a restful deep sleep in the evening. Plus it’s the deepest sleep I have had in years and with no hangover. I have recommended it to all of my friends.</p>
						<p class="person">Nicole K.</p>
					</div>
				</div>
				<div class="link">
					<a class="more" href="<?php bloginfo('url'); ?>/reviews/">See More Reviews</a>
				</div>
			</div>
		</div>
	</section>
	
	<section id="sleep">
		<div class="container">
			<div class="headline">
				<img class="sleep" src="<?php bloginfo('template_directory'); ?>/images/home/icon-sleep-circle.svg" alt="Full Spectrum Hemp Blend"/>
				<div class="ln1">Get your best</div>
				<div class="ln2">night’s sleep ever!</div>
			</div>
			<div class="flexcolumn">
				<div class="column left">
					<h3>70% of Americans are sleep deprived.</h3>
					<p>Effecting mood, memory, hand-eye coordination, alertness, and reaction time; sleep deprivation can happen to anyone. <br/>Are you this person?</p>
				</div>
				<div class="column right">
					<ul class="moon">
						<li>Don't be a statistic</li>
						<li>Sleep better tonight</li>
						<li>Enjoy a better you tomorrow</li>
					</ul>						
				</div>
			</div>
		</div>
	</section>
	
	<section id="ingredients">
		<div class="container">
			<div class="headline">
				<h2><span>All</span> Natural Ingredients</h2>
			</div>
			<div class="flexbox">
				<div class="box">
					<img src="<?php bloginfo('template_directory'); ?>/images/home/ingredients-1.png" alt="ingredient"/>
					<span>Full Spectrum Hemp</span>
				</div>
				<div class="box">
					<img src="<?php bloginfo('template_directory'); ?>/images/home/ingredients-2.png" alt="ingredient"/>
					<span>Omega-3 DHA</span>
				</div>
				<div class="box">
					<img src="<?php bloginfo('template_directory'); ?>/images/home/ingredients-3.png" alt="ingredient"/>
					<span>L-Theanine</span>
				</div>
			</div>
			<div class="cta">
				<a class="button red" href="<?php bloginfo('url'); ?>/select-your-plan/"><span>Order Now</span></a>
			</div>
		</div>
	</section>
	
	<section id="stress">
		<div class="upper">
			<div class="container">
				<div class="headline">
					<div class="ln1">Vicious Cycle Of</div>
					<div class="ln2">sleep-stress</div>
					<p>Poor sleep leads to increased stress, which leads to the increase of hormones like cortisol, which further disrupt sleep quality. This compounded with blue light from cell phones and devices, and dependency on coffee and energy drinks continue to wreak havoc on your system.</p>
				</div>
					<picture class="diagram">
						<source srcset="<?php bloginfo('template_directory'); ?>/images/home/stress-diagram.png, <?php bloginfo('template_directory'); ?>/images/home/stress-diagram@2x.png 2x" media="(min-width: 768px)">
						<source srcset="<?php bloginfo('template_directory'); ?>/images/home/stress-diagram.png" media="(max-width: 767px)">
						<img srcset="<?php bloginfo('template_directory'); ?>/images/home/stress-diagram.png" alt="High Stress - Can't Shut Off - Can't Fall Asleep - TV Phone Use (Blue Light) - Poor Performance">
					</picture>
			</div>
		</div>
		<div class="lower">
			<div class="container">
				<p>Sleep and Stress Remedy helps reduce stress levels, while promoting restful sleep, to break this vicious stress sleep cycle.</p>
			</div>
		</div>
	</section>
	
	<section id="icons">
		<div class="container">
			<div class="flexbox">
				<div class="box">
					<img src="<?php bloginfo('template_directory'); ?>/images/home/icon-box1.svg" alt="icon"/>
					<span>All Natural</span>
				</div>
				<div class="box">
					<img src="<?php bloginfo('template_directory'); ?>/images/home/icon-box2.svg" alt="icon"/>
					<span>3-Night Sleep Guarantee</span>
				</div>
				<div class="box">
					<img src="<?php bloginfo('template_directory'); ?>/images/home/icon-box3.svg" alt="icon"/>
					<span>Non-Drowsy Formula</span>
				</div>
			</div>
		</div>
	</section>
	
	<section id="lowerCTA">
		<div class="container">
			<div class="flexcolumn">
				<div class="column left">
					<picture class="product">
						<source srcset="<?php bloginfo('template_directory'); ?>/images/home/lowerCTA-single-box-HEMP.png, <?php bloginfo('template_directory'); ?>/images/home/lowerCTA-single-box-HEMP@2x.png 2x" media="(min-width: 768px)">
						<source srcset="<?php bloginfo('template_directory'); ?>/images/home/lowerCTA-single-box-HEMP.png" media="(max-width: 767px)">
						<img srcset="<?php bloginfo('template_directory'); ?>/images/home/lowerCTA-single-box-HEMP.png" alt="Omax Sleep & Stress Remedy">
					</picture>
				</div>
				<div class="column right">
					<ul class="checkmark">
						<li>Fall asleep faster</li>
						<li>Stay asleep longer</li>
						<li>Awake refreshed</li>
						<li>No grogginess!</li>
					</ul>
					<div class="cta">
						<div class="ln1">Limited Time: Free Shipping!</div>
						<a class="button red" href="<?php bloginfo('url'); ?>/select-your-plan/"><span>Order Now</span></a>						
					</div>
				</div>
			</div>
		</div>
	</section>	
</main>

<?php get_template_part('block','footer'); ?>