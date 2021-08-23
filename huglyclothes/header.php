<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>

<!--    affichage dans le header de la navbar bootstrap-->
    <nav class="navbar navbar-expand-md navbar-dark bg-primary" role="navigation">
        <div class="container">

            <div class="site-logo-container">

                <div>
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1"
                            aria-expanded="false"
                            aria-label="<?php esc_attr_e('Toggle navigation', 'your-theme-slug'); ?>">
                        <span class="navbar-toggler-icon"></span>
                    </button>
<!--                    logo du site-->
                    <?php the_custom_logo(); ?>
                </div>

                <div>
<!--                    nom du site-->
                    <div class="header__title">
                        <?php bloginfo('name'); ?>
                    </div>
<!--                    slogan du site-->
                    <div class="header__description">
                        <?php bloginfo('description'); ?>
                    </div>
                </div>

            </div>

            <?php
            wp_nav_menu(array(
                'theme_location' => 'menu-header',
                'depth' => 2,
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'bs-example-navbar-collapse-1',
                'menu_class' => 'nav navbar-nav',
                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                'walker' => new WP_Bootstrap_Navwalker(),
            ));
            ?>
        </div>
    </nav>

</header>
