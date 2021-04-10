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
        <div class="recrubo-block__inner bg-light-blue">
            <h2>Chatbots voor HR en Recruitment</h2>
            <p>HR-chatbots inzetten om algemene vragen van personeel te beantwoorden en hiermee in hun informatiebehoefte te voorzien. Vragen met betrekking tot het rooster, de werktijden, het CAO, inloggegevens etc. komen nog altijd op het bord van de verkeerde personen terecht. </p>
            <a class="button bg-white shadow blue" href="/contact">Ontdek meer</a>
        </div>
    </section>

    <section class="recrubo-block automatisering d-flex row-nowrap align-center flex-end">
        <div class="recrubo-block__inner bg-light-green">
            <h2>Automatisering</h2>
            <p>HR-chatbots inzetten om algemene vragen van personeel te beantwoorden en hiermee in hun informatiebehoefte te voorzien. Vragen met betrekking tot het rooster, de werktijden, het CAO, inloggegevens etc. komen nog altijd op het bord van de verkeerde personen terecht. </p>
            <a class="button bg-white shadow green" href="/contact">Ontdek meer</a>
        </div>
    </section>

    <section class="recrubo-block platformen d-flex row-nowrap align-center">
        <div class="recrubo-block__inner bg-light-orange">
            <h2>Platformen</h2>
            <p>HR-chatbots inzetten om algemene vragen van personeel te beantwoorden en hiermee in hun informatiebehoefte te voorzien. Vragen met betrekking tot het rooster, de werktijden, het CAO, inloggegevens etc. komen nog altijd op het bord van de verkeerde personen terecht. </p>
            <a class="button bg-white shadow orange" href="/contact">Ontdek meer</a>
        </div>
    </section>

    <section class="recrubo-block marketing d-flex row-nowrap align-center flex-end">
        <div class="recrubo-block__inner bg-light-pink">
            <h2>Marketing</h2>
            <p>HR-chatbots inzetten om algemene vragen van personeel te beantwoorden en hiermee in hun informatiebehoefte te voorzien. Vragen met betrekking tot het rooster, de werktijden, het CAO, inloggegevens etc. komen nog altijd op het bord van de verkeerde personen terecht. </p>
            <a class="button bg-white shadow pink" href="/contact">Ontdek meer</a>
        </div>
    </section>
</div> <!-- container -->
    <section class="testimonials">
        <div class="container">
            <h2>Wat onze klanten zeggen</h2>
        </div>
        <div class="recrubo-slider">
            <!-- Slider main container -->
            <div class="swiper-container">
            <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="testimonial-wrapper">
                            <div class="personal-info d-flex">
                                <div class="image">
                                    <img src="<?php THEMEDIR; ?>/wp-content/themes/recrubo/dist/images/testimonial.png" alt="" srcset="">
                                </div>
                                <div class="info">
                                    <h4 class="name">Mila Price</h4>
                                    <span class="title">HR bij Tele Performance</span>
                                </div>
                            </div>
                            <div class="content">
                                <span>
                                    “We are happy to hear you had a positive experience! We value your input and encourage you to let us know more details about your experience with us.”
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-wrapper">
                            <div class="personal-info d-flex">
                                <div class="image">
                                    <img src="<?php THEMEDIR; ?>/wp-content/themes/recrubo/dist/images/testimonial.png" alt="" srcset="">
                                </div>
                                <div class="info">
                                    <h4 class="name">Mila Price</h4>
                                    <span class="title">HR bij Tele Performance</span>
                                </div>
                            </div>
                            <div class="content">
                                <span>
                                    “We are happy to hear you had a positive experience! We value your input and encourage you to let us know more details about your experience with us.”
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-wrapper">
                            <div class="personal-info d-flex">
                                <div class="image">
                                    <img src="<?php THEMEDIR; ?>/wp-content/themes/recrubo/dist/images/testimonial.png" alt="" srcset="">
                                </div>
                                <div class="info">
                                    <h4 class="name">Mila Price</h4>
                                    <span class="title">HR bij Tele Performance</span>
                                </div>
                            </div>
                            <div class="content">
                                <span>
                                    “We are happy to hear you had a positive experience! We value your input and encourage you to let us know more details about your experience with us.”
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-wrapper">
                            <div class="personal-info d-flex">
                                <div class="image">
                                    <img src="<?php THEMEDIR; ?>/wp-content/themes/recrubo/dist/images/testimonial.png" alt="" srcset="">
                                </div>
                                <div class="info">
                                    <h4 class="name">Mila Price</h4>
                                    <span class="title">HR bij Tele Performance</span>
                                </div>
                            </div>
                            <div class="content">
                                <span>
                                    “We are happy to hear you had a positive experience! We value your input and encourage you to let us know more details about your experience with us.”
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-wrapper">
                            <div class="personal-info d-flex">
                                <div class="image">
                                    <img src="<?php THEMEDIR; ?>/wp-content/themes/recrubo/dist/images/testimonial.png" alt="" srcset="">
                                </div>
                                <div class="info">
                                    <h4 class="name">Mila Price</h4>
                                    <span class="title">HR bij Tele Performance</span>
                                </div>
                            </div>
                            <div class="content">
                                <span>
                                    “We are happy to hear you had a positive experience! We value your input and encourage you to let us know more details about your experience with us.”
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-wrapper">
                            <div class="personal-info d-flex">
                                <div class="image">
                                    <img src="<?php THEMEDIR; ?>/wp-content/themes/recrubo/dist/images/testimonial.png" alt="" srcset="">
                                </div>
                                <div class="info">
                                    <h4 class="name">Mila Price</h4>
                                    <span class="title">HR bij Tele Performance</span>
                                </div>
                            </div>
                            <div class="content">
                                <span>
                                    “We are happy to hear you had a positive experience!
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            </div>

        </div>
    </section>

<?php get_footer(); ?>
