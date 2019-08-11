<?php /* Template Name: Home - Main Offer */ ?>
<?php 
	set_query_var('custom_body_class','page-home');
	get_template_part('block','header'); 
?>
<?php the_post(); ?>

<main>
	<section id="hero">
		<div class="container">
			<div class="intro">
				<h1>Sleep better with<br/>the science of CBD</h1>
				<ul class="checkmark">
					<li>Calm your mind naturally</li>
					<li>Sleep soundly all night</li>
					<li>Awake refreshed & alert</li>
				</ul>
			</div>
			<a class="flexcolumn" href="<?php bloginfo('url'); ?>/select-your-plan/">
				<div class="column left">
					<div class="cta">
						<img class="badge" src="<?php bloginfo('template_directory'); ?>/images/home/hero-risk-free.png" alt="Risk Free TV Offer" />
						<div class="ln1">Free Shipping!</div>
						<div class="button red"><span>Order Now</span></div>						
					</div>
				</div>
				<div class="column right">
					<picture class="product">
						<source srcset="<?php bloginfo('template_directory'); ?>/images/home/single-box-CBD.png, <?php bloginfo('template_directory'); ?>/images/home/single-box-CBD@2x.png 2x" media="(min-width: 768px)">
						<source srcset="<?php bloginfo('template_directory'); ?>/images/home/single-box-CBD.png" media="(max-width: 767px)">
						<img srcset="<?php bloginfo('template_directory'); ?>/images/home/single-box-CBD.png" alt="Omax Sleep & Stress Remedy">
					</picture>
				</div>
			</a>

		</div>
	</section>
	
	<section id="icons">
		<div class="container">
			<div class="flexbox">
				<div class="box">
					<img src="<?php bloginfo('template_directory'); ?>/images/home/icon-box1.svg" alt="icon"/>
					<span>Full Spectrum</span>
				</div>
				<div class="box">
					<img src="<?php bloginfo('template_directory'); ?>/images/home/icon-box2.svg" alt="icon"/>
					<span>3-Night Guarantee</span>
				</div>
				<div class="box">
					<img src="<?php bloginfo('template_directory'); ?>/images/home/icon-box3.svg" alt="icon"/>
					<span>No Grogginess</span>
				</div>
			</div>
		</div>
	</section>
	
	<section id="reviews">
		<div class="upper">
			<div class="container">
				<div class="flexcolumn">
					<div class="column left">
						<picture>
							<source srcset="<?php bloginfo('template_directory'); ?>/images/home/reviews-photo-desktop.jpg" media="(min-width: 1024px)">
							<source srcset="<?php bloginfo('template_directory'); ?>/images/home/reviews-photo-mobile.jpg" media="(max-width: 1023px)">
							<img srcset="<?php bloginfo('template_directory'); ?>/images/home/reviews-photo-desktop.jpg" alt="Review Photo">
						</picture>
					</div>
					<div class="column right">
						<h3 class="title">Advanced Patent-Pending Formula</h3>
						<p class="quote">This power trio of ingredients, combined with full-spectrum CBD is a game-changer in improving sleep quality.</p>
						<p class="person">Evan DeMarco, Omax Researcher</p>
					</div>
				</div>
				<div class="link">
					<a class="more" href="<?php bloginfo('url'); ?>/reviews/">See More Reviews</a>
				</div>
			</div>
		</div>
		<div class="lower">
			<div class="container">
				<div class="flexbox">
					<div class="box">
						<img class="stars" src="<?php bloginfo('template_directory'); ?>/images/home/icon-stars.svg" alt="stars"/>
						<h3>Love!</h3>
						<p class="quote">I tried it for the first time last night and it’s going to be my new go to! Within minutes it had me feeling relaxed.</p>
						<p class="person">Teena S.</p>
					</div>
					<div class="box">
						<img class="stars" src="<?php bloginfo('template_directory'); ?>/images/home/icon-stars.svg" alt="stars"/>
						<h3>Great Product</h3>
						<p class="quote">I am new to CBD and was skeptical. I used to wake up every 2-3 hours, and now I stay asleep for much longer.</p>
						<p class="person">Mandy P.</p>
					</div>
					<div class="box">
						<img class="stars" src="<?php bloginfo('template_directory'); ?>/images/home/icon-stars.svg" alt="stars"/>
						<h3>Relieved</h3>
						<p class="quote">After the first hours of taking your CBD, I instantly started feeling more relieved…don’t go a day without it now!!!</p>
						<p class="person">Tia M.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="sleep">
		<div class="container">
			<div class="headline">
				<img class="sleep" src="<?php bloginfo('template_directory'); ?>/images/home/icon-circle-cbd.svg" alt="Full Spectrum CBD Blend"/>
				<div class="ln1">Get your best</div>
				<div class="ln2">night’s sleep with CBD!</div>
			</div>
			<div class="flexcolumn">
				<div class="column left">
					<h3>1 out of 3 adults suffer from insomnia.</h3>
					<p>Lack of sleep can cause drowsiness, mood and memory challenges. Long term, sleep deprivation can cause serious health concerns.</p>
				</div>
				<div class="column right">
					<ul class="moon">
						<li>Relax your mind tonight</li>
						<li>Get a full night’s sleep</li>
						<li>Awake to happier days</li>
					</ul>						
				</div>
			</div>
		</div>
	</section>
	
	<section id="ingredients">
		<div class="container">
			<div class="headline">
				<h2>Patent-pending Hemp CBD Fusion</h2>
			</div>
			<div class="flexbox">
				<div class="box">
					<img src="<?php bloginfo('template_directory'); ?>/images/home/ingredients-1.png" alt="ingredient"/>
					<span>Full Spectrum CBD</span>
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
		</div>
	</section>
	
	<section id="stress">
		<div class="upper">
			<div class="container">
				<div class="headline">
					<div class="ln1">Vicious Cycle Of</div>
					<div class="ln2">sleep-stress</div>
					<p>When you don’t sleep well, your entire day suffers. Your patience is shot, you're moody or irritable, and everyone around you is affected. It’s time to stop the stress sleep cycle so you can sleep better tonight.</p>
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
				<p>Sleep and Stress Remedy with CBD helps you feel calm, relaxed, blissful, so you naturally find a deep restful sleep.</p>
			</div>
		</div>
	</section>
	
	<section id="guarantee">
		<div class="container">
			<div class="flexcolumn">
				<div class="column left">
					<img src="<?php bloginfo('template_directory'); ?>/images/home/icon-guarantee.svg" alt="guarantee"/>
				</div>
				<div class="column right">
					<h2>3-night risk-free <br/>sleep guarantee</h2>
					<p>If you don't sleep better after 3 nights, simply return for a refund.</p>
				</div>
			</div>
		</div>	
	</section>
	
	<section id="benefits">
		<div class="container">
			<div class="flexbox">
				<div class="box">
					<picture></picture>
					<div class="inner">
						<h3>Relieve <br/>Stress</h3>
					</div>
				</div>
				<div class="box">
					<picture></picture>
					<div class="inner">
						<h3>Relax Your <br/>Mind</h3>
					</div>
				</div>
				<div class="box">
					<picture></picture>
					<div class="inner">
						<h3>Sleep <br/>Better</h3>
					</div>
				</div>
			</div>
		</div>	
	</section>
	
	<section id="lowerCTA">
		<div class="container">
			<div class="flexcolumn">
				<div class="column left">
					<picture class="product">
						<source srcset="<?php bloginfo('template_directory'); ?>/images/home/single-box-CBD-with-seal.png, <?php bloginfo('template_directory'); ?>/images/home/single-box-CBD-with-seal@2x.png 2x" media="(min-width: 768px)">
						<source srcset="<?php bloginfo('template_directory'); ?>/images/home/single-box-CBD-with-seal.png" media="(max-width: 767px)">
						<img srcset="<?php bloginfo('template_directory'); ?>/images/home/single-box-CBD-with-seal.png" alt="Omax Sleep & Stress Remedy">
					</picture>
				</div>
				<div class="column right">
					<ul class="checkmark">
						<li>Sleep better with CBD</li>
						<li>Relax your mind naturally</li>
						<li>Reduce stress & anxiousness</li>
						<li>Wake up refreshed</li>
					</ul>
					<div class="cta">
						<div class="price">
							<span class="pt1">$</span><span class="pt2">30</span><span class="pt3">00</span>
						</div>
						<div class="ln1">($59<span>95</span> value)</div>
						<div class="ln2">Limited Time: Free Shipping!</div>
						<a class="button red" href="<?php bloginfo('url'); ?>/select-your-plan/"><span>Order Now</span></a>						
					</div>
				</div>
			</div>
		</div>
	</section>	
</main>

<?php get_template_part('block','footer'); ?>