<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @package BikeBag
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/webp" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.webp">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    
    <?php wp_head(); ?>
    
    <style>
        body {
            font-family: 'Rajdhani', sans-serif;
        }
        .lato {
            font-family: 'Lato', sans-serif;
        }
    </style>
</head>
<body <?php body_class('bg-white text-black antialiased'); ?> style="font-family: 'Rajdhani', sans-serif;">
<?php wp_body_open(); ?>

<?php get_template_part('template-parts/navbar'); ?>

<main>