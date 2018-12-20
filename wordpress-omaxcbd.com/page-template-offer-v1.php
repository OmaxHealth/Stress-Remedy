<?php /* Template Name: Offer - Layout 1 */ ?>
<?php 
	set_query_var('custom_body_class','page-offer-v1');
	set_query_var('offer','main-v1'); 
	get_template_part('block','header'); 
?>

<?php the_post(); ?>

<main>
	<section id="banner">
		<div class="top">
			<div class="container">
				<h1 class="headline">Stress Remedy</h1>
				<hr>
				<p class="subline">Sleep Better. Relieve Pain. Reduce Anxiety.</p>
				<div class="shop">
					<a href="#shop"><div class="shop-btn">Get Started</div></a>
				</div>
				<img src="<?php bloginfo('template_directory'); ?>/images/main-offer-v1/money-back-guarantee.png" class="seal-desktop" alt="Stress Less Guarantee"/>
				<img src="<?php bloginfo('template_directory'); ?>/images/main-offer-v1/banner-box.png" alt="Phyto-Max Stress Remedy" />
			</div>
		</div>
		<div class="bottom">
			<div class="container">
				<h1 class="headline">Triple-Action <span>CBD</span> from Full-Spectrum Hemp</h1>
				<hr>
				<p class="subline">-with omega-3 & l-theanine-</p>
				<img src="<?php bloginfo('template_directory'); ?>/images/main-offer-v1/money-back-guarantee.png" class="seal-mobile" alt="Stress Less Guarantee"/>
			</div>
		</div>
	</section>

	<section id="cards">
		<div class="container">
			<div class="card">
			<div class="description">
				<h6>Legally Compliant</h6>
				<h1>European Hemp</h1>
				<hr>
				<img src="<?php bloginfo('template_directory'); ?>/images/main-offer-v1/cards-1.jpg" alt="European Hemp"/>
				<hr>
				<p>Hemp and Marijuana come from the same plant but are cultivated differently. Since our CBD is derived from European sourced hemp with under .3% THC, it is legally imported into the U.S.</p>
			</div>
		</div>
		<div class="card">
			<div class="description">
				<h6>Pharmaceutical Quality</h6>
				<h1>Certified Pure</h1>
				<hr>
				<img src="<?php bloginfo('template_directory'); ?>/images/main-offer-v1/cards-2.jpg" alt="Certified Pure"/>
				<hr>
				<p>All of our products are developed with rigorous standards, including pharmaceutical quality manufacturing and third-party testing on each batch. We are committed to supplying the most potent, efficacious products from soil to shelf, that’s why stand behind a 60-day money back guarantee.</p>
			</div>
		</div>
		<div class="card">
			<div class="description">
				<h6>Full-Spectrum</h6>
				<h1>Non-Psychoactive CBD</h1>
				<hr>
				<img src="<?php bloginfo('template_directory'); ?>/images/main-offer-v1/cards-3.jpg" alt="Non-Psychoactive CBD"/>
				<hr>
				<p>Our full-spectrum, phytocannabinoid rich CBD is guaranteed to contain less than .3% THC. This means you will not feel any psychoactive effects, and you will not get “high”.</p>
			</div>
		</div>
		</div>
	</section>

	<section id="cbd">
		<div class="container">
			<h2 class="headline">Patent-Pending CBD Fusion from full-spectrum Hemp-oil sourced from Europe</h2>
			<img src="<?php bloginfo('template_directory'); ?>/images/main-offer-v1/cbd-sticker.png" alt="Legally Compliant">
			<h1 class="subline">Calm. Relax. Relieve.</h1>
			<a href="<?php bloginfo('url'); ?>/about-cbd"><div class="cbd-btn">What is CBD?</div></a>
		</div>
	</section>

	<section id="shop">
		<h1 class="headline"><hr>Shop<hr></h1>
		<div class="container">
			<div class="products">
				<div class="product">
					<img src="<?php bloginfo('template_directory'); ?>/images/main-offer-v1/single-box-CBD.png" class="box" alt="Phyto-Max Stress Remedy"/>
					<p class="offer">Single-Box</p>
					<div class="subscribe">
						<p class="shipment">Subscribe &amp; Save</p>
						<h1><span class="compare"><strike>$99.00</strike></span> $49.50</h1>
						<span class="per">$49.50 first shipment, $69.00 thereafter</span>
					</div>
				    <p>1-Month Supply - Free Shipping</p>
					<p>Save 30% Every Month</p>
					<div class="shop">
						<a href="https://omaxcbd.com/cart/buybutton.php?id=IC9jt-5G9kyr2_uxz2H2Rg"><div class="shop-btn">Buy Now</div></a>
					</div>
					<hr>
					<div class="links">
						<a href="<?php bloginfo('template_directory'); ?>/images/main-offer-v1/shop-ingredients.jpg" class="ingredient-panel" target="_new" style="float: none; text-align: center;">> Ingredient Panel</a>
					</div>
				</div>
				<div class="product">
					<img src="<?php bloginfo('template_directory'); ?>/images/main-offer-v1/single-box-CBD.png" class="box" alt="Phyto-Max Stress Remedy"/>
					<p class="offer">Single-Box</p>
					<div class="one-time">
						<p class="shipment">One-time Shipment</p>
						<h1><span class="compare"><strike>$99.00</strike></span> $89.00</h1>
					</div>
					<p>1-Month Supply - Free Shipping</p>
					<p>Save 10% Introductory Offer</p>
					<div class="shop">
						<a href="https://omaxcbd.com/cart/buybutton.php?id=rvt4mJloSECLtw2JhrFxgQ"><div class="shop-btn">Buy Now</div></a>
					</div>
					<hr>
					<div class="links">
						<a href="<?php bloginfo('template_directory'); ?>/images/main-offer-v1/shop-ingredients.jpg" class="ingredient-panel" target="_new" style="float: none; text-align: center;">> Ingredient Panel</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="pros-intro">
		<div class="container">
			<h1 class="headline">CBD Builds a Better Body for Life&trade;</h1>
			<hr>
			<p>We took the CBD to the next level, by combining three synergistic ingredients into one powerful product developed to help:</p>
		</div>
		<div class="line"></div>
	</section>

	<section id="pros">
		<div class="pro"></div>
		<div class="pro"></div>
		<div class="pro"></div>
		<div class="pro"></div>
	</section>

	<section id="ingredients">
		<div class="container">
			<h1 class="headline">Patent-Pending Formula,<br>
			<span>Clinically Researched Ingredients</span></h1>
			<hr>
			<h3 class="subline">Omax Phyto-Max™ Stress Remedy delivers the ultimate power-trio of clinically researched ingredients to support mind and body wellness.</h3>
			<div class="ingredients">
				<div class="container">
					<div class="ingredient">
						<img src="<?php bloginfo('template_directory'); ?>/images/main-offer-v1/ingredients-hemp-oil.png" alt="Hemp Oil"/>
						<h1 class="headline">Hemp Oil CBD <br> (Cannabidiol)</h1>
						<p>European sourced, phytocannabinoid rich hemp oil, derived from the stems and stalks of industrial hemp. CO2 extracted using pharmaceutical process, for therapeutic potency and purity. </p>
					</div>
					<div class="ingredient">
						<img src="<?php bloginfo('template_directory'); ?>/images/main-offer-v1/ingredients-alphawave.png" alt="AlphaWave"/>
						<h1 class="headline">AlphaWave&reg; <br> L-Theanine</h1>
						<p>Highly purified amino acid found naturally in green tea leaves, is one of nature’s most effective natural relaxants: it’s clinically studied to stimulate the production of alpha waves in the brain.</p>
					</div>
					<div class="ingredient">
						<img src="<?php bloginfo('template_directory'); ?>/images/main-offer-v1/ingredients-fish-oil.png" alt="Omega-3"/>
						<h1 class="headline">ProResolv&trade; <br> Omega-3</h1>
						<p>Patented blend of omega-3 fatty acids from anchovies and sardines, with a 4:1  EPA-to-DHA ratio, developed for optimal inflammatory response, while supporting joints, mood &amp; mind.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_template_part('block','footer'); ?>
