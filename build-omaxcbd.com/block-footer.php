<footer>
	<section id="top">
		<div class="container">
			<img src="<?php bloginfo('template_directory'); ?>/images/footer-logo.png" alt="Omax Health"/>
			<ul>
				<li><a href="<?php bloginfo('url'); ?>/select-your-plan/">Shop</a></li>
				<li><a href="<?php bloginfo('url'); ?>/about-cbd/">About CBD</a></li>
				<li><a href="<?php bloginfo('url'); ?>/reviews/">Reviews</a></li>
				<li><a href="<?php bloginfo('url'); ?>/faq/">FAQ</a></li>
				<li><a href="<?php bloginfo('url'); ?>/contact-us/">Contact Us</a></li>
			</ul>
			<div class="boxes">
				<div class="top">
					<div class="box">Free shipping in the <br> continental US only</div>
					<div class="box">60-day guarantee on <br> first box only</div>
					<div class="box">Customer is responsible for <br> return shipping costs</div>
				</div>
				<div class="bottom">
					<div class="box"><span>* With enrollment into VIP auto-shipment program. 60-day money-back guarantee on first box only</span>Real user testimonials have been reimbursed for associated costs of filming.</div>
					<div class="box"><span>These statements have not been evaluated by the Food &amp; Drug Administration.</span> This product is not intended to diagnose, treat, cure or prevent any disease. Consult your doctor before taking this or any dietary supplement.</div>
				</div>
			</div>
		</div>
	</section>

	<section id="bottom">
		<div class="container">
			<p><a href="<?php bloginfo('url'); ?>/terms-and-conditions/">Terms &amp; Conditions</a> | <a href="<?php bloginfo('url'); ?>/privacy-policy/">Privacy Policy</a></p>
			<p>&copy; <?php echo date('Y'); ?> Omax Health, Inc.</p>
			  <ul class="share">
	            <li><a href="https://twitter.com/omaxhealth"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
	            <li><a href="https://www.youtube.com/omaxhealth"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
	            <li><a href="https://facebook.com/omaxhealth"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
	            <li><a href="https://instagram.com/omaxhealth"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          	</ul>
		</div>
		<img src="<?php bloginfo('template_directory'); ?>/images/footer-bird-bottom.png" class="footer-bird" alt="Omax Health"/>
	</section>
</footer>

<!-- jQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.4.1/jquery-migrate.js"></script>
<?php wp_enqueue_script('plugins',get_bloginfo('template_directory').'/js/plugins.min.js',array('jquery')); ?>
<?php wp_enqueue_script('functions',get_bloginfo('template_directory').'/js/main.min.js',array('jquery','plugins')); ?>
<?php wp_footer(); ?>

</body>
</html>
