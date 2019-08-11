<?php get_template_part('block','header'); ?>
<?php the_post(); ?>

<main>
	<section id="reviews">
		<div class="container">
			<?php the_content(); ?>
	</section>
	</div>
</main>

<?php get_template_part('block','footer'); ?>