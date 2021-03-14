<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport"
            content="width=device-width, initial-scale=1">
        <link rel="profile"
            href="http://gmpg.org/xfn/11">
        <?php wp_head(); ?>

    </head>

    <body>
        <main class="home">
            <img src="<?php the_field('intro_main_image') ?>"
                alt="football-game"
                class="home__img">

            <section class="header">
                <div class="container">
                    <div class="row mx-0 header__row">
                        <img src="<?php echo get_template_directory_uri() . '/assets/src/images/img/logo.svg'?>"
                            alt="loremipsum"
                            class="logo header__logo">
                    </div>
                </div>
            </section>