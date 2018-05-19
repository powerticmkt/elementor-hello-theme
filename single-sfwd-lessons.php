<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<main id="main" class="site-main" role="main">

	<div class="page-content">
		<?php echo do_shortcode('[INSERT_ELEMENTOR id="15396"]'); ?>
	</div>

</main>

<?php endwhile; ?>

<?php get_footer(); ?>