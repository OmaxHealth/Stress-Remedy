<?php get_template_part('content','header'); ?>
<?php the_post(); ?>

<main id="wp-content">
	<section>
		<div class="container">
			<?php the_content(); ?>
		</div>
	</section>
</main>

<?php get_template_part('content','footer'); ?>
