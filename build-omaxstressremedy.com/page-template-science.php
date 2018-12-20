<?php get_template_part('block','header'); ?>
<?php the_post(); ?>

<main>
	<section id="banner">
		<div class="container">
			<h1 class="headline">Life <span>to the</span> Max</h1>
			<hr>
			<p class="subline">Experience optimal health and vitality with scientifically advanced nutraceuticals developed with the highest quality standards.</p>
		</div>
	</section>

	<section id="our-story">
		<div class="container">
			<h1 class="headline">Our Story</h1>
			<hr>
			<p>We believe that the quality of what you put in your body can make a big difference in your health and your life. In short, ingredients matter. Performance matters. Omax optimizes your health and restores your youthful vitality so you can live <span>LIFE TO THE MAX!</span></p>
		</div>
	</section>

	<section id="science">
		<div class="container">
			<h1 class="headline">Backed by world-class science &amp; medical expertise</h1>
			<hr>
			<p>Omax Phyto-Max Stress Remedy was developed by Omax Health, the makers of the patented Omax3® Ultra-Pure Supplement, developed by Yale-affiliated scientists. With over 500,000 boxes sold worldwide since 2008, Omax has become the industry leader for premium quality, purity, and potency in nutraceuticals.</p>
			<div class="frame">
				<h5 class="note">Developed by leaders of Omega-3 Supplement Nutrition Research</h5>
			</div>
			<img src="<?php bloginfo('template_directory'); ?>/images/patent-pending-bird.png" class="bird" alt="Patent Pending" />
		</div>
	</section>

	<section id="quote">
		<div class="container">
			<h1 class="headline">Breakthrough Technology</h1>
			<hr>
			<p class="quote">"We took the same proprietary processes we use to distill omega-3 oils to the hemp industry and saw amazing results. We expect Phyto-max to improve many people’s lives."</p>
			<span class="author">- Evan Demarco</span>
			<span class="title">Clinical researcher and developer</span>
		</div>
	</section>

	<section id="shop-now">
		<div class="container">
			<img src="<?php bloginfo('template_directory'); ?>/images/seal-60-day.png" alt="Stress Less Guarantee"/>
			<div class="shop">
				<a href="<?php bloginfo('url'); ?>/select-your-plan"><div class="shop-btn">Shop Now</div></a>
			</div>
		</div>
	</section>
</main>

<?php get_template_part('block','footer'); ?>