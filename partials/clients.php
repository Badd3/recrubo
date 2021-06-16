<?php if( have_rows('clients_repeater', 'option') ): ?>

    <?php if(is_front_page()) {
        $under_hero = 'under-hero';
    } ?>
    <section  class="clients animation animation-fade-in <?php echo $under_hero; ?>">
        <div class="container">
            <div class="client-slider">
                <!-- Slider main container -->
                <div class="swiper-wrapper">
                    <!-- Additional required wrapper -->

                        <?php while( have_rows('clients_repeater', 'option') ): the_row(); ?>
                        <div class="swiper-slide">
                            <div class="clients-image__wrapper">
                                <img src="<?php the_sub_field('afbeelding'); ?>" alt="">
                            </div>
                        </div>
                        <?php endwhile; ?>

                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
