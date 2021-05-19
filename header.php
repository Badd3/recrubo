<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1.0, user-scalable=no> -->
    <title><?php the_title(); ?> | <?php bloginfo('name'); ?></title>
    <link rel="shortcut icon" href="<?php echo THEMEDIR ?>/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo THEMEDIR ?>/apple-touch-icon.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Poppins:wght@600;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<?php
if( get_field('template_kleur', get_the_ID()) ) {
$template_color = get_field('template_kleur');

    if($template_color == 'blauw') {
        $custom_body_class = 'blue-body';


    }
    elseif ($template_color == 'groen') {
        $custom_body_class = 'green-body';

    }
    elseif ($template_color == 'oranje') {
        $custom_body_class = 'orange-body';

    }
    elseif ($template_color== 'roze') {
        $custom_body_class = 'pink-body';

    }
}
?>
<body <?php body_class($custom_body_class); ?>>

    <header class="site-header">
        <div class="container">
            <div class="site-header_wrapper d-flex space-between row-wrap">
                <nav class="primary-navigation">
                    <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
                </nav>
                <div class="site-logo">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php THEMEDIR;?>/wp-content/themes/recrubo/dist/images/recrubo-logo.png" alt="" srcset="">
                    </a>
                </div>
                <div class="header-cta d-flex row-wrap">
                    <div class="telnr">
                        <a href="tel:+31612345678">+31612345678</a>
                    </div>
                        <a href="/contact" class="contact">Contact</a>
                </div>
                <div id="nav-burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-menu">
        <?php wp_nav_menu(array('menu' => 'mobile-header')); ?>
    </div>

    <section class="site-content">
