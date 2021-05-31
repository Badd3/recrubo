<?php get_header(); ?>
<div class="container">

<section class="hero-home">
    <!-- <div class="background bg-light-blue"></div> -->
    <div class="background bg-light-blue"></div>
        <div class="hero-left recrubo-block__inner">
        <!-- <div class="background bg-light-blue"></div> -->
            <div class="hero-left__wrapper">
                <h1><?php the_field('hero_titel'); ?></h1>
                <p><?php the_field('hero_subtekst'); ?></p>
                <div class="hero-cta">
                    <a class="button primary shadow" href="<?php the_field('hero_button_links_url'); ?>"><?php the_field('hero_button_links'); ?></a>
                    <a class="button secondary" href="<?php the_field('hero_button_rechts_url'); ?>"><?php the_field('hero_button_rechts'); ?></a>
                </div>
            </div>


        </div>
            <div class="video-wrapper">
               <img id="landing-gif" class="display-none" src="<?php THEMEDIR; ?>/wp-content/themes/recrubo/dist/images/recrubo-landing.gif" alt="" srcset="">
            </div>
    </section>

    </div> <!-- container -->

    <?php get_template_part('partials/clients'); ?>

    <div class="container">
    <section id="<?php the_field('diensten_id'); ?>" class="onze-diensten d-flex row-wrap">
        <h2 class="flex-100 "> Onze diensten</h2>
        <div class="column-wrap flex-100 d-flex space-between">
            <?php
            $chatbots = get_field('chatbots');
            ?>
            <div data-aos-delay="50" data-aos="fade-up" class="column chatbot">
                <a href="<?php echo $chatbots['url']; ?>">
                    <div class="icon">
                        <!-- <img src="<?php THEMEDIR; ?>/wp-content/themes/recrubo/dist/images/chat.svg" alt="" srcset=""> -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36">
                            <g fill-rule="evenodd">
                                <path d="M40.084 25.258c-8.097 0-14.66 6.562-14.66 14.658 0 2.812.79 5.434 2.16 7.664l.442.718-2.758 6.434 6.434-2.758.72.441c2.228 1.37 4.85 2.16 7.662 2.16 8.096 0 14.658-6.562 14.658-14.659 0-8.096-6.562-14.658-14.658-14.658zM22.167 39.916C22.167 30.022 30.19 22 40.084 22 49.978 22 58 30.022 58 39.916c0 9.895-8.022 17.917-17.916 17.917-3.124 0-6.066-.802-8.626-2.209l-4.906 2.103c-2.704 1.158-5.437-1.575-4.279-4.279l2.103-4.906c-1.407-2.56-2.209-5.502-2.209-8.626zm9.773-3.257c0-.9.73-1.629 1.629-1.629h4.886c.899 0 1.629.73 1.629 1.629s-.73 1.629-1.63 1.629H33.57c-.9 0-1.63-.73-1.63-1.63zm0 6.515c0-.9.73-1.629 1.629-1.629h13.03c.899 0 1.628.73 1.628 1.629s-.73 1.629-1.628 1.629h-13.03c-.9 0-1.63-.73-1.63-1.63z" transform="translate(-132 -162) translate(0 110) translate(110 30)"/>
                            </g>
                        </svg>

                    </div>
                    <h3><?php echo $chatbots['dienst_kolom_1_titel']; ?></h3>
                    <span><?php echo $chatbots['dienst_kolom_1_subtekst']; ?></span>
                </a>
            </div>
            <?php
            $automatisering = get_field('automatisering');
            ?>
            <div data-aos-delay="100" data-aos="fade-up" class="column automatisering">
                <a href="<?php echo $automatisering['url']; ?>">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="38" height="36" viewBox="0 0 38 36">
                            <g fill-rule="evenodd">
                                <path d="M40.259 22c9.941 0 18 8.059 18 18s-8.059 18-18 18c-.765 0-1.385-.62-1.385-1.385 0-.764.62-1.384 1.385-1.384 8.412 0 15.23-6.82 15.23-15.231 0-8.412-6.818-15.23-15.23-15.23S25.029 31.587 25.029 40c0 3.778 1.382 7.329 3.803 10.071v-4.869c0-.764.62-1.384 1.385-1.384s1.385.62 1.385 1.384v7.833c0 .765-.62 1.385-1.385 1.385h-7.832c-.765 0-1.385-.62-1.385-1.385s.62-1.385 1.385-1.385h4.152c-2.726-3.205-4.278-7.302-4.278-11.65 0-9.941 8.059-18 18-18zm0 8.863c.765 0 1.385.62 1.385 1.384v9.026l4.496 4.496c.541.541.541 1.418 0 1.959-.54.54-1.417.54-1.958 0l-4.902-4.903c-.26-.26-.406-.612-.406-.979v-9.599c0-.764.62-1.384 1.385-1.384z" transform="translate(-451 -162) translate(0 110) translate(350 30) translate(80)"/>
                            </g>
                        </svg>

                    </div>
                    <h3><?php echo $automatisering['dienst_kolom_2_titel']; ?></h3>
                    <span><?php echo $automatisering['dienst_kolom_2_subtekst']; ?></span>
                </a>
            </div>
            <?php
                $plaformen = get_field('platformen')
            ?>
            <div data-aos-delay="150" data-aos="fade-up" class="column platformen">
                <a href="<?php echo $plaformen['url']; ?>">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="36" viewBox="0 0 34 36">
                            <g fill-rule="evenodd">
                                <path d="M40.491 25.258c-.457-.25-1.012-.25-1.47 0l-12.95 7.064 12.95 7.064c.458.25 1.013.25 1.47 0l12.95-7.064-12.95-7.064zm-2.942-2.695c1.376-.75 3.038-.75 4.413 0l12.949 7.062c2.134 1.164 2.134 4.23 0 5.393l-2.095 1.143 2.095 1.142c2.134 1.164 2.134 4.23 0 5.394l-2.095 1.142 2.095 1.143c2.134 1.163 2.134 4.229 0 5.393l-12.949 7.062c-1.375.75-3.037.75-4.413 0l-12.948-7.062c-2.135-1.164-2.135-4.23 0-5.393l2.094-1.143-2.094-1.142c-2.135-1.164-2.135-4.23 0-5.394l2.094-1.142-2.094-1.143c-2.135-1.163-2.135-4.229 0-5.393l12.948-7.062zM29.902 37.91L26.07 40l12.95 7.064c.46.25 1.014.25 1.471 0L53.441 40l-3.831-2.09-7.648 4.17c-1.375.752-3.037.752-4.413 0l-7.647-4.17zm0 7.678l-3.832 2.09 12.95 7.064c.46.25 1.014.25 1.471 0l12.95-7.064-3.831-2.09-7.648 4.17c-1.375.752-3.037.752-4.413 0l-7.647-4.17z" transform="translate(-773 -162) translate(0 110) translate(670 30) translate(80)"/>
                            </g>
                        </svg>
                    </div>
                    <h3><?php echo $plaformen['dienst_kolom_3_titel']; ?></h3>
                    <span><?php echo $plaformen['dienst_kolom_3_subtekst']; ?></span>
                </a>
            </div>
            <?php
                $marketing = get_field('marketing')
            ?>
            <div data-aos-delay="200" data-aos="fade-up" class="column marketing">
                <a href="<?php echo $marketing['url']; ?>">
                    <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="36" viewBox="0 0 23 36">
                        <g fill-rule="evenodd">
                            <path d="M42.49 23.045c2.142-2.41 6.075-.307 5.262 2.813l-2.65 10.152 4.387 1.755c1.974.79 2.566 3.298 1.155 4.887L37.928 56.955c-2.141 2.41-6.074.307-5.261-2.813l2.649-10.152-4.386-1.755c-1.974-.788-2.566-3.298-1.155-4.887L42.49 23.045zm2.292 2.039L32.07 39.386l6.898 2.76-3.33 12.77L48.35 40.614l-6.898-2.76 3.33-12.77z" transform="translate(-1099 -162) translate(0 110) translate(990 30) translate(80)"/>
                        </g>
                    </svg>

                    </div>
                    <h3><?php echo $marketing['dienst_kolom_4_titel']; ?></h3>
                    <span><?php echo $marketing['dienst_kolom_4_subtekst']; ?></span>
                </a>
            </div>
        </div>
    </section>

    <section data-aos="fade-up" id="<?php the_field('chatbot_id'); ?>" class="recrubo-block chatbot d-flex row-nowrap align-center">
        <div class="background bg-light-blue"></div>
            <div class="recrubo-block__inner">
                <h2><?php the_field('cta_chatbots_titel'); ?></h2>
                <p><?php the_field('cta_chatbots_subtekst'); ?></p>
                <a class="button bg-white shadow blue" href="<?php the_field('cta_chatbots_knop_url'); ?>"><?php the_field('cta_chatbots_knoptekst'); ?></a>
            </div>
            <div class="recrubo-block__img">
                <img data-aos="fade-left" src="<?php the_field('cta_chatbots_img'); ?>" alt="" srcset="">
            </div>
    </section>

    <section data-aos="fade-up" id="<?php the_field('automatisering_id'); ?>" class="recrubo-block automatisering d-flex row-reverse-nowrap align-center">
    <div class="background bg-light-green"></div>
        <div class="recrubo-block__inner">
            <h2><?php the_field('cta_automatisering_titel'); ?></h2>
            <p><?php the_field('cta_automatisering_subtekst'); ?></p>
            <a class="button bg-white shadow green" href="<?php the_field('cta_automatisering_knop_url'); ?>"><?php the_field('cta_automatisering_knoptekst'); ?></a>
        </div>
        <div class="recrubo-block__img">
            <img data-aos="fade-right" src="<?php the_field('cta_automatisering_img'); ?>" alt="" srcset="">
        </div>
    </section>

    <section data-aos="fade-up" id="<?php the_field('platformen_id'); ?>" class="recrubo-block platformen d-flex row-nowrap align-center">
    <div class="background bg-light-orange"></div>
        <div class="recrubo-block__inner">
            <h2><?php the_field('cta_platformen_titel'); ?></h2>
            <p><?php the_field('cta_platformen_subtekst'); ?></p>
            <a class="button bg-white shadow orange" href="<?php the_field('cta_platformen_knop_url'); ?>"><?php the_field('cta_platformen_knoptekst'); ?></a>
        </div>
        <div class="recrubo-block__img">
            <img data-aos="fade-left" src="<?php the_field('cta_platformen_img'); ?>" alt="" srcset="">
        </div>
    </section>

    <section data-aos="fade-up" id="<?php the_field('marketing_id'); ?>" class="recrubo-block marketing d-flex row-reverse-nowrap align-center">
    <div class="background bg-light-pink"></div>
        <div class="recrubo-block__inner">
            <h2><?php the_field('cta_marketing_titel'); ?></h2>
            <p><?php the_field('cta_marketing_subtekst'); ?></p>
            <a class="button bg-white shadow pink" href="<?php the_field('cta_marketing_knop_url'); ?>"><?php the_field('cta_marketing_knoptekst'); ?></a>
        </div>
        <div class="recrubo-block__img">
            <img data-aos="fade-right" src="<?php the_field('cta_marketing_img'); ?>" alt="" srcset="">
        </div>
    </section>


</div> <!-- container -->

    <?php get_template_part('partials/testimonials-home'); ?>



    <?php get_template_part('partials/pre-footer-cta'); ?>

<?php get_footer(); ?>
