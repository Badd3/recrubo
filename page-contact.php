<?php get_header(); ?>
<div class="container">

    <section class="hero bg-light-blue">
        <div class="hero-left recrubo-block__inner">
            <div class="hero-left__wrapper animation animation-fade-in">
                <h1><?php the_field('hero_titel'); ?></h1>
                <p><?php the_field('hero_subtekst'); ?></p>
            </div>
        </div>
        <div class="contact-form shadow animation animation-fade-in-right trans-del-300">
            <?php echo do_shortcode('[contact-form-7 id="272" title="Contact"]'); ?>
        </div>
    </section>

    <section class="contact-info_page">
        <div class="contact-info_block animation animation-fade-in trans-del-200">
            <span><a href="tel:0137009700">(013)7009700</a></span>
        </div>
        <div class="contact-info_block animation animation-fade-in trans-del-400">
            <span><a href="mailto:info@recrubo.com">info@recrubo.com</a></span>
        </div>
        <div class="contact-info_block animation animation-fade-in trans-del-600">
            <span>Piusstraat 54, 5038WT Tilburg</span>
        </div>
        <div class="contact-info_block animation animation-fade-in trans-del-800">
            <span>KvK: 80480233</span>
        </div>


    </section>
</div>
    <?php get_template_part('partials/clients'); ?>

    <?php get_template_part('partials/pre-footer-cta'); ?>

<?php get_footer(); ?>
