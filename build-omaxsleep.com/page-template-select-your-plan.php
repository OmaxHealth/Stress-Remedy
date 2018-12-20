<?php get_template_part('block','header'); ?>
<?php the_post(); ?>

<main>
	<section id="mainCTA">
		<div class="headline">
			<div class="container">
				<h1>Select Your Plan</h1>
			</div>
		</div>
		<div class="offers">
			<div class="container">
				<div class="flexbox">
					<div class="box">
						<h2>One-Time</h2>
						<div class="priceGroup">
							<span class="price">$79.95</span>
							<span class="shipping">FREE SHIPPING</span>
						</div>
						<div class="imageGroup">
							<img src="<?php bloginfo('template_directory'); ?>/images/single-box-SLEEP.png" srcset="<?php bloginfo('template_directory'); ?>/images/single-box-SLEEP@2x.png 2x" alt="Omax Sleep & Stress Remedy"/>
						</div>
						<div class="noteGroup">
							<span class="value">60-day Money Back Guarantee</span>
						</div>
						<div class="shop">
							<a href="https://omaxsleep.com/cart/buybutton.php?id=nCcg0yhknkSHZScdvgkYxg"><div class="shop-btn">Order Now</div></a>
						</div>
					</div>
					<div class="box">
						<h2>Subscribe & Save</h2>
						<div class="priceGroup">
							<span class="price"><span><strike>$79.95</strike></span> $39.95</span>
							<span class="shipping">FREE SHIPPING</span>
						</div>
						<div class="imageGroup">
							<img src="<?php bloginfo('template_directory'); ?>/images/single-box-SLEEP.png" srcset="<?php bloginfo('template_directory'); ?>/images/single-box-SLEEP@2x.png 2x" alt="Omax Sleep & Stress Remedy"/>
						</div>
						<div class="noteGroup">
							<span class="value">50% Off First Box</span>
							<span class="note">60-day supply renews every 2 months at the discounted rate of $59/box. Cancel or change anytime.</span>
						</div>
						<div class="shop">
							<a href="https://omaxsleep.com/cart/buybutton.php?id=f9L0agEtz0CM3ypEb2r-fg"><div class="shop-btn">Order Now</div></a>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</section>
	
	<section id="lowerTagline">
		<div class="container">
			<h2>Free Shipping + 60 Day Money Back Guarantee</h2>
		</div>
	</section>	
		
</main>

<?php get_template_part('block','footer'); ?>