<?php
get_header();

if (is_front_page()) :
    get_template_part( 'templates/content', 'front-page' );
else :
?>
<main class="content content-page">
    <?php
    while ( have_posts() ) :
        the_post();
        get_template_part( 'templates/content', 'page' );
    endwhile;
    ?>
</main>
<?php
endif;

get_footer();
