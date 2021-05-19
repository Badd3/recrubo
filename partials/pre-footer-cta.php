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



    if ( get_field('afbeelding_of_cta') == 'cta'){
    ?>
        <section class="recrubo-cta <?php echo $bg_class; ?> text-center">
        <div data-aos="dots-animation" class="background-dots aos-init"></div>
            <div class="container">
                <h2  data-aos="fade-left" class="white"><?php echo the_field('cta_blok_titel'); ?></h2>
                <a  data-aos="fade-right" href="<?php echo the_field('cta_button_url'); ?>" class="button <?php echo $button_color; ?> bg-white"><?php echo the_field('cta_button_tekst'); ?></a>
            </div>
        </section>
    <?php }; ?>

    <?php if ( get_field('afbeelding_of_cta') == 'afbeelding'){ ?>
        <section style="background-image:url('<?php the_field('pre_footer_achtergrond_afbeelding'); ?>')" class="pre-footer-img"></section>
    <?php }; ?>
<?php }; ?>
