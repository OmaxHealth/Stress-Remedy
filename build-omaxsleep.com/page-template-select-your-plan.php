<?php get_template_part('block','header'); ?>
<?php the_post(); ?>

<main id="select-plan">
	<section id="upperTagline">
		<div class="container">
			<h2>Welcome to Your <strong>Best Night’s Sleep</strong></h2>
		</div>
	</section>
	
	<section id="offer">
		<div class="container">
			<div class="flexcolumn">
				<div class="column left">
					<h2>Enjoy Omax MAX SLEEP <strong>+ 2 FREE Gifts</strong> with entry into our VIP Membership</h2>
				</div>
				<div class="column right">
					<picture class="product">
						<source srcset="<?php bloginfo('template_directory'); ?>/images/select-your-plan/upper-offer.png, <?php bloginfo('template_directory'); ?>/images/select-your-plan/upper-offer@2x.png 2x" media="(min-width: 768px)">
						<source srcset="<?php bloginfo('template_directory'); ?>/images/select-your-plan/upper-offer.png" media="(max-width: 767px)">
						<img srcset="<?php bloginfo('template_directory'); ?>/images/home/select-your-plan/upper-offer.png" alt="Omax Sleep & Stress Remedy">
					</picture>
				</div>
			</div>
		</div>	
	</section>
	
	<section id="mainCTA">
		<div class="headline">
			<div class="container">
				<h1>Choose Your Delivery</h1>
			</div>
		</div>
		<div class="offers">
			<div class="container">
				<div class="flexbox">
					<a class="box" href="<?php getOfferURL(1); ?>">
						<div class="title">60-Day VIP</div>
						<div class="price">
							<span class="pt1">$</span><span class="pt2">39</span><span class="pt3">95</span><small>*</small>
						</div>
						<div class="ln1">Plus 2 Free Gifts</div>
						<hr/>
						<div class="ln2"><strong>20%</strong> Off Retail</div>
						<div class="button"><span>Order Now</span></div>
						<div class="ln3">*1 bottle ships every 60-days Free shipping. Cancel anytime.</div>
					</a>
					<a class="box" href="<?php getOfferURL(2); ?>">
						<div class="title">90-Day VIP</div>
						<div class="price">
							<span class="pt1">$</span><span class="pt2">109</span><span class="pt3">95</span><small>*</small>
						</div>
						<div class="ln1">Plus 2 Free Gifts</div>
						<hr/>
						<div class="ln2"><strong>39%</strong> Off Retail</div>
						<div class="button"><span>Order Now</span></div>
						<div class="ln3">*3 bottles ship every 90-days Free shipping. Cancel anytime.</div>
					</a>
					<a class="box" href="<?php getOfferURL(3); ?>">
						<div class="title">One Time Delivery</div>
						<div class="price">
							<span class="pt1">$</span><span class="pt2">59</span><span class="pt3">95</span><small>*</small>
						</div>
						<div class="ln1">30-Day Supply</div>
						<hr/>
						<div class="ln2"></div>
						<div class="button"><span>Order Now</span></div>
						<div class="ln3">*1 bottle one-time shipment Free shipping. No Obligation.</div>
					</a>					
				</div>
			</div>
		</div>
	</section>
	
</main>

<?php get_template_part('block','footer'); ?>