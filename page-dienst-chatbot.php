<?php /* Template Name: Template Dienst Chatbot */ ?>

<?php get_header();
if( get_field('template_kleur') ) {
$template_color = get_field('template_kleur');

    if($template_color == 'blauw') {
        $general_bg_color = 'bg-light-blue';
        $general_button_color = 'blue';

    }
    elseif ($template_color == 'groen') {
        $general_bg_color = 'bg-light-green';
        $general_button_color = 'green';
    }
    elseif ($template_color == 'oranje') {
        $general_bg_color = 'bg-light-orange';
        $general_button_color = 'orange';
    }
    elseif ($template_color== 'roze') {
        $general_bg_color = 'bg-light-pink';
        $general_button_color = 'pink';
    }
}


?>
<div class="container">

    <section class="hero dienst chatbot align-center d-flex recrubo-block">
        <div class="hero-left recrubo-block__inner <?php echo $general_bg_color; ?>">
            <h1><?php the_field('hero_titel'); ?></h1>
            <p><?php the_field('hero_subtekst'); ?></p>
            <div class="hero-cta">
                <a class="button bg-white <?php echo $general_button_color; ?> shadow" href="<?php the_field('hero_button_rechts_url'); ?>"><?php the_field('hero_button_links'); ?></a>
                <a class="button bg-white <?php echo $general_button_color; ?> shadow" href="<?php the_field('hero_button_rechts_url'); ?>"><?php the_field('hero_button_rechts'); ?></a>
            </div>
        </div>
        <div id="demo-bot" class="shadow"></div>
    </section>

    <?php

    // Check rows exists.
    if( have_rows('usp_repeater') ):
        $count = count(get_field('usp_repeater'));
        if($count <= 2) {
            $spacing = 'space-around';
        }
        else {
            $spacing = 'space-between';
        }
        ?>
        <section class="usp d-flex align-center row-wrap <?php echo $spacing; ?>">
        <?php

    // Loop through rows.
        while( have_rows('usp_repeater') ) : the_row();
        ?>
            <div class="usp-block d-flex row-nowrap align-center">
                <div class="usp-icon shadow">
                    <img src="<?php the_sub_field('icon'); ?>" alt="" srcset="">
                </div>
                <span><?php the_sub_field('tekst'); ?></span>
            </div>
        <?php
    // End loop.
    endwhile;
    ?>
    </section>
    <?php
    else :
    // Do something...
    endif;
?>

    <section class="recrubo-block full-width d-flex align-center row-wrap <?php echo $general_bg_color; ?>">
        <div class="recrubo-block__inner">
            <h2><?php the_field('blok_1_titel'); ?></h2>
            <p><?php the_field('blok_1_subtekst'); ?></p>
            <a class="button bg-white shadow <?php echo $general_button_color; ?>" href="<?php the_field('blok_1_button_links_url'); ?>"><?php the_field('blok_1_button_links'); ?></a>
            <a class="button black" href="<?php the_field('blok_1_button_rechts_url'); ?>"><?php the_field('blok_1_button_rechts'); ?></a>
        </div>
        <div class="recrubo-block__img">
            <img src="<?php the_field('blok_1_afbeelding'); ?>" alt="" srcset="">
        </div>
    </section>

    <section class="recrubo-accordion d-flex">

        <?php

        // Check rows exists.
        if( have_rows('faq_repeater_1') ):
            // Loop through rows.
            $i = 0;
            while( have_rows('faq_repeater_1') ) : the_row();


            $state = true;
            if($i % 2 == 0){
                $state = !$state;
            }

            if($state):
                $accordion_class = "even";

            else:
                $accordion_class = "uneven";
            endif;

                // Load sub field value.
                ?>
                <div class="accordion-wrapper shadow <?php echo $accordion_class; ?>">
                    <div class="circle-plus closed">
                        <!-- <div class="circle"> -->
                            <div class="horizontal"></div>
                            <div class="vertical"></div>
                        <!-- </div> -->
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

        // No value.
        else :
            // Do something...
        endif;
        ?>
    </section>

    <section class="recrubo-block full-width d-flex align-center row-reverse <?php echo $general_bg_color; ?>">
        <div class="recrubo-block__inner">
            <h2><?php the_field('blok_2_titel'); ?></h2>
            <p><?php the_field('blok_2_subtekst'); ?></p>
            <a class="button bg-white shadow <?php echo $general_button_color; ?>" href="<?php the_field('blok_2_button_links_url'); ?>"><?php the_field('blok_2_button_links'); ?></a>
            <a class="button black" href="<?php the_field('blok_1_button_rechts_url'); ?>"><?php the_field('blok_2_button_rechts'); ?></a>
        </div>
        <div class="recrubo-block__img">
            <img src="<?php the_field('blok_2_afbeelding'); ?>" alt="" srcset="">
        </div>
    </section>

<section class="recrubo-accordion d-flex">

    <?php

    // Check rows exists.
    if( have_rows('faq_repeater_2') ):
        // Loop through rows.
        $i = 0;
        while( have_rows('faq_repeater_2') ) : the_row();


        $state = true;
            if($i % 2 == 0){
                $state = !$state;
            }

            if($state):
                $accordion_class = "even";

            else:
                $accordion_class = "uneven";
            endif;

            // Load sub field value.
            ?>
                <div class="accordion-wrapper shadow <?php echo $accordion_class; ?>">
                    <div class="circle-plus closed">
                        <!-- <div class="circle"> -->
                            <div class="horizontal"></div>
                            <div class="vertical"></div>
                        <!-- </div> -->
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

    // No value.
    else :
        // Do something...
    endif;
    ?>
</section>

</div>
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
