<?php
    // Check value exists.

    $general_bg_color = $args[0];
    $general_button_color = $args[1];

        if( have_rows('flexible_dienst') ):

            // Loop through rows.
            while ( have_rows('flexible_dienst') ) : the_row();

                // Case: Paragraph layout.
                if( get_row_layout() == 'accordion' ):
                    $id_sectie_accordion = get_sub_field('sectie_id_accordion');
                    if( have_rows('faq_repeater') ):
                        // Loop through rows. ?>
                        <section id="<?php echo $id_sectie_accordion; ?>" class="recrubo-accordion d-flex">
                        <?php
                        $i = 0;
                        while( have_rows('faq_repeater') ) : the_row();


                        $state = true;
                        if($i % 2 == 0){
                            $state = !$state;
                        }

                        if($state):
                            $accordion_class = "even";
                            $fade_option = "fade-left";

                        else:
                            $accordion_class = "uneven";
                            $fade_option = "fade-right";
                        endif;

                            // Load sub field value.
                            ?>
                            <div  data-aos="<?php echo $fade_option; ?>" class="accordion-wrapper shadow <?php echo $accordion_class; ?>">
                                    <div class="circle-plus closed">
                                        <div class="circle">
                                            <div class="horizontal"></div>
                                            <div class="vertical"></div>
                                        </div>
                                    </div>
                                <button class="accordion"><?php the_sub_field('faq_titel'); ?></button>
                                <div class="panel">
                                    <p><?php the_sub_field('faq_reveal'); ?></p>
                                </div>
                            </div>
                            <?php
                            // Do something...

                        $i++;
                        // End loop.
                        endwhile;
                        ?>
                        </section>
                        <?php
                    // No value.
                    else :
                        // Do something...
                    endif;


                elseif( get_row_layout() == 'recrubo_block' ): ?>
                    <section id="<?php the_sub_field('sectie_id'); ?>" class="recrubo-block__flexible <?php echo $general_bg_color; if(get_sub_field('positie_afbeelding') == 'links'): echo ' reverse'; endif; ?>">
                        <div class="recrubo-block__inner">
                            <h2><?php the_sub_field('blok_titel'); ?></h2>
                            <p><?php the_sub_field('blok_subtekst'); ?></p>
                            <a class="button bg-white shadow <?php echo $general_button_color; ?>" href="<?php the_sub_field('blok_button_links_url'); ?>"><?php the_sub_field('blok_button_links'); ?></a>
                            <a class="button black" href="<?php the_sub_field('blok_button_rechts_url'); ?>"><?php the_sub_field('blok_button_rechts'); ?></a>
                        </div>
                        <div  class="recrubo-block__img">
                            <img data-aos="fade-up" src="<?php the_sub_field('blok_afbeelding'); ?>" alt="" srcset="">
                        </div>
                    </section>
                    <?php

                elseif( get_row_layout() == 'usp' ):
                    $id_sectie_usp = get_sub_field('sectie_id_usp');
                        // $count = 0;
                        $count = 0;
                        $usp_repeater = get_sub_field('usp_repeater');

                        if(!empty($usp_repeater)) {
                            $count = count($usp_repeater);
                        }
                            if( have_rows('usp_repeater') ):

                                if($count <= 2) {
                                    $spacing = 'space-around';
                                }
                                else {
                                    $spacing = 'space-between';
                                }
                                ?>
                                <section id="<?php echo $id_sectie_usp; ?>" class="usp d-flex align-center row-wrap <?php echo $spacing; ?>">
                                <?php

                                 // Loop through rows.
                                while( have_rows('usp_repeater') ) : the_row();
                                ?>
                                    <div data-aos="fade-up" data-aos-delay="600" class="usp-block d-flex row-nowrap align-center">
                                        <div class="usp-icon shadow">
                                            <img src="<?php the_sub_field('icon'); ?>" alt="" srcset="">
                                        </div>
                                        <span><?php the_sub_field('tekst'); ?></span>
                                    </div>
                                <?php
                            // End loop.

                            // $count++;
                            endwhile;
                            ?>
                                </section>

                            <?php
                            else :
                            // Do something...
                            endif;

                elseif( get_row_layout() == 'image_centered' ): ?>
                    <section id="<?php the_sub_field('sectie_id'); ?>" class="recrubo-img__big">
                        <div class="content__wrapper <?php echo $general_bg_color; ?>">
                            <div class="content">
                                    <h2><?php the_sub_field('titel'); ?></h2>
                                    <p><?php the_sub_field('tekst'); ?></p>
                            </div>
                        </div>

                        <div data-aos="fade-up" class="img__wrapper">
                            <img src="<?php the_sub_field('afbeelding'); ?>" alt="" srcset="">
                        </div>
                    </section>
                <?php elseif( get_row_layout() == 'quote_block' ): ?>
                    <section id="<?php the_sub_field('sectie_id'); ?>" class="recrubo-quote__block <?php if(get_sub_field('spiegelen') == true): echo ' reverse'; endif; ?>">
                        <div class="background <?php echo $general_bg_color; ?>"></div>
                        <div class="content">
                            <?php the_sub_field('tekst'); ?>
                        </div>
                        <div data-aos="<?php if(get_sub_field('spiegelen') == true){ echo 'fade-right';} else {echo 'fade-left';}; ?>" class="image">
                            <img src="<?php the_sub_field('afbeelding'); ?>" alt="">
                        </div>
                    </section>

                <?php
                endif;


            // End loop.
            endwhile;

        // No value.
        else :
            // Do something...
        endif;
    ?>
