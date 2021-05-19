<?php if( have_rows('clients_repeater', 'option') ): ?>
    <section data-aos="fade-up" class="clients">
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
