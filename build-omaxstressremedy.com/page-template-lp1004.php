<?php 
	set_query_var('custom_body_class','');
	set_query_var('offer','lp1004'); 
	get_template_part('block','header'); 
?>
<?php the_post(); ?>

<main>
	<section id="banner">
		<div class="top">
			<div class="container">
				<h1 class="headline">Stress Remedy</h1>
				<hr>
				<p class="subline">Sleep Better. Relieve Pain. <br>Reduce Anxiety.</p>
				<div class="row">
					<img src="<?php bloginfo('template_directory'); ?>/images/lp1004/hero-box-CBD-mobile.png" alt="60 Day Money Back Guarantee" class="mobile-box" />
					<img src="<?php bloginfo('template_directory'); ?>/images/lp1004/hero-box-CBD-desktop.png" alt="60 Day Money Back Guarantee" class="desktop-box" />
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
							<a href="/select-your-plan" class="scroll"><div class="shop-btn">Order Now</div></a>
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
				<img src="<?php bloginfo('template_directory'); ?>/images/lp1004/testimonial-1-cbd.jpg" alt=""/>
				<p class="name">Jessica S.</p>
				<p class="title">Singer (Former Pussycat Doll)</p>
			</div>
			<div class="testimonial">
				<div class="quote-container">
					<p>"I sleep better and have more energy throughout the day."</p>
				</div>
				<img src="<?php bloginfo('template_directory'); ?>/images/lp1004/testimonial-2.jpg" alt=""/>
				<p class="name">Brandon H.</p>
				<p class="title">Professional Athlete</p>
			</div>
			<div class="testimonial">
				<div class="quote-container">
					<p>"I felt it right away! I'm calmer, more rested, alert & focused!"</p>
				</div>
				<img src="<?php bloginfo('template_directory'); ?>/images/lp1004/testimonial-3.jpg" alt=""/>
				<p class="name">Laura B.</p>
				<p class="title">Grandmother</p>
			</div>
		</div>
		<div class="reviews">
				<a href="/reviews" class="scroll"><div class="reviews-btn">Read our reviews</div></a>
			</div>
	</section>

	<section class="testimonial-cta">
		<img src="<?php bloginfo('template_directory'); ?>/images/lp1004/arrow.png" alt="Order Now"/>
		<div class="shop">
			<a href="/select-your-plan" class="scroll"><div class="shop-btn">Order Now</div></a>
		</div>
	</section>

	<section id="abouts">
		<div class="about">
			<div class="container">
				<h2>Legally Compliant</h2>
				<h1>European Hemp</h1>
				<img src="<?php bloginfo('template_directory'); ?>/images/lp1004/about-1.png" alt="European Hemp" class="icon" />
				<div class="description">Hemp and Marijuana come from the same plant but are cultivated differently. Since our CBD is derived from European sourced hemp with under .3% THC, it is legally imported into the U.S.</div>
				<div class="accordion">
					<div class="accordion-header"><img src="<?php bloginfo('template_directory'); ?>/images/lp1004/plus.png" alt="Read More" class="plus" /> Read More</div>
					<div class="accordion-content">Hemp and Marijuana come from the same plant but are cultivated differently. Since our CBD is derived from European sourced hemp with under .3% THC, it is legally imported into the U.S.</div>
				</div>
			</div>
		</div>
		<div class="about">
			<div class="container">
				<h2>Pharmaceutical Quality</h2>
				<h1>Certified Pure</h1>
				<img src="<?php bloginfo('template_directory'); ?>/images/lp1004/about-2.png" alt="Certified Pure" class="icon" />
				<div class="description">All of our products are developed with rigorous standards, including pharmaceutical quality manufacturing and third-party testing on each batch. We are committed to supplying the most potent, efficacious products from soil to shelf, that’s why stand behind a 60-day money back guarantee.</div>
				<div class="accordion">
					<div class="accordion-header"><img src="<?php bloginfo('template_directory'); ?>/images/lp1004/plus.png" alt="Read More" class="plus" /> Read More</div>
					<div class="accordion-content">All of our products are developed with rigorous standards, including pharmaceutical quality manufacturing and third-party testing on each batch. We are committed to supplying the most potent, efficacious products from soil to shelf, that’s why stand behind a 60-day money back guarantee.</div>
				</div>
			</div>
		</div>
		<div class="about">
			<div class="container">
				<h2>Full-Spectrum</h2>
				<h1>Non-psychoactive CBD</h1>
				<img src="<?php bloginfo('template_directory'); ?>/images/lp1004/about-3.png" alt="Non-psychoactive CBD" class="icon" />
				<div class="description">Our full-spectrum, phytocannabinoid rich CBD is guaranteed to contain less than .3% THC. This means you will not feel any psychoactive effects, and you will not get "high".</div>
				<div class="accordion">
					<div class="accordion-header"><img src="<?php bloginfo('template_directory'); ?>/images/lp1004/plus.png" alt="Read More" class="plus" /> Read More</div>
					<div class="accordion-content">Our full-spectrum, phytocannabinoid rich CBD is guaranteed to contain less than .3% THC. This means you will not feel any psychoactive effects, and you will not get "high".</div>
				</div>
			</div>
		</div>
		
	</section>

	<section class="testimonial-cta desktop">
		<img src="<?php bloginfo('template_directory'); ?>/images/lp1004/arrow.png" alt="Order Now"/>
		<div class="shop">
			<a href="/select-your-plan" class="scroll"><div class="shop-btn">Order Now</div></a>
		</div>
	</section>

	<section id="comparison">
		<div class="container">
			<h1 class="headline">The Difference is Clear</h1>
		<hr>
		<p class="subline">CBD and THC both come from the Cannabis Sativa plant. We extract the THC, leaving only therapeutic CBD.</p>
		</div>
		<div class="comparison-table">
			<table>
			<tbody>
				<tr>
				<th class="gold">CBD</th>
				<th class="green">THC</th>
				</tr>
				<tr>
				<td><i class="fa fa-check gold" aria-hidden="true"></i> Hemp</td>
				<td><i class="fa fa-check green" aria-hidden="true"></i> Marijuana</td>
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
			<div class="accordion-content"><img src="<?php bloginfo('template_directory'); ?>/images/lp1004/shop-ingredients.jpg" alt="Ingredient Panel" /></div>
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
				<img class="box" src="<?php bloginfo('template_directory'); ?>/images/single-box-CBD.png" srcset="<?php bloginfo('template_directory'); ?>/images/single-box-CBD@2x.png 2x" alt="Omax Phyto-Max Stress Remedy"/>
				<div class="shop">
					<a href="/select-your-plan" class="scroll"><div class="shop-btn">Order Now</div></a>
				</div>
			</div>
	</section>
</main>

<?php get_template_part('block','footer'); ?>
