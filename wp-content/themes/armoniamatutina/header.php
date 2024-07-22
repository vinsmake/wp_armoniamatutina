<!-- ADVANCED CUSTOM FIELDS IMPORT GLOBAL DATA -->
<?php
$portada = get_option('custom_portada');
?>



<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body class="body">

    <header class="header">
        <div>
            <h1 class="header__title"><?php echo get_bloginfo('name') ?></h1>
        </div>

        <?php 
        if ($portada) {
            echo '<h1>' . esc_html($portada) . '</h1>';
        }
        ?>

        <?php
        $args = array(
            'theme_location' => 'navbar',
            'container' => 'nav',
            'container_class' => 'header__navbar'
        );
        wp_nav_menu($args);
        ?>

    </header>