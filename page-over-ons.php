<?php /* Template Name: Template Over Ons */ ?>

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

    <?php $args = [$general_bg_color, $general_button_color]; ?>
    <?php get_template_part('partials/flexible-content', '', $args); ?>


</div>
<?php get_template_part('partials/clients'); ?>
<?php get_template_part('partials/pre-footer-cta'); ?>
<?php get_footer(); ?>
