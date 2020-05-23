<section class="section-with-image-background">
	<div class="content bubble-box-content-page">
		<div class="bubble-box">
			<span>#hacemos</span>
			<br>
			<span class="prominent">conexiones</span>
		</div>
	</div>
</section>
<main class="content content-page">
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-wrapper' ); ?>>
		<header class="page-header">
			<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
		</header>
		<div class="page-content">
			<?php the_content(); ?>
		</div>
	</article>
</main>
