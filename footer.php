<?php
wp_footer();
if(!is_front_page()) :
    include get_template_directory() . '/templates/footer.php';
endif;
?>
</body>
</html>
