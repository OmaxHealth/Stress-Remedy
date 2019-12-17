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
					<h1>Sleep to the Max</h1>
					<p>Naturally restore sleep patterns with hemp infused sleep aid</p>
				</div>
				<div class="product">
					<div class="cta">
						<a class="button red" href="<?php bloginfo('url'); ?>/select-your-plan/"><span>Order Now</span></a>
						<div class="ln1">Free Shipping!</div>
					</div>
					<picture>
						<source srcset="<?php bloginfo('template_directory'); ?>/images/home/hero-product-desktop.png, <?php bloginfo('template_directory'); ?>/images/home/hero-product-desktop.png 2x" media="(min-width: 1024px)">
						<source srcset="<?php bloginfo('template_directory'); ?>/images/home/hero-product-mobile.png" media="(max-width: 1023px)">
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
					<img src="<?php bloginfo('template_directory'); ?>/images/home/icon-guarantee-v3.svg" alt="guarantee"/>
				</div>
				<div class="column right">
					<h2>3-night risk-free <span>sleep guarantee</span></h2>
					<p>If you don't sleep better after 3 nights, simply return for a refund.</p>
				</div>
			</div>
		</div>	
	</section>
	
	<section id="reviews">
		<div class="upper">
			<div class="container">
				<?php /*		
				<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/F0D3HivxevM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				*/ ?>
			</div>
		</div>
		<div class="lower">
			<div class="container">
				<div class="flexbox">
					<div class="box">
						<img class="stars" src="<?php bloginfo('template_directory'); ?>/images/home/icon-stars-blue.svg" alt="stars"/>
						<h3>Amazing Product</h3>
						<p class="quote">Very little has helped me sleep until this product! It has been a great to get some sleep relief!</p>
						<p class="person">Mike R.</p>
					</div>
					<div class="box">
						<img class="stars" src="<?php bloginfo('template_directory'); ?>/images/home/icon-stars-blue.svg" alt="stars"/>
						<h3>A Chill Pill!</h3>
						<p class="quote">Not only am I sleeping better, but my overall stress levels are low. I am finding it easier to “go with the flow” and relax, even when circumstances are more tense and demanding.</p>
						<p class="person">Amber H.</p>
					</div>
					<div class="box">
						<img class="stars" src="<?php bloginfo('template_directory'); ?>/images/home/icon-stars-blue.svg" alt="stars"/>
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
					<img src="<?php bloginfo('template_directory'); ?>/images/home/ingredients-1.svg" alt="ingredient"/>
					<span>HEMP</span>
				</div>
				<div class="box">
					<img src="<?php bloginfo('template_directory'); ?>/images/home/ingredients-2.svg" alt="ingredient"/>
					<span>L-THEANINE</span>
				</div>
				<div class="box">
					<img src="<?php bloginfo('template_directory'); ?>/images/home/ingredients-3.svg" alt="ingredient"/>
					<span>Omega-3</span>
				</div>
			</div>
			<div class="cta">
				<a class="button red" href="<?php bloginfo('url'); ?>/select-your-plan/"><span>Order Now</span></a>
			</div>
		</div>
	</section>
	
	<section id="stress">
		<div class="container">
			<div class="headline">
				<div class="ln1">Vicious Cycle Of</div>
				<div class="ln2">sleep-stress</div>
				<p>Poor sleep leads to increased stress, which leads to the increase of hormones like cortisol, which further disrupt sleep quality. This compounded with blue light from cell phones and devices, and dependency on coffee and energy drinks continue to wreak havoc on your system.</p>
			</div>
			<picture class="diagram">
				<source srcset="<?php bloginfo('template_directory'); ?>/images/home/stress-diagram.png, <?php bloginfo('template_directory'); ?>/images/home/stress-diagram.png 2x" media="(min-width: 768px)">
				<source srcset="<?php bloginfo('template_directory'); ?>/images/home/stress-diagram.png" media="(max-width: 767px)">
				<img srcset="<?php bloginfo('template_directory'); ?>/images/home/stress-diagram.png" alt="High Stress - Can't Shut Off - Can't Fall Asleep - TV Phone Use (Blue Light) - Poor Performance">
			</picture>
			<div class="lower">
				<p>MAX SLEEP helps reduce stress levels, while promoting restful sleep, to break this vicious stress sleep cycle.</p>
			</div>
		</div>
	</section>
		
	<section id="lowerCTA">
		<div class="container">
			<div class="flexcolumn">
				<div class="column left">
					<div class="features">
						<img src="<?php bloginfo('template_directory'); ?>/images/home/lowerCTA-icons.svg"/>
						<span class="r1">Reduce stress naturally</span>
						<span class="r2">Support restful sleep</span>
						<span class="r3">Awake refreshed & alert</span>
					</div>
				</div>
				<div class="column right">
					<picture class="product">
						<source srcset="<?php bloginfo('template_directory'); ?>/images/home/lowerCTA-product.png, <?php bloginfo('template_directory'); ?>/images/home/lowerCTA-product.png 2x" media="(min-width: 768px)">
						<source srcset="<?php bloginfo('template_directory'); ?>/images/home/lowerCTA-product.png" media="(max-width: 767px)">
						<img srcset="<?php bloginfo('template_directory'); ?>/images/home/lowerCTA-product.png" alt="Omax Sleep & Stress Remedy">
					</picture>
					<div class="cta">
						<a class="button red" href="<?php bloginfo('url'); ?>/select-your-plan/"><span>Order Now</span></a>						
					</div>
				</div>
			</div>
		</div>
	</section>	
</main>

<?php get_template_part('block','footer'); ?>