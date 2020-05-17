<?php get_template_part( 'templates/content', 'connexiones' ); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-wrapper' ); ?>>
	<header class="page-header">
		<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
	</header>
	<div class="page-content">
		<?php the_content(); ?>
	</div>
</article>
