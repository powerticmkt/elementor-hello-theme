<?php while ( have_posts() ) : the_post(); ?>

<main id="main" class="site-main" role="main">

	<div class="page-content">
		<?php the_content(); ?>
	</div>

</main>

<?php endwhile;
