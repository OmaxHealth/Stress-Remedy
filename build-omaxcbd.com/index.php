<?php get_template_part('block','header'); ?>
<?php the_post(); ?>

<main id="wp-content">
	<section>
		<div class="container">
			<?php the_content(); ?>
		</div>
	</section>
</main>

<?php get_template_part('block','footer'); ?>
