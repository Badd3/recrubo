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

    <section class="hero chatbots">
        <div class="background <?php echo $general_bg_color; ?>"></div>
        <div class="animation animation-fade-in hero-left <?php echo $general_bg_color; ?>">
            <h1><?php the_field('hero_titel'); ?></h1>
            <p><?php the_field('hero_subtekst'); ?></p>
            <div class="hero-cta">
                <a class="button bg-white <?php echo $general_button_color; ?> shadow" href="<?php the_field('hero_button_links_url'); ?>"><?php the_field('hero_button_links'); ?></a>
                <a class="button bg-white <?php echo $general_button_color; ?> shadow" href="<?php the_field('hero_button_rechts_url'); ?>"><?php the_field('hero_button_rechts'); ?></a>
            </div>
        </div>
        <div id="demo-bot" class="shadow"></div>
    </section>

    <?php $args = [$general_bg_color, $general_button_color]; ?>
    <?php get_template_part('partials/flexible-content', '', $args); ?>

</div>
<?php get_template_part('partials/clients'); ?>
<?php get_template_part('partials/pre-footer-cta'); ?>

<?php get_footer(); ?>
