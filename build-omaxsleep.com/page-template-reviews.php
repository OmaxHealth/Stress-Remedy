<?php get_template_part('block','header'); ?>

<main>
	<section id="reviews">
		<div class="container">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
			the_content();
			endwhile; endif; ?>
	</section>
	</div>
</main>

<?php get_template_part('block','footer'); ?>