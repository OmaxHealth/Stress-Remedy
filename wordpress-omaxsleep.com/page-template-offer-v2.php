<?php /* Template Name: Offer - Layout 2 */ ?>
<?php 
	set_query_var('custom_body_class','page-offer-v2');
	set_query_var('offer','main-v2'); 
	get_template_part('block','header'); 
?>

<?php the_post(); ?>

<main>
	<section id="banner">
		<div class="top">
			<div class="container">
				<h1 class="headline">Stress Remedy</h1>
				<hr>
				<p class="subline">Sleep Better. Relieve Stress. <br>Relax Your Mind.</p>
				<div class="row">
					<img src="<?php bloginfo('template_directory'); ?>/images/main-offer-v2/hero-box-HEMP-mobile.png" alt="60 Day Money Back Guarantee" class="mobile-box" />
					<img src="<?php bloginfo('template_directory'); ?>/images/main-offer-v2/hero-box-HEMP-desktop.png" alt="60 Day Money Back Guarantee" class="desktop-box" />
				</div>
			</div>
		</div>
		<div class="bottom">
			<div class="container">
				<div class="row">
					<div class="left">
						<h2 class="headline">Limited Time Only!</h2>
						<h1 class="subline">Save <span>50%<span>*</span></span></h1>
					</div>
					<div class="right">
						<div class="shop">
							<a href="<?php bloginfo('url'); ?>/select-your-plan"><div class="shop-btn">Order Now</div></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="testimonials">
		<div class="container">
			<div class="testimonial">
				<div class="quote-container">
					<p>"Within two days, I saw improvement in my joint pain and overall mood!"</p>
				</div>
				<img src="<?php bloginfo('template_directory'); ?>/images/main-offer-v2/testimonial-1-hemp.jpg" alt=""/>
				<p class="name">Jessica S.</p>
				<p class="title">Singer (Former Pussycat Doll)</p>
			</div>
			<div class="testimonial">
				<div class="quote-container">
					<p>"I sleep better and have more energy throughout the day."</p>
				</div>
				<img src="<?php bloginfo('template_directory'); ?>/images/main-offer-v2/testimonial-2.jpg" alt=""/>
				<p class="name">Brandon H.</p>
				<p class="title">Professional Athlete</p>
			</div>
			<div class="testimonial">
				<div class="quote-container">
					<p>"I felt it right away! I'm calmer, more rested, alert & focused!"</p>
				</div>
				<img src="<?php bloginfo('template_directory'); ?>/images/main-offer-v2/testimonial-3.jpg" alt=""/>
				<p class="name">Laura B.</p>
				<p class="title">Grandmother</p>
			</div>
		</div>
		<div class="reviews">
				<a href="<?php bloginfo('url'); ?>/reviews" class="scroll"><div class="reviews-btn">Read our reviews</div></a>
			</div>
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
						<img src="<?php bloginfo('template_directory'); ?>/images/main-offer-v2/ingredients-hemp-oil.png" alt="Hemp Oil"/>
						<h1 class="headline">Hemp Oil</h1>
						<p>European sourced, phytocannabinoid rich hemp oil, derived from the stems and stalks of industrial hemp. CO2 extracted using pharmaceutical process, for therapeutic potency and purity. </p>
					</div>
					<div class="ingredient">
						<img src="<?php bloginfo('template_directory'); ?>/images/main-offer-v2/ingredients-alphawave.png" alt="AlphaWave"/>
						<h1 class="headline">AlphaWave&reg; <br> L-Theanine</h1>
						<p>Highly purified amino acid found naturally in green tea leaves, is one of nature’s most effective natural relaxants: it’s clinically studied to stimulate the production of alpha waves in the brain.</p>
					</div>
					<div class="ingredient">
						<img src="<?php bloginfo('template_directory'); ?>/images/main-offer-v2/ingredients-fish-oil.png" alt="Omega-3"/>
						<h1 class="headline">ProResolv&trade; <br> Omega-3</h1>
						<p>Patented blend of omega-3 fatty acids from anchovies and sardines, with a 4:1  EPA-to-DHA ratio, developed for optimal inflammatory response, while supporting joints, mood &amp; mind.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="testimonial-cta">
		<img src="<?php bloginfo('template_directory'); ?>/images/main-offer-v2/arrow.png" alt="Order Now"/>
		<div class="shop">
			<a href="<?php bloginfo('url'); ?>/select-your-plan" class="scroll"><div class="shop-btn">Order Now</div></a>
		</div>
	</section>

	<section id="comparison">
		<div class="container">
			<h1 class="headline">The Difference is Clear</h1>
		<hr>
		<p class="subline">Both come from the Cannabis Sativa plant. We extract the THC, leaving only therapeutic full-spectrum hemp.</p>
		</div>
		<div class="comparison-table">
			<table>
			<tbody>
				<tr>
				<th class="gold">HEMP</th>
				<th class="green">MARIJUANA</th>
				</tr>
				<tr>
				<td><i class="fa fa-check gold" aria-hidden="true"></i> Non-psychoactive</td>
				<td><i class="fa fa-check green" aria-hidden="true"></i> Psychoactive</td>
				</tr>
				<tr>
				<td><i class="fa fa-check gold" aria-hidden="true"></i> No-high</td>
				<td><i class="fa fa-check green" aria-hidden="true"></i> Gets you high</td>
				</tr>
				<tr>
				<td><span class="gold">Effects:</span> General health and wellness from a balanced system</td>
				<td><span class="green">Effects:</span> Euphoria, hallucinogenic, short-term memory impairment</td>
				</tr>
			</tbody>
		</table>
		</div>
	</section>

	<section id="product-info">
		<div class="accordion">
			<div class="accordion-header">Ingredient Panel<i class="fa fa-angle-down"></i></div>
			<div class="accordion-content"><img src="<?php bloginfo('template_directory'); ?>/images/main-offer-v2/shop-ingredients.jpg" alt="Ingredient Panel" /></div>
			<div class="accordion-header">Directions<i class="fa fa-angle-down"></i></div>
			<div class="accordion-content">As a dietary supplement for adults over 18, take two softgels per day in the morning or afternoon with food.</div>
		</div>
	</section>

	<section id="pros">
		<div class="pro"></div>
		<div class="pro"></div>
		<div class="pro"></div>
	</section>

	<section id="lower-cta">
		<div class="container">
				<h2 class="headline">Limited Time Only!</h2>
				<h1 class="subline">Save <span>50%<span>*</span></span></h1>
				<img class="box" src="<?php bloginfo('template_directory'); ?>/images/single-box-HEMP.png" srcset="<?php bloginfo('template_directory'); ?>/images/single-box-HEMP@2x.png 2x" alt="Omax Phyto-Max Stress Remedy"/>
				<div class="shop">
					<a href="<?php bloginfo('url'); ?>/select-your-plan" class="scroll"><div class="shop-btn">Order Now</div></a>
				</div>
			</div>
	</section>
</main>

<?php get_template_part('block','footer'); ?>