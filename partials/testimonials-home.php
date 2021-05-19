<?php if( have_rows('testimonial') ): ?>
    <section class="testimonials">
        <div class="container">
            <h2>Wat onze klanten zeggen</h2>
        </div>
        <div class="recrubo-slider">

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

        </div>
        <div class="swiper-pagination"></div>
    </section>
<?php endif; ?>
