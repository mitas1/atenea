<?php
get_header();

if (is_front_page()) :
    get_template_part( 'templates/content', 'front-page' );
else :
    while ( have_posts() ) :
        the_post();
        get_template_part( 'templates/content', 'page' );
    endwhile;
endif;

get_footer();
