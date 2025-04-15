<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header">
    <div class="header__inner">
        <a href="<?php echo home_url(); ?>" class="header__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Logo">
        </a>

        <nav class="header__nav js-header-nav">
            <?php
            wp_nav_menu([
                'theme_location' => 'header_menu',
                'container' => false,
                'menu_class' => 'menu',
            ]);
            ?>
        </nav>


        <button class="header__button js-header-nav-toggle">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <a href="#" class="btn-secondary">Get in touch</a>
    </div>
</header>

