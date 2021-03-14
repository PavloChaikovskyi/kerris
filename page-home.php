<?php
/*
 * Template Name: Home Template
 */
get_header();
?>



    <section class="section intro">
        <div class="container">
            <div class="row">
                <div class="col-md-6 intro__content">
                    <h1 class="intro__title section__title"><?php the_field('intro_title') ?></h1>
                    <p class="intro__description"><?php the_field('intro_content_text') ?></p>
                    <a href="<?php the_field('intro_button_link') ?><?php the_field('intro_title') ?>"
                        class="btn intro__btn"><?php the_field('intro_button_text') ?></a>
                </div>
            </div>
        </div>
    </section>

    <section class="section how">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="how__title section__title"><?php the_field('how_title') ?></h2>
                </div>
            </div>


            <div class="row">
                <!-- with ACF PRO -> Repeater -->
                <div class="col-md-6 block">
                    <h3 class="block__title"><?php the_field('how_block_title_first') ?></h3>
                    <p class="block__description"><?php the_field('how_block_description_first') ?></p>
                </div>
                <div class="col-md-6 block ">
                    <h3 class="block__title second"><?php the_field('how_block_title_second') ?></h3>
                    <p class="block__description"><?php the_field('how_block_description_second') ?></p>
                </div>
            </div>
        </div>
    </section>

</main>



<?php
get_footer(); 
?>