<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="profile" href="http://gmpg.org/xfn/11">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="header" class="header-wrapper <?php if(is_front_page()) : echo 'transparent'; endif; ?>">
    <div class="header-content">
        <div class="social">
            <?php if ( is_active_sidebar( 'header_left' ) ) {
                dynamic_sidebar( 'header_left' );
            } ?>
        </div>
        <div class="logo">
            <?php if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            } ?>
        </div>
        <div class="menu-link">
            <a href="#" class="menu-open-button icon-button">
                <span class="material-icons">menu</span>
            </a>
        </div>
    </div>
</header>

<div class="menu-wrapper" id="menu">
    <div class="content grid">
        <div class="column">
            <header class="header-wrapper transparent">
                <div class="header-content">
                    <a href="#" class="menu-close-button icon-button">
                        <span class="material-icons">close</span>
                    </a>
                </div>
            </header>
            <nav class="menu">
                <?php
                    if ( has_nav_menu( 'main-menu' ) ) {

                        wp_nav_menu(
                            array(
                                'container'  => '',
                                'items_wrap' => '%3$s',
                                'theme_location' => 'main-menu',
                            )
                        );

                    }?>
            </nav>
        </div>
        <div class="column menu-right-side">
            <div class="bubble-box primary">
                <span>#hace</span>
                <br>
                <span class="obscure">mos</span>
                <br>
                <span class="prominent">cone</span>
                <br>
                <span class="prominent">xiones</span>
            </div>
        </div>
    </div>
</div>

