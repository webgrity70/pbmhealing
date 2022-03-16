<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head class="no-js">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head();?>
</head>

<body <?php body_class(); ?> >
    <?php wp_body_open(); ?>
    <header class="header navbar-light" id="header">
        <nav class="navbar navbar-expand-lg container">
            <?php the_custom_logo(); ?>
            <button class="navbar-toggler" type="button" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse" id="navbarSupportedContent">
               <?php

                    wp_nav_menu(
                        array(

                            'theme_location' => 'menu-1',
                            'container' => 'ul',
                            'menu_class' => 'navbar-nav ml-auto',                       
                        )
                    );
                ?>

                <div class="d-flex my-2 my-lg-0 rightNav">
                    <button class="searchBtn btnTransparent" data-modaltarget="search"><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
            </div>
        </nav>
    </header>