<?php get_header(); ?>
<div class="container">

    <section class="hero bg-light-blue">
        <div class="hero-left recrubo-block__inner">
            <div class="hero-left__wrapper">
                <h1><?php the_field('hero_titel'); ?></h1>
                <p><?php the_field('hero_subtekst'); ?></p>
            </div>
        </div>
        <div class="contact-form shadow">
            <?php echo do_shortcode('[contact-form-7 id="272" title="Contact"]'); ?>
        </div>
    </section>


</div>
    <?php get_template_part('partials/clients'); ?>

    <?php get_template_part('partials/pre-footer-cta'); ?>

<?php get_footer(); ?>
