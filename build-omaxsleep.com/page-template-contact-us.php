<?php get_template_part('block','header'); ?>
<?php the_post(); ?>

<main>
	<section id="contact-us">
		<div class="container">
			<h1 class="headline">Contact Us</h1>
			<div class="flexcolumn">
				<div class="column left"><?php echo do_shortcode('[contact-form-7 id="11" title="Contact Us"]'); ?></div>
				<div class="column right">
					<h2>We're here to help</h2>
					<div class="links">
						<a class="email" href="mailto:care@omaxhealth.com">care@omaxhealth.com</a>
						<a class="phone" href="tel:800-765-6691">800-765-6691</a>
						<a class="faq" href="<?php bloginfo('url'); ?>/faq/">Frequently Asked Questions</a>						
					</div>
				</div>
			</div>
		</div>
	</section>
	
</main>

<?php get_template_part('block','footer'); ?>