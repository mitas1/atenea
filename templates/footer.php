<footer class="footer grid-layout-3 grid-layout-1--sm">
    <div class="grid-span-2">
        <div class="footer-menu">
            <?php
                if ( has_nav_menu( 'main-menu' ) ) {

                    wp_nav_menu(
                        array(
                            'container'  => '',
                            'items_wrap' => '%3$s',
                            'theme_location' => 'main-menu',
                        )
                    );

                } ?>
        </div>

        <?php echo get_option('copyright', DEFAULTS['copyright']) ?>

    </div>
    <div class="footer-chat-bubble">
        <p class="prominent">
            <?php echo get_option('right_prominent_text', DEFAULTS['right_prominent_text']) ?>
        </p>
        <p>
            <?php echo get_option('right_normal_text', DEFAULTS['right_normal_text  ']) ?>
        <p>
    </div>
</footer>
