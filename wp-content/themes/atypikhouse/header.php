<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
    <?php wp_body_open(); ?>

    <section class="header">
        <div class="top-bar">
            <div class="container">
                <div class="left">
                    <?php wp_nav_menu( array( 'theme_location' => 'topbar-menu' ) ); ?>
                </div>
                <div class="right">
                    
                </div>
            </div>
        </div>
        <div class="main-header">
            <div class="container">
                <a href="<?= home_url('/'); ?>"><img src="<?= get_template_directory_uri(); ?>/assets/img/logo.png" alt="AtypikHouse"></a>
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
            </div>
        </div>
    </section>