<?php get_header(); ?>
<div class="container">

    <section class="hero align-center d-flex recrubo-block">
        <div class="hero-left recrubo-block__inner bg-light-blue">
            <h1><?php the_field('hero_titel'); ?></h1>
            <p><?php the_field('hero_subtekst'); ?></p>
            <div class="hero-cta">
                <a class="button bg-white shadow blue" href="<?php the_field('hero_button_rechts_url'); ?>"><?php the_field('hero_button_links'); ?></a>
                <a class="button black" href="<?php the_field('hero_button_rechts_url'); ?>"><?php the_field('hero_button_rechts'); ?></a>
            </div>
        </div>
        <div class="scroll-indicator">
            <div class="mouse"></div>
        </div>
    </section>

    <section class="onze-diensten d-flex row-wrap">
        <h2 class="flex-100 "> Onze Diensten</h2>
        <div class="column-wrap flex-100 d-flex row-wrap space-between">
            <?php
            $chatbots = get_field('chatbots');
            ?>
            <div class="column chatbot">
                <a href="">
                    <div class="icon">
                        <img src="<?php THEMEDIR; ?>/wp-content/themes/recrubo/dist/images/chat.svg" alt="" srcset="">
                    </div>
                    <h3><?php echo $chatbots['dienst_kolom_1_titel']; ?></h3>
                    <span><?php echo $chatbots['dienst_kolom_1_subtekst']; ?></span>
                </a>
            </div>
            <?php
            $automatisering = get_field('automatisering');
            ?>
            <div class="column automatisering">
                <a href="">
                    <div class="icon">
                        <img src="<?php THEMEDIR; ?>/wp-content/themes/recrubo/dist/images/repeat.svg" alt="" srcset="">
                    </div>
                    <h3><?php echo $automatisering['dienst_kolom_2_titel']; ?></h3>
                    <span><?php echo $automatisering['dienst_kolom_2_subtekst']; ?></span>
                </a>
            </div>
            <?php
                $plaformen = get_field('platformen')
            ?>
            <div class="column platformen">
                <a href="">
                    <div class="icon">
                        <img src="<?php THEMEDIR; ?>/wp-content/themes/recrubo/dist/images/layers.svg" alt="" srcset="">
                    </div>
                    <h3><?php echo $plaformen['dienst_kolom_3_titel']; ?></h3>
                    <span><?php echo $plaformen['dienst_kolom_3_subtekst']; ?></span>
                </a>
            </div>
            <?php
                $marketing = get_field('marketing')
            ?>
            <div class="column marketing">
                <a href="">
                    <div class="icon">
                        <img src="<?php THEMEDIR; ?>/wp-content/themes/recrubo/dist/images/fast.svg" alt="" srcset="">
                    </div>
                    <h3><?php echo $marketing['dienst_kolom_4_titel']; ?></h3>
                    <span><?php echo $marketing['dienst_kolom_4_subtekst']; ?></span>
                </a>
            </div>
        </div>
    </section>

    <section class="recrubo-block chatbot d-flex row-nowrap align-center">
        <!-- <div class="recrubo-block__grid"> -->
            <div class="recrubo-block__inner bg-light-blue">
                <h2><?php the_field('cta_chatbots_titel'); ?></h2>
                <p><?php the_field('cta_chatbots_subtekst'); ?></p>
                <a class="button bg-white shadow blue" href="<?php the_field('cta_chatbots_knop_url'); ?>"><?php the_field('cta_chatbots_knoptekst'); ?></a>
            </div>
            <div class="recrubo-block__img">
                <img src="<?php the_field('cta_chatbots_img'); ?>" alt="" srcset="">
            </div>
        <!-- </div> -->
    </section>

    <section class="recrubo-block automatisering d-flex row-reverse-nowrap align-center">
        <div class="recrubo-block__inner bg-light-green">
            <h2><?php the_field('cta_automatisering_titel'); ?></h2>
            <p><?php the_field('cta_automatisering_subtekst'); ?></p>
            <a class="button bg-white shadow green" href="<?php the_field('cta_automatisering_knop_url'); ?>"><?php the_field('cta_automatisering_knoptekst'); ?></a>
        </div>
        <div class="recrubo-block__img">
            <img src="<?php the_field('cta_automatisering_img'); ?>" alt="" srcset="">
        </div>
    </section>

    <section class="recrubo-block platformen d-flex row-nowrap align-center">
        <div class="recrubo-block__inner bg-light-orange">
            <h2><?php the_field('cta_platformen_titel'); ?></h2>
            <p><?php the_field('cta_platformen_subtekst'); ?></p>
            <a class="button bg-white shadow orange" href="<?php the_field('cta_platformen_knop_url'); ?>"><?php the_field('cta_platformen_knoptekst'); ?></a>
        </div>
        <div class="recrubo-block__img">
            <img src="<?php the_field('cta_platformen_img'); ?>" alt="" srcset="">
        </div>
    </section>

    <section class="recrubo-block marketing d-flex row-reverse-nowrap align-center">
        <div class="recrubo-block__inner bg-light-pink">
            <h2><?php the_field('cta_marketing_titel'); ?></h2>
            <p><?php the_field('cta_marketing_subtekst'); ?></p>
            <a class="button bg-white shadow pink" href="<?php the_field('cta_marketing_knop_url'); ?>"><?php the_field('cta_marketing_knoptekst'); ?></a>
        </div>
        <div class="recrubo-block__img">
            <img src="<?php the_field('cta_marketing_img'); ?>" alt="" srcset="">
        </div>
    </section>
</div> <!-- container -->
    <section class="testimonials">
        <div class="container">
            <h2>Wat onze klanten zeggen</h2>
        </div>
        <div class="recrubo-slider">
                <?php if( have_rows('testimonial') ): ?>
                    <!-- Slider main container -->
                    <div class="swiper-container">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <?php while( have_rows('testimonial') ): the_row(); ?>
                                    <div class="swiper-slide">
                                        <div class="testimonial-wrapper">
                                            <div class="personal-info d-flex">
                                                <div class="image d-flex align-center">
                                                    <img src="<?php the_sub_field('afbeelding'); ?>" alt="" srcset="">
                                                </div>
                                                <div class="info">
                                                    <h4 class="name"><?php the_sub_field('naam'); ?></h4>
                                                    <span class="title"><?php the_sub_field('functie'); ?></span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <span>
                                                    <?php the_sub_field('quote'); ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                            <?php endwhile; ?>
                            <!-- If we need pagination -->

                        </div>

                    </div>
                <?php endif; ?>
        </div>
        <div class="swiper-pagination"></div>
    </section>

<?php
if( get_field('cta_aan') ) {

    $color = get_field('cta_achtergrond_kleur');

    if($color == 'blauw') {
        $bg_class = 'bg-blue';
        $button_color = 'blue';
    }
    elseif ($color == 'groen') {
        $bg_class = 'bg-green';
        $button_color = 'green';
    }
    elseif ($color == 'oranje') {
        $bg_class = 'bg-orange';
        $button_color = 'orange';
    }
    elseif ($color == 'roze') {
        $bg_class = 'bg-pink';
        $button_color = 'pink';
    }


    ?>
    <section class="recrubo-cta <?php echo $bg_class; ?> text-center">
        <div class="container">
            <h2 class="white"><?php echo the_field('cta_blok_titel'); ?></h2>
            <a href="<?php echo the_field('cta_button_url'); ?>" class="button <?php echo $button_color; ?> bg-white"><?php echo the_field('cta_button_tekst'); ?></a>
        </div>
    </section>
<?php }; ?>

<?php get_footer(); ?>
