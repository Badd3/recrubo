<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php the_title(); ?> | <?php bloginfo('name'); ?></title>
    <link rel="shortcut icon" href="<?php echo THEMEDIR ?>/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo THEMEDIR ?>/apple-touch-icon.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Poppins:wght@600;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="site-header">
        <div class="container">
            <div class="site-header_wrapper">
                <div class="menu-wrapper">
                    <nav class="primary-navigation">
                        <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
                    </nav>
                </div>
                <div class="site-logo">

                </div>
                <div class="header-cta">
                    <div class="telnr">
                        <a href="tel:+31612345678">+31612345678</a>
                    </div>
                    <span>Contact</span>
                </div>
            </div>
        </div>
    </header>

    <section class="site-content">
        <div class="container">
