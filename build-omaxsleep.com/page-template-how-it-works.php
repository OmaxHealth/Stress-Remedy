<?php get_template_part('block','header'); ?>
<?php the_post(); ?>

<main>
	<section id="hero">
		<div class="container">
			<div class="text">
				<h1>Hemp <span>is not</span> Marijuana</h1>
				<p>Our legally compliant formula will not get you high.</p>
			</div>
		</div>
	</section>
	
	<section id="system">
		<div class="container">
			<div class="text">
				<h2><span>The</span> Endocannabinoid System</h2>
				<p>Hemp oil affects the body’s Endocannabinoid System, which is tasked with balancing the total body for maximum health.</p>
			</div>
			<picture class="body">
				<source srcset="<?php bloginfo('template_directory'); ?>/images/how-it-works/system-desktop.png" media="(min-width: 1024px)">
				<source srcset="<?php bloginfo('template_directory'); ?>/images/how-it-works/system-mobile.png" media="(max-width: 1023px)">
				<img srcset="<?php bloginfo('template_directory'); ?>/images/how-it-works/system-desktop.png" alt="The Endocannabinoid System">
			</picture>
		</div>
	</section>
	
	<section id="ingredients">
		<div class="container">
			<div class="text">
				<h2><span>Patent-Pending <br/>Formula</span> Clinically <br/>Researched <br/>Ingredients</h2>
				<p>Omax Sleep & Stress Remedy delivers the ultimate power-trio of clinically researched ingredients to support mind and body wellness.</p>
			</div>
			<div class="flexcolumn">
				<div class="column left">
					<img src="<?php bloginfo('template_directory'); ?>/images/how-it-works/ingredients-hemp-oil.png" alt="hemp oil"/>
					<h3>Hemp <br/>Oil</h3>
					<p>European sourced, phytocannabinoid rich hemp oil, derived from the stems and stalks of industrial hemp. CO2 extracted using pharmaceutical process, for therapeutic potency and purity.</p>
				</div>
				<div class="column middle">
					<img src="<?php bloginfo('template_directory'); ?>/images/how-it-works/ingredients-alphawave.png" alt="AlphaWave L-Theanine"/>
					<h3>AlphaWave&reg; <br/>L-Theanine</h3>
					<p>Highly purified amino acid found naturally in green tea leaves, is one of nature’s most effective natural relaxants: it’s clinically studied to stimulate the production of alpha waves in the brain.</p>
				</div>
				<div class="column right">
					<img src="<?php bloginfo('template_directory'); ?>/images/how-it-works/ingredients-fish-oil.png" alt="fish oil"/>
					<h3>ProResolv&trade; <br/>Omega-3</h3>
					<p>Patented blend of omega-3 fatty acids from anchovies and sardines, with a 4:1 EPA-to-DHA ratio, developed for optimal inflammatory response, while supporting joints, mood & mind.</p>
				</div>				
			</div>
		</div>		
	</section>
	
	<section id="formula">
		<div class="container">
			<h2>Our legally compliant formula will not get you high.</h2>
			<p>Many hemp products have been known to have quality issues, so it’s important to invest in premium brands to get the best results. Omax Sleep & Stress Remedy conforms to the highest standards of manufacturing in the supplement industry. We verify the identity, quality and quantity of ingredients on the label, and each batch obtains two certificates of analysis to ensure purity and concentration.</p>
			<img src="<?php bloginfo('template_directory'); ?>/images/how-it-works/badge-cGMP.png" alt="cGMP"/>			
		</div>		
	</section>
	
	<section id="purity">
		<div class="container">
			<div class="inner">
				<h2>Our Purity and Concentration</h2>
				<div class="flexcolumn">
					<ul class="column left">
						<li>European Sourced & Farmed, EU-Certified</li>
						<li>Chemical Free Critical CO2 Extraction</li>
						<li>Third-Party Testing and Certification</li>
					</ul>
					<ul class="column right">
						<li>Free of Pesticides, Heavy Metals, Mycotoxins, Fungus</li>
						<li>Third-Party Testing and Certification</li>
						<li>Full-Spectrum / Phytocannabinoids from Hemp Oil</li>
					</ul>
				</div>
			</div>		
		</div>		
	</section>
	
	<section id="lowerCTA">
		<div class="container">
			<div class="inner">
				<img src="<?php bloginfo('template_directory'); ?>/images/how-it-works/icon-guarantee-v2.svg" />
				<a class="button red" href=""><span>Shop Now</span></a>				
			</div>			
		</div>
	</section>

</main>

<?php get_template_part('block','footer'); ?>