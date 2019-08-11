<footer>
	<div class="upper">
		<div class="container">
			<img class="logo" src="<?php bloginfo('template_directory'); ?>/images/global/footer-logo.png" alt="Omax Health"/>
			<nav class="pages">
				<a href="<?php bloginfo('url'); ?>/select-your-plan/">Shop</a>
				<a href="<?php bloginfo('url'); ?>/reviews/">Reviews</a>
				<a href="<?php bloginfo('url'); ?>/how-it-works/">How it Works</a>
				<a href="<?php bloginfo('url'); ?>/faq/">FAQ</a>
			</nav>
			<div class="grid">
				<div class="row r1">
					<div class="box"><p>Free shipping in the <br> continental US only</p></div>
					<div class="box"><p>60-day guarantee on <br> first box only</p></div>
					<div class="box"><p>Customer is responsible for <br> return shipping costs</p></div>
				</div>
				<div class="row r2">
					<p>* With enrollment into VIP auto-shipment program. 60-day money-back guarantee on first box only.<br/> Real user testimonials have been reimbursed for associated costs of filming.</p>
				</div>
				<div class="row r3">
					<p>These statements have not been evaluated by the Food &amp; Drug Administration.<br/> This product is not intended to diagnose, treat, cure or prevent any disease. Consult your doctor before taking this or any dietary supplement.</p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="lower">
		<div class="container">
			<nav class="legal">			
				<a href="<?php bloginfo('url'); ?>/terms-and-conditions/">Terms &amp; Conditions</a>
				<a href="<?php bloginfo('url'); ?>/privacy-policy/">Privacy Policy</a>
			</nav>
			<p class="copyright">&copy; <?php echo date('Y'); ?> Omax Health, Inc.</p>
			<nav class="social">
	      	<a class="twitter" target="_blank" href="https://twitter.com/omaxhealth">Twitter</a>
	         <a class="youtube" target="_blank" href="https://www.youtube.com/omaxhealth">YouTube</a>
	         <a class="facebook" target="_blank" href="https://facebook.com/omaxhealth">Facebook</a>
	         <a class="instagram" target="_blank" href="https://instagram.com/omaxhealth">Instagram</a>
	      </nav>		
		</div>
	</div>
</footer>

<?php wp_enqueue_script('plugins',get_bloginfo('template_directory').'/js/plugins.min.js',array('jquery')); ?>
<?php wp_enqueue_script('functions',get_bloginfo('template_directory').'/js/main.min.js',array('jquery','plugins')); ?>
<?php wp_footer(); ?>

</body>
</html>
