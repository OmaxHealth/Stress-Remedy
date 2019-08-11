<?php get_template_part('block','header'); ?>
<?php the_post(); ?>

<main id="select-plan">
	<section id="upperTagline">
		<div class="container">
			<h2>Welcome to Your <strong>Best Night’s Sleep</strong></h2>
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
						<div class="title">Monthly</div>
						<div class="price">
							<span class="pt1">$</span><span class="pt2">39</span><span class="pt3">95</span><small>*</small>
						</div>
						<div class="ln1">Plus Free Gift</div>
						<hr/>
						<div class="ln2"><strong>$20</strong> Savings!</div>
						<div class="button"><span>Order Now</span></div>
						<div class="ln3">Ships Free every 30 days. Cancel anytime.</div>
					</a>
					<a class="box" href="<?php getOfferURL(2); ?>">
						<div class="title">3 Month Supply</div>
						<div class="price">
							<span class="pt1">$</span><span class="pt2">109</span><span class="pt3">95</span><small>*</small>
						</div>
						<div class="ln1">Plus Free Gift</div>
						<hr/>
						<div class="ln2"><strong>$70</strong> Savings!</div>
						<div class="button"><span>Order Now</span></div>
						<div class="ln3">Ships Free every 90 days. Cancel anytime.</div>
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
						<div class="ln3">Ships Free. Re-order whenever you like.</div>
					</a>					
				</div>
			</div>
		</div>
	</section>
	
</main>

<?php get_template_part('block','footer'); ?>